<x-user-layout>
    <main>

        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="#"><img class="d-block w-100" src="images/banner-slider/banner-slider1.webp"
                                alt="First slide" /></a>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/banner-slider/banner-slider2.webp" alt="Second slide" />
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/banner-slider/banner-slider3.webp" alt="Third slide" />
                    </div>
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

        @foreach ($news as $item)
            <!-- news -->
            <div class="news-container">
                <aside class="news-image">
                    <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}">
                </aside>
                <article class="news-description">
                    <h2>{{ $item->judul }}</h2>
                    <p>{{ $item->deskripsi }}</p>
                </article>
            </div>
        @endforeach


        <!-- banner ads -->
        <section class="banner-ads">
            <h1>our program</h1>
            <div class="grid-banner-ads banner-ads-container">
                <a href="link_ke_halaman_iklan1">
                    <img src="images/banner-iklan/banneriklan1.png" alt="">
                </a>
                <a href="link_ke_halaman_iklan2">
                    <img src="images/banner-iklan/bannerads2.png" alt="">
                </a>
            </div>
        </section>
    </main>
</x-user-layout>
