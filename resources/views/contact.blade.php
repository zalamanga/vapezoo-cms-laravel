<x-user-layout>
    <main>
        <!-- title -->
        <section class="container-title" style="background-image: url('{{ asset('assets/images/bg-01.jpg') }}');">
            <h2 class="section-title">
                Contact Us
            </h2>
        </section>

<section class="contact-us">
            <div class="contact-container">
                <div class="map-location">
                    <!-- Google Maps location embed code -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3418352792855!2d106.8232664147691!3d-6.2149071954988285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1bd98c8a5e7%3A0x4a13549af6fa6d84!2sMonas!5e0!3m2!1sen!2sid!4v1620298882140!5m2!1sen!2sid" width="900" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="form-container">
                    <h1>News Letter and Promo</h1>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('admin.contact_messages.store') }}" method="post">
                        @csrf
                        <div class="input-group">
                            <label for="name" style="color: aliceblue;">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="input-group">
                            <label for="email" style="color: aliceblue;">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label for="phone" style="color: aliceblue;">Phone:</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="input-group">
                            <label for="message" style="color: aliceblue;">Message:</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</x-user-layout>
