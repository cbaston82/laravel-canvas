@props(['text'])

<h3 {{$attributes->merge(['class' => "mb-4 ml-4 text-sm font-medium text-bodydark2"])}}>{{ __($text) }}</h3>
