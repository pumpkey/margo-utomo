let currentIndex = 0;
const slides = document.querySelectorAll(".slide");
const carousel = document.querySelector(".carousel");
const dotsContainer = document.createElement("div");

dotsContainer.classList.add("carousel-dots");
carousel.appendChild(dotsContainer);

slides.forEach((_, i) => {
    const dot = document.createElement("span");
    dot.classList.add("dot");
    if (i === 0) dot.classList.add("active");
    dot.addEventListener("click", () => {
        currentSlide(i);
    });
    dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll(".dot");

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.remove("active");
        slide.style.transform = `translateX(${(i - index) * 100}%)`;
        slide.style.opacity = i === index ? "1" : "0";
    });
    slides[index].classList.add("active");
    
    dots.forEach((dot, i) => {
        dot.classList.toggle("active", i === index);
    });
}

function currentSlide(index) {
    currentIndex = index;
    showSlide(currentIndex);
    resetAutoSlide();
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

let autoSlide = setInterval(nextSlide, 5000);

function resetAutoSlide() {
    clearInterval(autoSlide);
    autoSlide = setInterval(nextSlide, 5000);
}

showSlide(currentIndex);

// ========================================================================

let tourIndex = 0;
const tourSlides = document.querySelectorAll(".tour-slide");

function showTourSlide(index) {
    tourSlides.forEach((slide, i) => {
        slide.classList.remove("tour-active");
        slide.style.transform = `translateX(${(i - index) * 100}%)`;
        slide.style.opacity = i === index ? "1" : "0";
    });
    tourSlides[index].classList.add("tour-active");
}

function nextTourSlide() {
    tourIndex = (tourIndex + 1) % tourSlides.length;
    showTourSlide(tourIndex);
}

setInterval(nextTourSlide, 5000);

// ========================================================================
