

img = document.getElementById("img1");
// Function to set image dimensions
function enlargeImg() {
    img.style.width = "60%";
    img.style.height = "auto";
    img.style.transition = "width 0.5s ease";
}

// Function to reset image dimensions
function resetImg() {
    img.style.width = "100%";
    img.style.height = "auto";
    img.style.transition = "width 0.5s ease";
    
}








// $(document).ready(function(){
//   $("img-responsive").click(function(){
//   var t = $(this).attr("src");
//   $(".modal-body").html("<img src='"+ t +"' class='modal-img'>");
//   $("#myModal").modal();
// });


// });