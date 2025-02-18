var images = document.querySelectorAll('.zoomable');
var modal = document.getElementById('imageModal');
var modalImg = document.getElementById("modalImage");
var captionText = document.getElementById("caption");
var close = document.getElementsByClassName("close")[0];

images.forEach(function(image) {
    image.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    };
});

close.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}