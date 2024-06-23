<header data-aos="zoom-in-left" data-aos-duration="1400">
    <a href="#" class="logo">
        <img src="{{ asset('img/logo/logo.png') }}" alt="">
    </a>
    <i class="bx bx-menu" id="menu-icon"></i>

    <ul class="nvbr">
        <li><a href="#home">Beranda</a></li>
        <li><a href="{{ route('logged.products.produk') }}">Produk</a></li>
        <li><a href="#customer">Customer's</a></li>
        <li><a href="#about">Tentang</a></li>
    </ul>

    <div class="header-icon">
        <i class='bx bx-cart'></i>
        <i class='bx bx-log-out'></i>
        <i class='bx bx-search' id="search-icon"></i>
    </div>

    {{-- Search Box --}}
    <div class="search-box">
        <input type="search" name="" id="" placeholder="Cari">
    </div>
    
</header>
