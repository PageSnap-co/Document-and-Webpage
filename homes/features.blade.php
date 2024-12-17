<section id="section-features" class="bg-gray-800 py-4 md:py-16 border-y-2 border-gray-600 border-dashed">
    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8 pb-8 md:pb-16">
        <div class="md:flex md:items-center">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl font-bold mb-4"><span class="text-violet-500">Chrome-Precision</span> Website to PDF Conversion</h2>
                <p class="text-xl mb-8 text-gray-300">Convert web pages to PDFs with Chrome's precision, guaranteeing outputs that mirror Chrome print results. Our API ensures pixel-perfect accuracy in every conversion. Achieve impeccable PDF quality with minimal effort.</p>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img class="w-full md:w-auto" src="{{ asset('images/feature-chrome.svg') }}">
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8 pb-8 md:pb-16">
        <div class="md:flex md:items-center">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl font-bold mb-4">Offering <span class="text-violet-500">30+</span> Customizable PDF Options</h2>
                <p class="text-xl mb-8 text-gray-300">With over 30 customizable options, our API empowers developers to create tailored PDFs. Easily modify footers, CSS styling, and more for perfect results.</p>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img class="w-full md:w-auto" src="{{ asset('images/feature-options.svg') }}">
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8 pb-8 md:pb-16">
        <div class="md:flex md:items-center">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl font-bold mb-4"><span class="text-violet-500">Batch PDF Conversion</span> with Webhook Notifications</h2>
                <p class="text-xl mb-8 text-gray-300">Effortlessly batch submit large-scale PDF conversion requests and receive real-time notifications via webhook upon completion. Conveniently retrieve your converted PDFs within your user dashboard, ensuring a seamless and efficient workflow throughout the process.</p>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img class="w-full md:w-auto" src="{{ asset('images/feature-batch.svg') }}">
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8 pb-8 md:pb-16">
        <div class="md:flex md:items-center">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl font-bold mb-4">Store PDFs Safely in Your Chosen <span class="text-violet-500">S3 Bucket</span></h2>
                <p class="text-xl mb-8 text-gray-300">Users can securely store their generated PDFs in either our AWS S3 bucket or their own. If opting for our S3 storage, PDFs will be retained for {{config('pagesnap.bucket_redact_resource_day_count', 2)}} days before being permanently deleted. This ensures both flexibility and data security, catering to your specific storage preferences.</p>
            </div>
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img class="w-full md:w-auto" src="{{ asset('images/feature-bucket.svg') }}">
            </div>
        </div>
    </div>
</section>