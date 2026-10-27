<x-user-layout>
    <main>
<!-- slider -->
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($bannerpro as $key => $banner)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($bannerpro as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <a href="#"><img class="d-block w-100" src="{{ asset($banner->gambar) }}" alt="{{ $banner->alt }}" /></a>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>


        <!-- hexohm -->
        <section class="hexohm">
            <div class="heading-wrapper">
                <h2>Hexohm</h2>
            </div>
            <article>
                <div class="large-photo">
                    <img class="large-img" src="images/products/hexohm.webp" alt="Large Photo">
                </div>
                <h3>Products hexohm</h3>
                <div class="image-gallery">
                    <img class="gallery-img" src="images/products/hexohm.webp" alt="Product 1">
                    <img class="gallery-img" src="images/products/qt=q_85.webp" alt="Product 2">
                    <img class="gallery-img" src="images/products/qt=q_85.webp" alt="Product 3">
                    <img class="gallery-img" src="images/products/qt=q_85.webp" alt="Product 4">
                </div>
            </article>
            <aside>
                <div class="product-description">
                    <p>Hexohm adalah merek terkemuka dalam industri vaping, menawarkan kehandalan dan kualitas tanpa
                        kompromi. Dapatkan produk terbaik kami hari ini!</p>
                    <p>Hexohm adalah merek terkemuka dalam industri vaping, menawarkan kehandalan dan kualitas tanpa
                        kompromi. Dapatkan produk terbaik kami hari ini!</p>
                    <p>Hexohm adalah merek terkemuka dalam industri vaping, menawarkan kehandalan dan kualitas tanpa
                        kompromi. Dapatkan produk terbaik kami hari ini!</p>
                    <button>Shop Now</button>
                </div>
            </aside>
        </section>

        <!-- hexohm -->
        <section class="hexohm" style="padding-left: 70px;">
            <div class="heading-wrapper">
                <h2>e-liquid</h2>
            </div>
            <aside>
                <div class="product-description">
                    <p>Hexohm adalah merek terkemuka dalam industri vaping, menawarkan kehandalan dan kualitas tanpa
                        kompromi. Dapatkan produk terbaik kami hari ini!</p>
                    <p>Hexohm adalah merek terkemuka dalam industri vaping, menawarkan kehandalan dan kualitas tanpa
                        kompromi. Dapatkan produk terbaik kami hari ini!</p>
                    <p>Hexohm adalah merek terkemuka dalam industri vaping, menawarkan kehandalan dan kualitas tanpa
                        kompromi. Dapatkan produk terbaik kami hari ini!</p>
                    <button>Shop Now</button>
                </div>
            </aside>
            <article>
                <div class="large-photo">
                    <img class="large-img" src="images/products/hexohm.webp" alt="Large Photo">
                </div>
                <h3>Products e-liquid</h3>
                <div class="image-gallery">
                    <img class="gallery-img" src="images/products/hexohm.webp" alt="Product 1">
                    <img class="gallery-img" src="images/products/qt=q_85.webp" alt="Product 2">
                    <img class="gallery-img" src="images/products/qt=q_85.webp" alt="Product 3">
                    <img class="gallery-img" src="images/products/qt=q_85.webp" alt="Product 4">
                </div>
            </article>
        </section>

        <!-- Accessoris section -->
        <section class="accessoris">
            <div class="heading-wrapper">
                <h2>Accessories</h2>
            </div>
            <div class="container-accessoris">
                <div class="row">
                    <div class="col-md-12">
                        <div class="accessory-item">
                            <img src="images/bg-01.jpg" alt="Accessory">
                            <div class="floating-button">
                                <a href="#" class="shop-now-btn"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Merchandise section -->
        <section class="merchandise">
            <div class="container">
                <div class="row">
                    <div class="heading-wrapper">
                        <h2>Merchandise</h2>
                    </div>
                </div>
                <div class="row merchandise-items">
                    <div class="col-md-3">
                        <img src="images/products/DSC03530.jpg" alt="Merchandise 1">
                    </div>
                    <div class="col-md-3">
                        <img src="images/products/DSC03530.jpg" alt="Merchandise 2">
                    </div>
                    <div class="col-md-3">
                        <img src="images/products/DSC03530.jpg" alt="Merchandise 3">
                    </div>
                    <div class="col-md-3">
                        <img src="images/products/DSC03530.jpg" alt="Merchandise 4">
                    </div>
                </div>
                <div class="button-shop-merch">
                    <a href="#" class="shop-now-btn"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                </div>
            </div>
        </section>

    </main>
</x-user-layout>
