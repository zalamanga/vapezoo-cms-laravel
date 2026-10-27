<x-user-layout>
<main>
    <!-- title -->
    <section class="container-title" style="background-image: url('{{ asset('assets/images/bg-01.jpg') }}');">
        <h2 class="section-title">
            FAQ / PERTANYAAN YANG SERING DIAJUKAN
        </h2>
    </section>

    <section class="section-faq">
        <div class="wrapper">
            @foreach ($faqs as $faq)
                <div class="faq">
                    <button class="accordion">
                        {{ $faq->pertanyaan }}
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>
                    <div class="pannel">
                        <p>
                            {{ $faq->jawaban }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                this.parentElement.classList.toggle("active");

                var pannel = this.nextElementSibling;

                if (pannel.style.display === "block") {
                    pannel.style.display = "none";
                } else {
                    pannel.style.display = "block";
                }
            });
        }
    </script>
</main>
</x-user-layout>
