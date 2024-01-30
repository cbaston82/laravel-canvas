<div {{ $attributes }}
     class="mx-auto mb-10 w-full max-w-60 rounded-sm border border-strokedark bg-boxdark py-6 px-4 text-center shadow-default">
    <h3 class="mb-1 font-semibold text-white">{{ __(config('app.name')) }}</h3>
    <p class="mb-4 text-xs">{{ 'Version: ' . __(config('app.version')) }}</p>
</div>
