@extends('layouts.main')

@section('content')
    {{-- Carousel --}}
    <div id="homeCarousel" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item slide-home overlay active" style="background-image: url('{{ asset('assets/files/pictures/Bandung-land.png') }}')">
                <div class="carousel-caption">
                    <h1>Bumi Pasundan Lahir <br> Ketika Tuhan Sedang Tersenyum</h1>
                    <p>Kota Bandung merupakan kota yang sejuk, kulinernya bervariatif , banyak coffee shop, banyak wisata, orang-orangnya someah, terkenal kreatif
                    </p>
                </div>
            </div>
            <div class="carousel-item slide-home overlay" style="background-image: url('{{ asset('assets/files/pictures/Semarang.png') }}')"></div>
            <div class="carousel-item slide-home overlay" style="background-image: url('{{ asset('assets/files/pictures/Padang.png') }}')"></div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- End Carousel --}}

    {{-- Start About --}}
    <div class="rounded-3">
        <div class="container py-5">
            <h2 class="text-center pb-5" style="font-weight: bold">About Us</h2>
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <h1 class="text-center" style="font-weight: bold">Satoenesia</h1>
                    <p class="text-justify">Project ini bertujuan untuk mengaktifkan Pentahelix Network (Akademisi, Bisnis, Komunitas, Pemerintahan dan Teknologi
                        Provider) melalui pengembangan pada 5 daerah di Indonesia yaitu Jakarta, Bogor, Cirebon, Bandung dan Pontianak.</p>
                </div>
                <div class="col-lg-6 py-2">
                    <img src="{{ asset('assets/files/pictures/Bandung-land.png') }}" class="img-fluid mx-auto d-block" alt="...">
                </div>
            </div>
        </div>
    </div>
    {{-- End About --}}

    {{-- Testimonial --}}
    <!-- Slider main container -->
    <div class="rounded-3">
        <div class="container py-5">
            <div class="row">
                <h2 class="pb-1" style="font-weight: bold">
                    Testimonial
                    <!-- If we need navigation buttons -->
                    <span class="float-end">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary swiper-btn-prev"><i class="bi bi-caret-left-fill"></i></button>
                            <button type="button" class="btn btn-primary swiper-btn-next"><i class="bi bi-caret-right-fill"></i></button>
                        </div>
                    </span>
                </h2>

            </div>
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card border-0 mb-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/files/pictures/man.jpg') }}" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Man 1</h5>
                                        <p class="card-text caption text-justify">Amazing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 mb-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/files/pictures/man.jpg') }}" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Man 2</h5>
                                        <p class="card-text caption text-justify">Insightfull</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 mb-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/files/pictures/man.jpg') }}" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Man 3</h5>
                                        <p class="card-text caption text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ratione optio
                                            suscipit corrupti
                                            dicta et
                                            illum aliquid. Quibusdam, sapiente exercitationem molestiae maxime totam fugiat? Provident praesentium a vitae quasi
                                            cumque excepturi adipisci mollitia neque tempora molestiae suscipit quidem tenetur, sit iure ut officia eos assumenda
                                            quis reiciendis similique repudiandae in?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    {{-- End Testimonial --}}
    {{-- Start FAQ --}}
    <div class="rounded-3">
        <div class="container py-5 col-lg-6">
            <h2 class="text-center pb-5 under-line" style="font-weight: bold">FAQ</h2>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                            aria-expanded="false" aria-controls="flush-collapseOne">
                            Apa itu Satoenesia?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ratione optio
                            suscipit corrupti
                            dicta et
                            illum aliquid. Quibusdam, sapiente exercitationem molestiae maxime totam fugiat? Provident praesentium a vitae quasi
                            cumque excepturi adipisci mollitia neque tempora molestiae suscipit quidem tenetur, sit iure ut officia eos assumenda
                            quis reiciendis similique repudiandae in?
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                            aria-expanded="false" aria-controls="flush-collapseTwo">
                            Apa arti Satoenesia?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ratione optio
                            suscipit corrupti
                            dicta et
                            illum aliquid. Quibusdam, sapiente exercitationem molestiae maxime totam fugiat? Provident praesentium a vitae quasi
                            cumque excepturi adipisci mollitia neque tempora molestiae suscipit quidem tenetur, sit iure ut officia eos assumenda
                            quis reiciendis similique repudiandae in?
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                            aria-expanded="false" aria-controls="flush-collapseThree">
                            Apa Produk Satoenesia?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ratione optio
                            suscipit corrupti
                            dicta et
                            illum aliquid. Quibusdam, sapiente exercitationem molestiae maxime totam fugiat? Provident praesentium a vitae quasi
                            cumque excepturi adipisci mollitia neque tempora molestiae suscipit quidem tenetur, sit iure ut officia eos assumenda
                            quis reiciendis similique repudiandae in?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End FAQ --}}
@endsection
