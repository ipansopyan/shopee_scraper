@extends('layouts.app')
@section('content')
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">4Scraper</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#video">Tutorial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#more">More</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#support">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#order">Order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
              </ul>
            </div>
        </div>
        </nav>
    <div class="row hero-image text-white" id="hero">
      <div class="col-12 col-md-6">
        <img src="{{asset('assets/images/Cover-DSP-mini.png')}}" class="img-fluid" alt="">
      </div>
      <div class="col-12 col-md-6 align-self-center text-center p-3">
        <h1 class="mb-5">4Scraper</h1>
        <h3>Tool Untuk Ambil Data produk toko, penilaian toko, dan produk dari hasil serach keyword</h3>
        <p>
          <span>
            Bisa ambil data apa aja? <br>
            produk toko | pelanggan toko | produk by keyword | auto upload | dll
          </span>
        </p>
        <a href="{{route('register')}}" class="btn">Beli Sekarang !!</a>
      </div>
    </div>

    <div class="container mt-5 video" id="video">
      <div class="row">
        <div class="col-12 col-md-6 p-4">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Zbx6yRgJvjA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-12 col-md-6 align-self-center p-4">
          <h2>4Scraper</h2>
          <p class="lead">
            Tool yang simple, ringan dan cepat dalam melakukan scrape data
          </p>
          <p class="lead">
            Simak video disamping untuk mengetahui secara singkat apa itu 4Scraper
          </p>
        </div>
      </div>
    </div>

     <div class="row hero-image text-white mt-5 p-5" id="more">
      <div class="container text-center">
        <h2>Trus apalagi? <br>
          Bisa Manipulasi data supplier
        </h2>
        <p class="lead mt-5">
          Selain ambil data suplier, tools ini juga bisa ubah2 datanya sesuai kebutuhan kamu. gunanya apa? supaya data kamu tidak sama dengan suplier, hal ini penting agar terhindar dari pemblokiran toko kamu oleh marketplace
        </p>
      </div>
    </div>

    <div class="container mt-5 video" id="video2">
      <div class="row">
      <div class="col-12 col-md-6 p-4">
       <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Zbx6yRgJvjA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      </div>
      <div class="col-12 col-md-6 align-self-center p-4">
        <h2>4Scraper</h2>
        <p class="lead">
          Tool yang simple, ringan dan cepat dalam melakukan scrape data
        </p>
        <p class="lead">
          Simak video disamping untuk mengetahui secara singkat apa itu 4Scraper
        </p>
      </div>
      </div>
    </div>
    
    <div class="container mt-5">
      <section class="space--xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="feature feature-6"><i class="fas fa-random"></i>
                      <h4 class="text-color-dark pt-xs">Random Image</h4>
                      <p>Acak posisi foto suplier. Hasil scraping menjadi lebih unik dan berbeda dari suplier</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="feature feature-6"><i class="fas fa-paint-brush"></i>
                      <h4 class="text-color-dark pt-xs">Prefix &amp; Postfix</h4>
                      <p>Tambahkan kata di depan dan di belakang judul/deskripsi produk sesukamu.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="feature feature-6"><i class="fas fa-angle-double-up"></i>
                      <h4 class="text-color-dark pt-xs">Mark Up Price</h4>
                      <p>Markup Harga produk. Kamu bisa menentukan sendiri Margin keuntunganmu.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="feature feature-6"><i class="fas fa-bolt"></i>
                      <h4 class="text-color-dark pt-xs">Fast</h4>
                      <p>Process scraping yang cepat dan akurat. Kamu tidak perlu menunggu lama untuk bisa scrape banyak produk</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <div class="container mt-5 video" id="support">
      <div class="row">
      <div class="col-12 col-md-6 align-self-center p-4">
        <h2>Tutorial dan Support</h2>
        <p class="lead">
          Kami paham, utk bisa menggunakan tools perlu adanya tutorial dan bimbingan agar memudahkan para pengguna tools ini.
        </p>
        <p class="lead">
          Untuk itu kami sudah siapkan tutorial baik video atau pdf di <strong>Member Area </strong> dan juga ada <strong>Team Support</strong> yang siap membantu kamu, jika mengalami kesulitan
        </p>
      </div>
      <div class="col-12 col-md-6 p-4">
        <img src="{{asset('assets/images/conference-4087444_1280.jpg')}}" class="img-fluid" alt="">
      </div>
      </div>
    </div>

    <div class="container order mt-5 video" id="order">
      <div class="row">
      <div class="col-12 col-md-6 align-self-center p-4">
        <h2>Tunggu apalagi, bergabunglah bersama kami sekarang juga</h2>
        <p class="lead">
          Lebih dari 1000 orang sudah bergabung bersama Kami.
        </p>
        <p class="lead">
          Harga Mulai dari 75ribu Rupiah saja!!!
        </p>
          <a href="{{route('register')}}" class="btn">Beli Sekarang !!</a>
      </div>
      <div class="col-12 col-md-6 p-4">
        <img src="{{asset('assets/images/dutchscraper-mini2.png')}}" class="img-fluid" alt="">
      </div>
      </div>
    </div>

    <section class="switchable mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h2>4Scraper</h2>
                    <p class="lead">4Scraper hadir untuk memudahkan anda dalam menjalankan aktifitas bisnis. Kami menyediakan aplikasi yang terjangkau, kaya akan fitur dan mudah digunakan.<br><br>Semoga dengan kehadiran Dutchbot. Bisnis anda dapat semakin berkembang dan sukses</p>
                </div>
                <div class="col-12 col-md-3">
                    <div class="text-block">
                        <h5>Phone</h5>
                        <p><span class="phone">0812-1234-12345</span></p>
                    </div>
                    <div class="text-block">
                        <h5>Email</h5><a href="mailto:123@123.net">user@gmail.com</a></div>
                    <div class="text-block">
                        <h5>Jam Kerja</h5>
                        <p>Senin- Jumat: 9.00 - 17.00 WIB</p>
                        <p><strong>Harap Maklum jika diluar Jam kerja slow response</strong></p>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection
