<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<?= $this->include('landing/hero_Section') ?>

<section id="about">
    <div class="container">
        <h2>About Us</h2>
        <p>Welcome to TamaFlights! We offer the best flight deals and travel packages to make your journey
            unforgettable. Our team is dedicated to providing you with the highest level of service and support.</p>
    </div>
</section>

<section id="services">
    <div class="container">
        <h2>Our Services</h2>
        <ul>
            <li>Flight Booking</li>
        </ul>
    </div>
</section>

<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, please feel free to reach out to us.</p>
        <p>Email: support@tamaflights.com</p>
        <p>Phone: +123-456-7890</p>
    </div>
</section>

<?= $this->endsection('contents') ?>