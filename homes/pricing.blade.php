<section id="section-pricing" class="bg-gray-900 py-4 md:py-16">
    <div class="max-w-7xl mx-auto p-4 sm:px-6 lg:px-8">
        <div class="text-center text-5xl font-bold">Start Automating Today</div>
        <div class="text-center text-2xl mt-6">Start for <span class="text-violet-500">FREE</span> with up to <span class="text-violet-500">{{config('pagesnap.free_credits_per_month')}} credits</span> per month — <span class="text-violet-500">no credit card required</span></div>
        <div class="text-gray-400 text-center mt-6">* You can purchase multiple plans at the same time and cancel either of them anytime.</div>
        <div class="text-gray-400 text-center">* 1 credit is equavalent to 5MB. For example, a 7MB PDF will consume 2 credits.</div>
        <div class="text-gray-400 text-center">* Purchased credits will never expire until you use them to generate PDFs.</div>
    </div>
    <div class="max-w-7xl mt-2 md:mt-6 mx-auto p-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-4">
        @foreach($plans as $plan)
        @include('homes.pricing-item', $plan)
        @endforeach
    </div>
</section>