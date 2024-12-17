<section id="section-faq" class="bg-gray-900 pb-4 md:pb-16">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-xl">
        <img class="w-1/2 md:w-1/6 mx-auto" src="{{ asset('images/faq.svg') }}">
        <div id="accordion-flush" data-accordion="collapse" data-active-classes="text-white" data-inactive-classes="text-gray-400" class="p-4">
            @foreach($faqs as $index => $faq)
            @include('homes.faqs-item', ['index' => $index+1, 'q' => $faq['q'], 'a' => $faq['a']])
            @endforeach
        </div>
    </div>
</section>