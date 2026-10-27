<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="js/faq.js"></script>
<script src="js/script.js"></script>
<script>
    const largeImgs = document.querySelectorAll('.large-img');
    const galleryImgContainers = document.querySelectorAll('.image-gallery');

    galleryImgContainers.forEach((container, containerIndex) => {
        const galleryImgs = container.querySelectorAll('.gallery-img');
        let currentIndex = 0;

        // Function to show the next image
        function showNextImage() {
            currentIndex = (currentIndex + 1) % galleryImgs
            .length; // Loop back to the beginning if reached the end
            const src = galleryImgs[currentIndex].getAttribute('src');
            largeImgs[containerIndex].setAttribute('src', src);
        }

        // Add event listeners to gallery images
        galleryImgs.forEach((img, index) => {
            img.addEventListener('click', () => {
                currentIndex = index;
                const src = img.getAttribute('src');
                largeImgs[containerIndex].setAttribute('src', src);
            });
        });

        // Auto switch images every 1 second
        setInterval(showNextImage, 1000);
    });
</script>
