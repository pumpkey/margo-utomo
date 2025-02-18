<?php include 'includes/header.php'; ?>

<main>
    <section id="galleries" data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-in-out">
        <div class="galleries-container">
            <h2 data-aos="fade-down" data-aos-delay="200" data-aos-duration="1000">
                <span class="underline">Photo Gallery</span>
            </h2>
            <div class="galleries-wrapper" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1200">
                <div class="galleries-row" data-aos="fade-up" data-aos-delay="600">
                    <img src="assets/images/gallery1.jpg" alt="galleries 1" class="zoomable">
                    <img src="assets/images/gallery2.jpg" alt="galleries 2" class="zoomable">
                    <img src="assets/images/gallery3.jpg" alt="galleries 3" class="zoomable">
                </div>
                <div class="galleries-row" data-aos="fade-up" data-aos-delay="800">
                    <img src="assets/images/eco1.jpg" alt="galleries 1" class="zoomable">
                    <img src="assets/images/hill1.jpeg" alt="galleries 2" class="zoomable">
                    <img src="assets/images/eco2.jpg" alt="galleries 3" class="zoomable">
                    <img src="assets/images/hill2.jpeg" alt="galleries 4" class="zoomable">
                </div>
                <div class="galleries-row" data-aos="fade-up" data-aos-delay="600">
                    <img src="assets/images/gallery4.jpg" alt="galleries 1" class="zoomable">
                    <img src="assets/images/gallery5.jpg" alt="galleries 2" class="zoomable">
                    <img src="assets/images/gallery6.jpg" alt="galleries 3" class="zoomable">
                </div>
                <div class="galleries-row" data-aos="fade-up" data-aos-delay="800">
                    <img src="assets/images/eco3.jpg" alt="galleries 1" class="zoomable">
                    <img src="assets/images/hill3.jpeg" alt="galleries 2" class="zoomable">
                    <img src="assets/images/eco3.jpg" alt="galleries 3" class="zoomable">
                    <img src="assets/images/hill4.jpeg" alt="galleries 4" class="zoomable">
                </div>
                <div class="galleries-row" data-aos="fade-up" data-aos-delay="600">
                    <img src="assets/images/gallery7.jpg" alt="galleries 1" class="zoomable">
                    <img src="assets/images/gallery8.jpg" alt="galleries 2" class="zoomable">
                    <img src="assets/images/hillview-resort.jpeg" alt="galleries 3" class="zoomable">
                </div>
                <div class="galleries-row" data-aos="fade-up" data-aos-delay="800">
                    <img src="assets/images/eco-resort.jpg" alt="galleries 1" class="zoomable">
                    <img src="assets/images/home-hero.png" alt="galleries 2" class="zoomable">
                    <img src="assets/images/hill-hero.jpg" alt="galleries 3" class="zoomable">
                    <img src="assets/images/eco-hero.jpg" alt="galleries 4" class="zoomable">
                </div>
            </div>
        </div>
    </section>

    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
        <div id="caption"></div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>