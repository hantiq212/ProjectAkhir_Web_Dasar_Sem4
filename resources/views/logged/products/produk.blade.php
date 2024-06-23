@include('logged.layouts.navbar')
<link rel="stylesheet" href="{{asset('css/produk.css')}}">
<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
{{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

{{-- Produk --}}
<section class="produk" id="produk">
    <div class="heading">
        <h2>Produk Terlaris</h2>
    </div>
    <div class="produk-container">
        <div class="box">
            <img src="" alt="">
            <h3>Amercano Pure</h3>
            <div class="content">
                <span>Rp. 25.000</span>
                <a href="#">Tambah Keranjang</a>
            </div>
        </div>
    </div>
</section>

@include('logged.layouts.footer')
<script src="{{ asset('js/main-product.js') }}"></script>