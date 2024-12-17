<section class="text-white py-4 md:py-16">
    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8">
        <!-- First row with two columns -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="text-center md:text-left">
                <h2 class="text-4xl font-bold mb-4">API for Instant Website-to-PDF Transformation</h2>
                <p class="text-2xl mb-8">From HTML to PDF, our API ensures precise and accurate conversions.</p>
                <a href="/register" class="bg-purple-500 hover:bg-purple-400 rounded-md text-white font-bold py-4 px-8 inline-block">Register for free →</a>
                <img id="hero-peguin" class="mt-4 md:mt-0 mx-auto md:m-0 float-none md:float-right w-1/2" src="{{ asset('images/peguin-01.svg') }}">
            </div>
            <div>
                @include('homes.hero-codes')
            </div>
        </div>
    </div>

    <script>
        const imageSources = [
            "{{ asset('images/peguin-01.svg') }}",
            "{{ asset('images/peguin-02.svg') }}",
        ];

        let heroPeguinCurrentIndex = 0;
        const imageContainer = document.getElementById("hero-peguin");

        function switchImage() {
            heroPeguinCurrentIndex = (heroPeguinCurrentIndex + 1) % imageSources.length;
            imageContainer.src = imageSources[heroPeguinCurrentIndex];
        }

        setInterval(switchImage, 1000);
    </script>
</section>