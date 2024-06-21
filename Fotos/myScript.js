document.addEventListener('DOMContentLoaded', (event) => {
    const imagen = document.querySelector('.imagen');

    imagen.addEventListener('click', () => {
        imagen.classList.toggle('ampliada');
    });
});







// $(document).ready(function(){
//   $("img-responsive").click(function(){
//   var t = $(this).attr("src");
//   $(".modal-body").html("<img src='"+ t +"' class='modal-img'>");
//   $("#myModal").modal();
// });


// });
