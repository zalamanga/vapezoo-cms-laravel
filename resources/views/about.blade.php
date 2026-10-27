<x-user-layout>
    <main>
        <!-- title -->
        <section class="container-title" style="background-image:  url('{{ asset('assets/images/bg-01.jpg') }}');">
            <h2 class="section-title">
                About Us
            </h2>
        </section>

        @foreach ($abouts as $index => $about)
            <div class="news-container">
                @if ($index % 2 == 0)
                    <!-- Gambar di kiri, deskripsi di kanan -->
                    <aside class="news-image">
                        <img src="{{ asset($about->gambar) }}" alt="{{ $about->judul }}">
                    </aside>
                    <article class="news-description">
                        <h2>{{ $about->judul }}</h2>

                        <p>{{ $about->deskripsi }}</p> <!-- Deskripsi lengkap -->
                    </article>
                @else
                    <!-- Deskripsi di kiri, gambar di kanan -->
                    <article class="news-description">
                        <h2>{{ $about->judul }}</h2>

                        <p>{{ $about->deskripsi }}</p> <!-- Deskripsi lengkap -->
                    </article>
                    <aside class="news-image">
                        <img src="{{ asset($about->gambar) }}" alt="{{ $about->judul }}">
                    </aside>
                @endif
            </div>
        @endforeach

        <!-- banner ads -->
        <section class="banner-ads">
            <h1>Our Program</h1>
            <div class="banner-ads-container">
                @foreach ($banneradsabout as $banneradsabout)
                    <a href="{{ $banneradsabout->link }}">
                        <img src="{{ asset($banneradsabout->gambar) }}" alt="Banner Image">
                    </a>
                @endforeach
            </div>
        </section>


<!-- new products release -->
<section class="products" id="products">
    <h1>New Products Release</h1>
    <div class="product-container">
        @foreach ($newproabout as $item)
            <div class="produk">
                <img src="{{ asset($item->image) }}" alt="{{ $item->nama }}">
                <p>{{ $item->nama }}</p>
            </div>
        @endforeach
    </div>
</section>

    </main>
</x-user-layout>
