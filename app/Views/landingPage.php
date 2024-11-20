<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<?= $this->include('landing/hero_Section') ?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="public/img/book.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="public/img/lounge.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="public/img/planes.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="d-flex justify-content-center mt-4">
    <a href=<?= base_url() . "about" ?>class="btn btn-primary me-2">About Us</a>
    <a href=<?= base_url() . "travelInfo" ?>class="btn btn-primary me-2">Travel Info</a>
</div>

<?= $this->endsection('contents') ?>