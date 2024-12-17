<footer class="rounded-lg shadow m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="/images/logo.svg" class="h-8" alt="PageSnap Logo" />
                <span class="self-center text-2xl font-bold whitespace-nowrap text-white">PageSnap</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-300 sm:mb-0">
                <li>
                    <a href="#section-features" class="hover:underline me-4 md:me-6">Features</a>
                </li>
                <li>
                    <a href="#section-pricing" class="hover:underline me-4 md:me-6">Pricing</a>
                </li>
                <li>
                    <a href="#section-faq" class="hover:underline me-4 md:me-6">FAQ</a>
                </li>
                <li>
                    <a href="{{route('contact')}}" class="hover:underline me-4 md:me-6">Contact Us</a>
                </li>
            </ul>
        </div>
        <span class="block mt-4 md:mt-8 text-sm text-gray-300 sm:text-center">© {{\Carbon\Carbon::now()->year}} <a href="/" class="hover:underline">PageSnap™</a>. All Rights Reserved.</span>
    </div>
</footer>