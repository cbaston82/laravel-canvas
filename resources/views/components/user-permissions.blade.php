@php use App\Services\Authorizations\CurrentApp; @endphp

<ul {{ $attributes->merge(['class' => "max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400"]) }} >
    @foreach (app(CurrentApp::class)->permissions() as $permission)
        <li>
            <span class="font-extrabold">
                {{ __($permission) }}:
            </span>
            {{ authenticatedUser()->can($permission) ? 'Yes' : 'No' }}
        </li>
    @endforeach
</ul>
