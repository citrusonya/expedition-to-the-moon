$(document).ready(function() {
    $('.open_modal').on('click', function() {
        $('.modal_background, .modal_window').fadeIn(200);
    });
    
    $('.close_modal, .modal_background').on('click', function() {
        $('.modal_background, .modal_window').fadeOut(200);
    });
    
    $('.link').on('click', function (e) {
        e.preventDefault();
        $('.content').removeClass('active');
        $('.link').removeClass('link_active');
        $(this).addClass('link_active');
        let itemId = $(this).attr('data-link-id');
        $('.content[data-content-id="' + itemId + '"]').addClass('active');
    });

    $('#country_id').on('change', function(){
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

let stars = [];
const svg = document.getElementById("svg");
let w = window.innerWidth;
let h = window.innerHeight;

let colors = [
 "#5A51B4",
 "#392DB4",
 "#473db4",
 "#8df3fb",
 "#ffff33"
];

window.addEventListener("resize", function (e) {
 w = svg.style.width = window.innerWidth;
 h = svg.style.height = window.innerHeight;
 createStars();
});

class Star {
  constructor(x, y, r) {
    this.x = x;
    this.y = y;
    this.r = r;
    this.color = colors[Math.floor(Math.random() * colors.length)];
    this.opacity = Math.random() + 0.2;
    this.starEl = document.createElementNS(
      "http://www.w3.org/2000/svg",
      "circle"
    );
    this.starEl.setAttribute("fill", this.color);
    this.starEl.setAttribute("cx", this.x);
    this.starEl.setAttribute("cy", this.y);
  }

  updatePath() {
    this.starEl.setAttribute("fill-opacity", this.opacity);
    this.starEl.setAttribute("r", this.r);
  }
 
  animate() {
    var time = 2;
    var delay = Math.random();
    TweenLite.to(this, time, {
      r: this.r + 1,
      opacity: Math.random(),
      ease: Bounce.easeOut,
      delay: delay,
      onUpdate: () => this.updatePath(),
      onComplete: () =>
      TweenLite.to(this, time, {
        r: this.r - 1,
        opacity: Math.random() + 0.2,
        ease: Bounce.easeOut,
        delay: delay,
        onUpdate: () => this.updatePath(),
        onComplete: () => this.animate()
      })
    });
  }
}

const createStars = () => {
  stars = [];
  while (svg.firstChild) {
    svg.removeChild(svg.firstChild);
  }
  for (var i = 0; i < 40; i++) {
    var x = Math.random() * w;
    var y = Math.random() * h;
    var r = Math.ceil(Math.random() * 3) + 1;
    var star = new Star(x, y, r);
    stars.push(star);
    star.updatePath();
    svg.appendChild(star.starEl);
    star.animate();
  }
};

createStars();