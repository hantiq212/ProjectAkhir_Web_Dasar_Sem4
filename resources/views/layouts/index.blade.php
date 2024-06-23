<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preload" href="{{ asset('img/logo/logo.png') }}" as="image">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <title>Bytes Coffee</title>
</head>
<body>
    
    @include('layouts.navbar')
    
    {{-- Beranda --}}
    <section class="home" id="home">
        <div class="home-text">
            <h1 data-aos="zoom-in-left" data-aos-duration="1400" data-aos-delay="200">Mulai harimu <br> dengan Kopi sambil Ngoding</h1>
            <p data-aos="fade-right" data-aos-duration="1400" data-aos-delay="300">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde dignissimos veritatis libero maxime soluta sapiente aliquam, mollitia nulla odit temporibus laborum sunt, fugit molestiae cupiditate reiciendis cumque officia veniam consequuntur.</p>
            <a href="#" class="tombol" data-aos="fade" data-aos-duration="1400" data-aos-delay="400">Order Sekarang!!!</a>
        </div>
        <div class="home-image" data-aos="zoom-in" data-aos-duration="1400">
            <img src="{{ asset('img/COFFEE CUP.png') }}" alt="">
        </div>
    </section>
    {{-- about --}}
    @include('layouts.about')
    {{-- customer --}}
    @include('layouts.customer')
    {{-- footer --}}
    @include('layouts.footer')
</body>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 1,
    });
    </script>
</html>