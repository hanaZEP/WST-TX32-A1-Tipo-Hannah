<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>

    <?= $this->include('components/landing/hero_section') ?>
    
    <div class="container mb-5 mt-5">
    <div class="mb-5 p-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="about-section">
                    <h5 class="section-title text-center">Why Fly Philippine Airlines?</h5>
                    <p class="section-text text-dark">Philippine Airlines offers a world-class experience with a comprehensive network across the Philippines and key global cities. Whether you're flying to Manila, Cebu, Davao, or international destinations like Los Angeles, Tokyo, and Dubai, we deliver comfort, reliability, and top-notch safety protocols every step of the way.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-10 col-sm-10 m-auto">
                <img src="assets/images/PhilAir_WhyFly.jpg" class="img-fluid rounded" alt="Why Fly Philippine Airlines">
            </div>
        </div>
    </div>
</div>

<section class="services mb-5">
    <div class="container d-flex justify-content-between">
        <div class="service-box">
            <a href="<?= base_url() ?>" class="service-link text-center fs-5">
                <img class="service-icon" src="assets/images/icons/checkin.png" alt="Check In">
                <h3>Check In</h3>
            </a>
        </div>
        <div class="service-box">
            <a href="<?= base_url() ?>" class="service-link text-center fs-5">
                <img class="service-icon" src="assets/images/icons/flightstatus.png" alt="Flight Status">
                <h3>Flight Status</h3>
            </a>
        </div>
        <div class="service-box">
            <a href="<?= base_url() ?>" class="service-link text-center fs-5">
                <img class="service-icon" src="assets/images/icons/bookflight.png" alt="Book Flight">
                <h3>Book Flight</h3>
            </a>
        </div>
    </div>
</section>

<section class="flights mb-5">
    <div class="container">
        <h1 class="text-center mb-4">Explore Flights from</h1>
        <div id="flightsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <p class="carousel-text text-center">Manila</p>
                        <img src="assets/images/destinations/Manila.jpg" class="img-fluid rounded places mb-3" alt="Manila">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <p class="carousel-text text-center">Cebu</p>
                        <img src="assets/images/destinations/Cebu.jpg" class="img-fluid rounded places mb-3" alt="Cebu">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <p class="carousel-text text-center">Davao</p>
                        <img src="assets/images/destinations/Davao.jpg" class="img-fluid rounded places mb-3" alt="Davao">
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#flightsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#flightsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>



<?= $this->endSection('content') ?>