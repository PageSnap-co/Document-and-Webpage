<h2 id="accordion-flush-heading-{{$index}}">
    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-400 border-b-2 border-dashed border-gray-500 gap-3" data-accordion-target="#accordion-flush-body-{{$index}}" aria-expanded="false" aria-controls="accordion-flush-body-{{$index}}">
        <span class="font-bold">{{$q}}</span>
        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
        </svg>
    </button>
</h2>
<div id="accordion-flush-body-{{$index}}" class="hidden" aria-labelledby="accordion-flush-heading-{{$index}}">
    <div class="p-4 text-gray-300">
        <p>{{$a}}</p>
    </div>
</div>