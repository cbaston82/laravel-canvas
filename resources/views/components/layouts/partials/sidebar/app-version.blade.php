<div class="mx-auto mb-10 w-full max-w-60 rounded-sm border border-strokedark bg-boxdark px-4 py-6 text-center shadow-default"
     {{ $attributes }}>
    <h3 class="mb-1 font-semibold text-white">{{ __(config('app.name')) }}</h3>
    <p class="mb-4 text-xs">{{ 'Version: ' . __(config('app.version')) }}</p>
</div>
