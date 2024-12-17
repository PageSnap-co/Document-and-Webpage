<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
    <title>Pagesnap API Documentation</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.svg">

    <style>
        /* Customize the scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background-color: #374151;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #6b7280;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #9ca3af;
        }
    </style>

    @if(isset($gaId))
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-E326FPG2VD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-E326FPG2VD');
    </script>
    @endif
</head>

<body class="bg-gray-900 text-white">
    <div class="flex flex-col md:flex-row h-screen">
        @include('documents.navigations')

        <div class="flex flex-col md:flex-row w-full md:w-5/6">
            <div class="main-content w-full overflow-y-scroll divide-y divide-y-1 divide-gray-600 divide-solid">
                <div class="md:hidden p-4 bg-indigo-700">
                    <button id="toggle-nav" class="bg-gray-800 text-white p-2 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>

                <!-- Header Section -->
                <div id="section-head" class="flex flex-col md:flex-row">
                    <div class="p-8 w-full bg-gray-800">
                        <h1 class="text-4xl font-bold mb-4">PageSnap API Documentation</h1>
                        <p class="mb-4 text-lg text-gray-400">Simplify Integration: Unravel Our API's Potential for Your Projects.</p>
                    </div>
                </div>

                @include('documents.overview')

                <!-- Request Setup Section -->
                <div class="flex flex-col md:flex-row">
                    <div class="p-8 w-full bg-gray-800">
                        <h1 class="text-4xl font-bold mb-4">Request Setup</h1>
                        <p class="mb-4 text-lg text-gray-400">Parameters that allow you to customize and control the behavior of the request.</p>
                    </div>
                </div>

                @include('documents.request-setup')

                <!-- Request Options Section -->
                <div class="flex flex-col md:flex-row">
                    <div class="p-8 w-full bg-gray-800">
                        <h1 class="text-4xl font-bold mb-4">Request Options</h1>
                        <p class="mb-4 text-lg text-gray-400">Comprehensive Tuning Options for Achieving Your Desired Output.</p>
                    </div>
                </div>

                @include('documents.options')

            </div>
        </div>

        <script>
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            const navMenu = document.getElementById('nav-menu');
            const toggleNav = document.getElementById('toggle-nav');

            toggleNav.addEventListener('click', function() {
                navMenu.classList.toggle('hidden');
            });
        </script>
</body>

</html>