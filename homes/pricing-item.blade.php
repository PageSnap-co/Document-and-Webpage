<div class="rounded-lg shadow p-6 md:p-8 bg-gray-800 border-gray-700">
    <h5 class="mb-4 text-xl font-medium text-gray-400">{{$plan}} plan</h5>
    <div class="flex items-baseline text-white">
        <span class="text-3xl font-semibold">$</span>
        <span class="text-5xl font-extrabold tracking-tight">{{$price}}</span>
        <span class="ms-1 text-xl font-normal text-gray-400">/month</span>
    </div>
    <ul role="list" class="space-y-5 my-7">
        <li class="flex items-center">
            <svg class="flex-shrink-0 w-4 h-4 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-400 ms-3"><span class="text-2xl font-extrabold text-violet-500">{{$credits}}</span> credits/month</span>
        </li>
        <li class="flex items-center">
            <svg class="flex-shrink-0 w-4 h-4 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-400 ms-3">Average <span class="text-violet-500 font-extrabold">${{number_format((float)($price / $credits), 4, '.', '')}}</span>/credit</span>
        </li>
        <li class="flex items-center">
            <svg class="flex-shrink-0 w-4 h-4 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-400 ms-3">Up to <span class="text-violet-500 font-extrabold">{{$configurable}}</span> options</span>
        </li>
        <li class="flex items-center">
            <svg class="flex-shrink-0 w-4 h-4 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-400 ms-3">Free {{config('pagesnap.sandbox_limit_per_day')}} sandbox credits/day</span>
        </li>
        @foreach($features as $feature)
        <li class="flex items-center">
            <svg class="flex-shrink-0 w-4 h-4 text-indigo-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-400 ms-3">{{$feature}}</span>
        </li>
        @endforeach
        @foreach($missings as $missing)
        <li class="flex line-through decoration-gray-500">
            <svg class="flex-shrink-0 w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="text-base font-normal leading-tight text-gray-500 ms-3">{{$missing}}</span>
        </li>
        @endforeach
    </ul>
    <a type="button" href="{{$btnHomeLink}}" class="text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">{{$btnHomeLabel}}</a>
</div>