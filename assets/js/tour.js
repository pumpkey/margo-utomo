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

document.getElementById("toggle-sukamade").addEventListener("click", function() {
    var moreInfo = document.getElementById("more-sukamade");
    var toggleText = document.getElementById("toggle-sukamade");

    if (moreInfo.style.display === "none") {
        moreInfo.style.display = "block";
        toggleText.innerText = "Show Less";
    } else {
        moreInfo.style.display = "none";
        toggleText.innerText = "Show More";
    }
});


document.getElementById("toggle-alaspurwo").addEventListener("click", function() {
    var moreInfo = document.getElementById("more-alaspurwo");
    var toggleText = document.getElementById("toggle-alaspurwo");

    if (moreInfo.style.display === "none") {
        moreInfo.style.display = "block";
        toggleText.innerText = "Show Less";
    } else {
        moreInfo.style.display = "none";
        toggleText.innerText = "Show More";
    }
});

document.getElementById("toggle-kalibaru").addEventListener("click", function() {
    var moreInfo = document.getElementById("more-kalibaru");
    var toggleText = document.getElementById("toggle-kalibaru");

    if (moreInfo.style.display === "none") {
        moreInfo.style.display = "block";
        toggleText.innerText = "Show Less";
    } else {
        moreInfo.style.display = "none";
        toggleText.innerText = "Show More";
    }
});

document.getElementById("toggle-amargo").addEventListener("click", function() {
    var moreInfo = document.getElementById("more-amargo");
    var toggleText = document.getElementById("toggle-amargo");

    if (moreInfo.style.display === "none") {
        moreInfo.style.display = "block";
        toggleText.innerText = "Show Less";
    } else {
        moreInfo.style.display = "none";
        toggleText.innerText = "Show More";
    }
});

document.getElementById("toggle-aroma").addEventListener("click", function() {
    var moreInfo = document.getElementById("more-aroma");
    var toggleText = document.getElementById("toggle-aroma");

    if (moreInfo.style.display === "none") {
        moreInfo.style.display = "block";
        toggleText.innerText = "Show Less";
    } else {
        moreInfo.style.display = "none";
        toggleText.innerText = "Show More";
    }
});

document.getElementById("toggle-ijen").addEventListener("click", function() {
    var moreInfo = document.getElementById("more-ijen");
    var toggleText = document.getElementById("toggle-ijen");

    if (moreInfo.style.display === "none") {
        moreInfo.style.display = "block";
        toggleText.innerText = "Show Less";
    } else {
        moreInfo.style.display = "none";
        toggleText.innerText = "Show More";
    }
});

document.getElementById("toggle-baluran").addEventListener("click", function() {
    var moreInfo = document.getElementById("more-baluran");
    var toggleText = document.getElementById("toggle-baluran");

    if (moreInfo.style.display === "none") {
        moreInfo.style.display = "block";
        toggleText.innerText = "Show Less";
    } else {
        moreInfo.style.display = "none";
        toggleText.innerText = "Show More";
    }
});