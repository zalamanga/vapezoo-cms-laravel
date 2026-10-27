<x-user-layout>
    <main>
        <!-- slider -->
        <section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($hexohm as $key => $banner)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($hexohm as $key => $banner)
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

        <!-- products -->
<section class="products" id="products">
    <h1>Limited Series</h1>
    <div class="product-container">
        @foreach ($products1 as $product)
            <div class="produk">
                <img src="{{ asset($product->image) }}" alt="{{ $product->nama }}">
                <p>{{ $product->nama }}</p>
            </div>
        @endforeach
    </div>
</section>
        <!-- news -->
        <div class="news-container">
            <aside class="news-image">
                <img src="images/banner-iklan/bannerads2.png" alt="Gambar 1">
            </aside>
            <article class="news-description">
                <h2>VapeZoo</h2>
                <p>Deskripsi singkat tentang berita ini. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut deleniti, itaque sunt id vitae
                    repudiandae obcaecati aperiam quidem ea laudantium voluptates, earum laboriosam natus et voluptatum
                    sit! Beatae, natus qui! Autem commodi eos eveniet itaque rem saepe, repellendus, quidem reiciendis
                    deleniti aperiam quia provident illo molestias corporis vel quod vero sapiente a modi unde tenetur
                    inventore? Esse voluptate neque eum dolores error modi nisi nostrum rem, aliquid, sit consequatur
                    maxime fugit quod! Vel architecto sequi laborum et voluptates harum eius tempora impedit quaerat
                    soluta eum tenetur aliquam molestias consequuntur, possimus suscipit, excepturi iste porro maiores
                    similique ullam! Repellat sint fugit asperiores laboriosam praesentium libero nostrum nemo dolor
                    blanditiis iste aspernatur, impedit sit quisquam modi consequuntur fuga reprehenderit vero maiores
                    voluptates. Ipsum libero provident cupiditate nihil eius. Non at inventore exercitationem blanditiis
                    et reiciendis suscipit aliquid quos eum fugiat minima asperiores atque temporibus vero facere
                    impedit sunt ab tempora, libero ipsam magni tempore! Quas, saepe maiores numquam libero voluptates
                    dolores? Repellat corrupti in, adipisci vero, cumque totam, officia quaerat esse labore suscipit
                    perferendis tenetur expedita enim commodi. Magnam ratione sint ad fuga doloremque debitis dolorem
                    enim praesentium, excepturi pariatur quam vel ipsum labore velit. Voluptatem id placeat ex fugiat
                    nisi perferendis.</p>
            </article>
        </div>
        <!-- news -->
        <div class="news-container">
            <article class="news-description">
                <h2>VapeZoo</h2>
                <p>Deskripsi singkat tentang berita ini. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut deleniti, itaque sunt id vitae
                    repudiandae obcaecati aperiam quidem ea laudantium voluptates, earum laboriosam natus et voluptatum
                    sit! Beatae, natus qui! Autem commodi eos eveniet itaque rem saepe, repellendus, quidem reiciendis
                    deleniti aperiam quia provident illo molestias corporis vel quod vero sapiente a modi unde tenetur
                    inventore? Esse voluptate neque eum dolores error modi nisi nostrum rem, aliquid, sit consequatur
                    maxime fugit quod! Vel architecto sequi laborum et voluptates harum eius tempora impedit quaerat
                    soluta eum tenetur aliquam molestias consequuntur, possimus suscipit, excepturi iste porro maiores
                    similique ullam! Repellat sint fugit asperiores laboriosam praesentium libero nostrum nemo dolor
                    blanditiis iste aspernatur, impedit sit quisquam modi consequuntur fuga reprehenderit vero maiores
                    voluptates. Ipsum libero provident cupiditate nihil eius. Non at inventore exercitationem blanditiis
                    et reiciendis suscipit aliquid quos eum fugiat minima asperiores atque temporibus vero facere
                    impedit sunt ab tempora, libero ipsam magni tempore! Quas, saepe maiores numquam libero voluptates
                    dolores? Repellat corrupti in, adipisci vero, cumque totam, officia quaerat esse labore suscipit
                    perferendis tenetur expedita enim commodi. Magnam ratione sint ad fuga doloremque debitis dolorem
                    enim praesentium, excepturi pariatur quam vel ipsum labore velit. Voluptatem id placeat ex fugiat
                    nisi perferendis.</p>
            </article>
            <aside class="news-image">
                <img src="images/banner-iklan/banneriklan1.png" alt="Gambar 1">
            </aside>

        </div>


    </main>
</x-user-layout>
