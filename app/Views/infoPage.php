<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>

<div class="container mb-5">
    <h1 class="text-center fw-bold display-4 mt-5 bg-light py-3 mx-5 rounded-2">Booking, Check-in, and Boarding</h1>
    <div class="p-3" style="max-width: 100%;">
        <div class="row g-0">
            <div class="m-auto">
                <div class="about-section travel-info">
                    <h5 class="section-title">Booking Process</h5>
                    <p class="section-text text-dark">Planning to book a flight? Please note that bookings made less than 60 minutes before departure will no longer be accepted through our online platform. We encourage you to visit our nearest sales office or contact our customer service team to check availability.</p>
                    <h5 class="section-title">Check-in and Boarding Guidelines</h5>
                    <ul class="section-list" style="padding-left: 60px;">
                        <li class="section-text">For a smoother experience, we recommend checking in online before heading to the airport.</li>
                        <li class="section-text">For domestic flights, check-in counters close 45 minutes before departure, while international flights close 1 hour before departure.</li>
                        <li class="section-text">Face masks may be required depending on local guidelines, so please ensure you are informed.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container justify-content-center">
        <div class="p-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-lg-5 col-md-12 col-sm-12 travel-info mx-auto">
                    <div class="about-section">
                        <h5 class="section-title bg-light">Online Check-in</h5>
                        <ul class="section-list" style="padding-left: 60px; margin-bottom: 60px;">
                            <li class="section-text">International flights: Online check-in is available from 48 hours up to 2 hours before departure.</li>
                            <li class="section-text">Domestic flights: Available from 48 hours up to 1 hour before departure.</li>
                        </ul>
                        <h5 class="section-title bg-light">Online Check-in Restrictions</h5>
                        <ul class="section-list" style="padding-left: 60px;">
                            <li class="section-text">Unaccompanied minors.</li>
                            <li class="section-text">Passengers with medical clearance requirements.</li>
                            <li class="section-text">Passengers needing special assistance or extra baggage services.</li>
                            <li class="section-text">Group bookings (20 passengers or more).</li>
                            <li class="section-text">Passengers with outstanding balances.</li>
                            <li class="section-text">Tax-exempt passengers (e.g., OFWs).</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-10 col-sm-10 mx-auto">
                    <img src="assets/images/PhilAir_Travel1.jpg" class="img-fluid w-60 rounded mb-3" alt="Philippine Airlines Travel">
                    <img src="assets/images/PhilAir_Travel2.jpg" class="img-fluid w-70 rounded" alt="Philippine Airlines Boarding">
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection('content') ?>