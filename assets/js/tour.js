function toggleDescription() {
    var fullText = document.getElementById("full-description");
    var button = document.getElementById("toggle-description");
    if (fullText.style.display === "none") {
        fullText.style.display = "block";
        button.textContent = "Show Less";
    } else {
        fullText.style.display = "none";
        button.textContent = "Show More";
    }
}

var swiper = new Swiper(".facility-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});
