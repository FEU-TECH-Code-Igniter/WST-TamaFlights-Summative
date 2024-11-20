<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<?= $this->include('landing/hero_Section') ?>

<section class="about"></section>
<div class="container">
    <h1>About Us</h1>
    <p>Welcome to TamaFlights, your trusted partner in air travel. We are dedicated to providing you with the best
        flight booking experience, offering a wide range of flights to destinations all over the world.</p>
    <h2>Our Mission</h2>
    <p>Our mission is to make air travel accessible and convenient for everyone. We strive to offer competitive prices,
        a user-friendly booking platform, and exceptional customer service.</p>
    <h2>Why Choose Us?</h2>
    <ul>
        <li>Wide selection of flights and destinations</li>
        <li>Competitive pricing</li>
        <li>Easy and secure booking process</li>
        <li>24/7 customer support</li>
    </ul>
    <h2>Contact Us</h2>
    <p>If you have any questions or need assistance, please don't hesitate to contact our customer support team. We are
        here to help you with all your travel needs.</p>
</div>
</section>

<?= $this->endsection('contents') ?>