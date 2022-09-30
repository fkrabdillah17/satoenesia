@extends('layouts.main')

@section('content')
    {{-- Start Detail Product --}}
    <div class="rounded-3 pt-5">
        <div class="container pt-5">
            <h2 class="text-center" style="font-weight: bold">Detail Produk Bandung</h2>
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/files/pictures/Bandung.png') }}" class="img-fluid h-75" alt="...">
                </div>
                <div class="col-lg-6 align-self-center">
                    <h5 class="text-center" style="font-weight: bold">The Story that We Choose</h5>
                    <h6 class="text-center caption">Bumi Pasundan Lahir Ketika Tuhan Sedang Tersenyum</h6>
                    <p class="text-justify">Story tersebut memiliki makna bahwa bandung memiliki banyak keindahan
                        yang dapat membuat orang-orang tersenyum dan nyaman berada
                        didalamnya. Seperti banyaknya objek wisata alami di bandung, cuaca dan
                        suasana yang adem, masyarakat pribuminya yang someah : sopan,
                        santun, dan ramah, serta gadis priangan/mojang Bandung yang
                        cantik-cantik.</p>
                    <h5 class="text-center" style="font-weight: bold">Local Perspective that We Love</h5>
                    <p class="text-justify">Perspektif lokal yang kami suka yaitu Kota Bandung merupakan kota yang
                        sejuk, kulinernya bervariatif , banyak coffee shop, banyak tempat wisata,
                        orang-orangnya someah, terkenal kreatif</p>
                </div>
            </div>
        </div>
    </div>
    {{-- End Detail Product --}}

    {{-- Trivia Fact --}}
    <div class="rounded-3">
        <div class="container-sm pb-5">
            <div class="row">
                <div class="col align-self-center text-center">
                    <h2 class="fw-bold">Trivia Fact</h2>
                    <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus deleniti nisi praesentium ad aliquam molestias placeat possimus
                        inventore? Eum, vitae! Eaque, similique perspiciatis id atque dolor non, veniam laborum fuga autem a nobis tempora quam assumenda mollitia
                        ea hic recusandae pariatur? Incidunt, sequi at nam inventore provident dolore officiis tempora?</p>
                </div>
            </div>
        </div>
    </div>
    {{-- End Trivia Fact --}}

    {{-- Start Aspiration --}}
    <div class="rounded-3">
        <div class="container">
            <h2 class="text-center pb-1 fw-bold">Berikan Pendapat Anda</h2>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            {{-- Form Aspirasi --}}
            <div class="card mb-4">
                <div class="card-header text-center">
                    <i class="bi bi-clipboard-fill"></i>
                    Form Aspirasi
                </div>
                <div class="card-body">
                    <form method="post" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" placeholder="Nama Lengkap" id="name" name="name"
                                value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email@email.com" id="email"
                                name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nomor" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control @error('nomor') is-invalid @enderror" placeholder="+62 123 123" id="nomor" name="nomor"
                                value="{{ old('nomor') }}">
                            @error('nomor')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control @error('aspirasi') is-invalid @enderror" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"
                                id="aspirasi" name="aspirasi">{{ old('aspirasi') }}</textarea>
                            <label for="floatingTextarea2">Sampaikan Isu atau Keluhan Anda</label>
                            @error('aspirasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success my-2">Kirim Aspirasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End Aspiration --}}
@endsection
