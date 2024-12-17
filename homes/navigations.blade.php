<nav>
    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="{{route('home')}}">
                    <div class="flex flex-row">
                        <img src="/images/logo.svg" alt="Pagesnap Logo" class="w-8 h-8 flex-none mr-3">
                        <span class="text-white text-2xl font-semibold">PageSnap</span>
                    </div>
                </a>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#section-features" class="text-white hover:bg-purple-500 px-6 py-2 rounded-md text-base font-medium">Features</a>
                        <a href="#section-pricing" class="text-white hover:bg-purple-500 px-6 py-2 rounded-md text-base font-medium">Pricing</a>
                        <a href="#section-faq" class="text-white hover:bg-purple-500 px-6 py-2 rounded-md text-base font-medium">FAQ</a>
                        <a href="/document" class="text-white hover:bg-purple-500 px-6 py-2 rounded-md text-base font-medium flex flex-row items-center">
                            <span>Docs</span>
                            <img src="/images/arrow-top-right-on-square.svg" alt="Link" class="w-4 h-4 flex-none ml-2">
                        </a>
                        <a href="https://blog.pagesnap.co" class="text-white hover:bg-purple-500 px-6 py-2 rounded-md text-base font-medium flex flex-row items-center">
                            <span>Blog</span>
                            <img src="/images/arrow-top-right-on-square.svg" alt="Link" class="w-4 h-4 flex-none ml-2">
                        </a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <a href="/login" class="text-white hover:bg-purple-500 px-6 py-2 rounded-md text-base font-medium">Login</a>
                    <a href="/register" class="ml-4 text-white bg-purple-500 hover:bg-purple-400 px-6 py-2 rounded-md text-base font-medium">Register</a>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button type="button" class="menu-button bg-purple-600 inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-purple-500 focus:outline-none" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="mobile-menu hidden md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#section-features" class="text-white hover:bg-purple-500 block px-6 py-2 rounded-md text-base font-medium">Features</a>
            <a href="#section-pricing" class="text-white hover:bg-purple-500 block px-6 py-2 rounded-md text-base font-medium">Pricing</a>
            <a href="#section-faq" class="text-white hover:bg-purple-500 block px-6 py-2 rounded-md text-base font-medium">FAQ</a>
            <a href="/document" class="text-white hover:bg-purple-500 block px-6 py-2 rounded-md text-base font-medium">Docs</a>
            <a href="https://blog.pagesnap.co" class="text-white hover:bg-purple-500 block px-6 py-2 rounded-md text-base font-medium">Blog</a>
            <a href="/login" class="text-white hover:bg-purple-500 block px-6 py-2 rounded-md text-base font-medium">Login</a>
            <a href="/register" class="text-white bg-purple-500 hover:bg-purple-400 block px-6 py-2 rounded-md text-base font-medium">Register</a>
        </div>
    </div>
</nav>

<script>
    const menuButton = document.querySelector('.menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>