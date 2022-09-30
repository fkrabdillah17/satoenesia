@extends('layouts.main')

@section('content')
    {{-- Produk --}}
    <!-- Slider main container -->
    <div class="rounded-3 mt-5">
        <div class="container py-5">
            <div class="row">
                <h2 class="pb-1" style="font-weight: bold">
                    Produk
                    <!-- If we need navigation buttons -->
                    <span class="float-end">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary swiper-btn-prev"><i class="bi bi-caret-left-fill"></i></button>
                            <button type="button" class="btn btn-primary swiper-btn-next"><i class="bi bi-caret-right-fill"></i></button>
                        </div>
                    </span>
                </h2>

            </div>
            <div class="swiper-product">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card border-0 mb-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/files/pictures/Bandung.png') }}" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Bandung</h5>
                                        <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ratione optio
                                            suscipit corrupti
                                            dicta et
                                            illum aliquid. Quibusdam, sapiente exercitationem molestiae maxime totam fugiat? Provident praesentium a vitae quasi
                                            cumque excepturi adipisci mollitia neque tempora molestiae suscipit quidem tenetur, sit iure ut officia eos assumenda
                                            quis reiciendis similique repudiandae in?</p>
                                        <a href="{{ route('user.product.detail') }}" class="btn btn-primary">Lihat Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 mb-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/files/pictures/Semarang.png') }}" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Semarang</h5>
                                        <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ratione optio
                                            suscipit corrupti
                                            dicta et
                                            illum aliquid. Quibusdam, sapiente exercitationem molestiae maxime totam fugiat? Provident praesentium a vitae quasi
                                            cumque excepturi adipisci mollitia neque tempora molestiae suscipit quidem tenetur, sit iure ut officia eos assumenda
                                            quis reiciendis similique repudiandae in?</p>
                                        <a href="{{ route('user.product.detail') }}" class="btn btn-primary">Lihat Produk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card border-0 mb-3">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="{{ asset('assets/files/pictures/Padang.png') }}" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">Padang</h5>
                                        <p class="card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ratione optio
                                            suscipit corrupti
                                            dicta et
                                            illum aliquid. Quibusdam, sapiente exercitationem molestiae maxime totam fugiat? Provident praesentium a vitae quasi
                                            cumque excepturi adipisci mollitia neque tempora molestiae suscipit quidem tenetur, sit iure ut officia eos assumenda
                                            quis reiciendis similique repudiandae in?</p>
                                        <a href="{{ route('user.product.detail') }}" class="btn btn-primary">Lihat Produk</a>
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
    {{-- End Produk --}}
@endsection
