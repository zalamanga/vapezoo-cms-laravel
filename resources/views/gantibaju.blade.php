<x-user-layout>
<main>
       <div class="hero-image">
        <img src="{{ asset('assets/images/hexgantibaju.webp') }}" alt="Hex Ganti Baju" style="width:100%;">
    </div>

        <section class="section-faq">
            <div class="wrapper">
                <div class="faq">
                    <button class="accordion">
                        Bagaimana cara Claim Warranty?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            Pastikan Hexohm anda adalah vapezoo Warranty.
                            Silahkan ke halaman <a href="">Support</a>, baca baik2 semua informasi dan ketentuan nya,
                            Isilah FORM dengan lengkap dan benar, pastikan informasi Nama dan Nomor anda bisa dihubungi.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <button class="accordion">
                        Lifetime Warranty boleh Claim 1x saja atau lebih?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            Lifetime Warranty CV dan VZ boleh claim berkali kali. Setiap kali claim harus isi form per
                            hexohm yang di claim. Misal
                            mau claim 3 hexohm sekaligus, masing2 hexohm harus isi 1 form tersendiri (Kirim boleh jadi
                            satu). Syarat dan ketentuan
                            bisa di baca halaman <a href="">Support</a>.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <button class="accordion">
                        Apakah Claim Warranty di pungut biaya?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            Kerusakan manufacturer's defect / Cacat Pabrik selalu di cover gratis!
                            Silahkan ke halaman support untuk melihat syarat dan ketentuan nya
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <button class="accordion">
                        Apakah boleh datang langsung ke VapeZOO untuk Claim?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            Boleh selama Jam buka, tetap harus isi Form yang ada di halaman Support
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <button class="accordion">
                        Pemutihan VapeZOO
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            Apa itu "Pemutihan"? Pemutihan adalah proses berbayar dimana hexohm yang bukan vz warranty,
                            dijadikan vz warranty
                            (diberikan sticker hologram)
                            VapeZOO sejak Feb 2019 sudah tidak menerima pemutihan, karena spare parts yang kami dapat
                            jumlah terbatas, kami ingin
                            memprioritaskan service yang terbaik untuk pelanggan kami.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <button class="accordion">
                        Sticker Rusak/Copot? Box / Kartu Garansi Hilang?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            Jika sticker Hologram anda rusak / hilang tanpa di sengaja, selama belum pernah di bongkar
                            boleh di kirimkan ke VZ untuk
                            di ganti sticker hologram baru - free of charge. Silahkan ke halaman support isi form nya
                            dan kirimkan hexohm anda ke
                            vapezoo.
                        </p>
                        <p>
                            Box HexOhm Hilang? Box tidak pengaruh ke warranty. Tapi VZ tidak menjual / mengganti nya.
                        </p>
                        <p>
                            Kartu Garansi Hilang? - Sebener itu adalah Warranty Info Card - tujuannya untuk memberi info
                            ke user untuk informasi
                            mengenai warranty, bisa ke url https://vapezoo.com/support disitu juga ada QRCode yang jika
                            di scan akan membawa ke URL
                            yang sama
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <button class="accordion">
                        Firing "terasa lemah"
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            Sebelum bilang "chip nya rusak" sebaik nya di check dulu apakah connector kotor. Yg umum
                            ditemukan adalah kita sering
                            "over-drip" dan liquid kering lama2 numpuk membuat lapisan yang mengganggu aliran daya dari
                            mod ke Atomiser. Kami ada
                            buat sebuah youtube video yang mungkin bisa membantu, silahkan di coba, jika masih lemah
                            silahkan lanjut untuk claim
                            warranty.
                        </p>
                        <p>
                            Satu lagi penyebab firing "terasa lemah" adalah batre yg sudah tidak optimal. Banyak batre
                            yang jika di test voltase di
                            voltmeter/tab521 terlihat masih penuh... tapi test ini tanpa beban (misal di charger tertera
                            masih 80% atau 3.9V) tapi
                            jika di firing akan drop di 3V kurang... (hanya bisa di ukur dengan tertentu) dibawah 3V
                            hexohm V3.0 akan tidak mau
                            firing constant. Coba gunakan batre yang baik, kalau masih "lemah" silahkan ke halaman
                            support kami, isi form dan kirim
                            ke vapezoo.
                        </p>
                    </div>
                </div>
            </div>
            <section class="section-gallery">
                <div class="container">
                    <h1>BEFORE AFTER</h1>
                    <div class="main-image">
                        <img src="images/products/gnti.jpg" alt="Large Image" id="largeImage">
                    </div>
                    <div class="thumbnail-images">
                        <img class="thumb-img" src="images/products/gnti.jpg" alt="Thumb 1">
                        <img class="thumb-img" src="images/products/ganti1.webp" alt="Thumb 2">
                        <img class="thumb-img" src="images/products/DSC03530.jpg" alt="Thumb 3">
                        <img class="thumb-img" src="images/products/DSC03530.jpg" alt="Thumb 4">
                    </div>
                </div>
            </section>
</main>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const largeImage = document.getElementById('largeImage');
            const thumbnailImages = document.querySelectorAll('.thumb-img');

            thumbnailImages.forEach((img) => {
                img.addEventListener('click', () => {
                    const src = img.getAttribute('src');
                    largeImage.setAttribute('src', src);
                });
            });
        });
    </script>
</x-user-layout>
