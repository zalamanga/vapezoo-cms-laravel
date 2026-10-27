<x-user-layout>
    <main>
        <!-- slider -->
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($banners as $key => $banner)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                            class="{{ $key == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($banners as $key => $banner)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <a href="#"><img class="d-block w-100" src="{{ asset($banner['gambar']) }}"
                                    alt="{{ $banner['alt'] }}" /></a>
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

        <!-- products -->
        <section class="products" id="products">
            <h1>Products</h1>
            <div class="product-container">
                @foreach ($products as $product)
                    <div class="produk">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->nama }}">
                        <p>{{ $product->nama }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- banner ads -->
        <section class="banner-ads">
            <h1>Our Program</h1>
            <div class="banner-ads-container">
                @foreach ($bannerads as $bannerad)
                    <a href="{{ $bannerad->link }}">
                        <img src="{{ asset($bannerad->gambar) }}" alt="Banner Image">
                    </a>
                @endforeach
            </div>
        </section>
        <!-- new products release -->
        <section class="products" id="products">
            <h1>New Products Release</h1>
            <div class="product-container">
                @foreach ($newproducts as $newproduct)
                    <div class="produk">
                        <img src="{{ asset($newproduct->image) }}" alt="{{ $newproduct->nama }}">
                        <p>{{ $newproduct->nama }}</p>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
</x-user-layout>
