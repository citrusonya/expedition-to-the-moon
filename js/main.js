$(document).ready(function() {
    $('.nav-link').on('click', function (e) {
        e.preventDefault();
        $('.content').removeClass('active');
        $('.nav-link').removeClass('active_link');
        $(this).addClass('active_link');
        let itemId = $(this).attr('data-link-id');
        $('.content[data-content-id="' + itemId + '"]').addClass('active');
    });

    $('#country').on('change', function(){
        if($(this).val() == 0){
            $('#input_country').show();
        } else {
            $('#input_country').hide();
        }
    })

    $('#add_button').click(function(){
        $('#person_form')[0].reset();
        $('#operation').val('Add');
    });

    $(document).on('submit', '#person_form', function(e){

        e.preventDefault();
        const   first_name = $('#first_name').val(),
                last_name = $('#last_name').val();
        let     sp_id = $('#sp_id').val(),
                rank_id = $('#rank_id').val(),
                country_id = $('#country_id').val();

        if(first_name != '' && last_name != ''){
            
            $.ajax({
                url: 'crud/person_change.php',
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                    
                success: function(data){
                    Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Экипаж укомплектован успешно!',
                    showConfirmButton: false,
                    timer: 1500
                })
                    
                    $('#person_form')[0].reset();
                    $('#userModal').modal('hide');
                },

                error:function(data){
                    Swal.fire({
                    icon: 'error',
                    title: 'Произошла ошибка, попробуйте снова.',
                    showConfirmButton: false,
                    timer: 1500
                    })
                }
            });
        }
    });

    $('.edit').on('click', function(){
        const id = $(this).attr('id');

        $.ajax({
            url: 'crud/person_get_one_record.php',
            method: 'POST',
            data: { id:id },
            dataType: 'json',

            success:function(data){
                $('#userModal').modal('show');
                $('#first_name').val(data.first_name);
                $('#last_name').val(data.last_name);
                $('#sp_id').val(data.sp_id);
                $('#rank_id').val(data.rank_id);
                $('#country_id').val(data.country_id);
                $('#id').val(id);
                $('#operation').val("Edit");
            }
        })
    });

    $('.delete').on('click', function(){
        const id = $(this).attr('id'),
        personFName = $(this).attr('data-f-name'),
        personLName = $(this).attr('data-l-name');

        Swal.fire({
            title: `Вы уверены, что <br/> ${personFName} ${personLName} <br/> не соответствует специализации?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Да, вернуть на Землю',
            cancelButtonText: 'Нет'

        })
        .then((result) => {

            if (result.isConfirmed) {

                $.ajax({
                    url: 'crud/person_delete.php',
                    method: 'POST',
                    data: { id:id },

                    success:function(data){
                        Swal.fire({
                            icon: 'success',
                            title: 'Бывший сотрудник успешно доставлен домой!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    },

                    error:function(data){
                        Swal.fire({
                            icon: 'error',
                            title: 'Что-то пошло не так. Пожалуйста, попробуйте позже.',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                });
            }
        })
    });
})