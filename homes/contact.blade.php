<section class="text-white py-4 md:py-16">
    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8">

        <div class="text-center text-5xl font-bold">Contact Us</div>
        <div class="text-center text-2xl mt-6">We're here to answer any questions you have about PageSnap.</div>

        <div class="mt-6 md:mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">

            <div class="p-4 md:p-8 bg-gray-900 rounded-lg">
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <input type="text" name="honeypot" style="display:none">
                    <input type="hidden" name="timestamp" value="{{ time() }}">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-white">Your Name</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                </div>
                                <input type="text" id="name" name="name" class="rounded-lg block w-full ps-10 p-2.5 bg-gray-700 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-violet-500" placeholder="name">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-white">Your Email</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                    </svg>
                                </div>
                                <input type="text" id="email" name="email" class="rounded-lg block w-full ps-10 p-2.5 bg-gray-700 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-violet-500" placeholder="example@example.com">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-4 my-4 md:my-8">
                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-white">Your Comment</label>
                            <textarea id="message" name="message" rows="4" class="rounded-lg block w-full p-2.5 bg-gray-700 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-violet-500" placeholder="How can we help you?"></textarea>
                        </div>
                    </div>

                    @if(session('success'))
                    <div class="flex items-center p-4 mb-4 text-sm rounded-lg bg-gray-800 text-green-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            {{session('success')}}
                        </div>
                    </div>
                    @endif

                    @if($errors->any())
                    <div class="flex items-center p-4 mb-4 text-sm rounded-lg bg-gray-800 text-red-400" role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <div class="font-medium">There were some errors with your submission</div>
                            <ul class="list-disc ml-4">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                    <button type="submit" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Submit Now</button>
                </form>
            </div>

            <div class="p-4 md:p-8">
                <img class="w-1/2 mx-auto md:mx-0" src="{{ asset('images/contact.svg') }}">

                <div class="text-xl text-gray-200 flex items-center">
                    <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                    </svg>
                    <span class="mx-4">{{config('mail.from.address')}}</span>
                </div>

                <div class="mt-4 md:mt-8 text-xl text-gray-200 flex items-center">
                    <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                    </svg>
                    <span class="mx-4">Pusat Perniagaan Raja Uda,<br>12300 Butterworth,<br>Pulau Pinang, Malaysia.</span>
                </div>

                <div class="mt-4 md:mt-8 text-gray-400">* We strive to respond to your inquiry within one business day.</div>
            </div>

        </div>
    </div>
</section>