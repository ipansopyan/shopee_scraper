@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                         </a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                    </form>
                    </li>
                @endguest
                </ul>
            </div>
        </div>
</nav>
<div class="container mt-5 checkout">
    <div class="row">
        <h4>Pendaftaran Berhasil</h4>
    <p>Terima kasih sudah bergabung bersama kami. Anda telah membeli paket membership Paket <strong>4Scraper</strong> untuk user <strong>{{Auth::user()->name}}</strong></p>
        <p> Detail pembayaran: Silahkan melakukan pembayaran senilai: <strong> Rp {{number_format(Auth::user()->pay,2,',','.')}}</strong> ke salah satu bank dibawah ini.</p> 
    </div>
    <div class="row mt-5">
        <div class="col-6">
            <p>Bank Details: <br>
            Rekening Mandiri: 1310004695286<br>
            A/N : Achmad Firmansyah</p>
            <div class="w-100">
                <img src="{{asset('assets/images/logo-bank-mandiri-763076-300x141.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="col-6">
            <p>Konfirmasi: <br>
            Segera konfirmasi setelah menyelesaikan proses pembayaran:</p>
            <a class="btn btn-primary" href="https://web.whatsapp.com/send?phone=6285717636868&amp;text=*Konfirmasi%20Pembayaran%204Scraper*%0a%0asilahkan%20lengkapi%20data%20dibawah%20ini:%0a%0aUsername : .{{Auth::user()->name}}%0apaket%20yang%20dibeli : Paket 4Scraper %0a%0a*NOTE:%20Lampirkan%20Bukti%20Transfer*">
            Klik untuk konfirmasi pembayaran</a>
        </div>
    </div>
        <div class="row">
        <p>Bank Details: <br>
        Rekening Mandiri: 1310004695286<br>
        A/N : Achmad Firmansyah</p>
        <div class="w-100">
            <img src="{{asset('assets/images/logo-bank-mandiri-763076-300x141.jpg')}}" class="img-fluid" alt="">
        </div>
    </div>
</div>
@endsection
