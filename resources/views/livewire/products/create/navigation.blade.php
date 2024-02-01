<div class="mb-4 flex items-center justify-around text-sm">
    @foreach($steps as $index => $step)
            <div
{{--                wire:click="{{  $step->show() }}"--}}
                @class(['p-4 tracking-wide font-semibold text-gray-500 dark:text-gray-400', 'text-gray-900 dark:text-gray-200' => $step->isCurrent()])>
                {{ $index + 1 }}. {{ $step->label }}
            </div>
    @endforeach
</div>
