<aside :class="$store.sidebarToggle.on ? 'translate-x-0' : '-translate-x-full'"
       class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
       @click.outside="$store.sidebarToggle.on && $store.sidebarToggle.toggle()">
    <div x-data
         class="flex items-center transition-all duration-500 ease-in-out justify-between gap-2 px-6 py-5.5 lg:py-6.5">
        <x-logo-link visible-on="mobile,desktop" />
        <button class="block lg:hidden" @click.stop="$store.sidebarToggle.on && $store.sidebarToggle.toggle()">
            <x-mdi-arrow-left width="25" height="25" class="fill-current" />
        </button>
    </div>

    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
        <nav class="mt-5 py-4 px-4 lg:mt-9 lg:px-6">
            <div>
                <ul class="mb-6 flex flex-col gap-1.5">
                    <li>
                        <x-layouts.partials.sidebar.link route="canvas">
                            <x-mdi-code-block-tags width="18" height="18" class="fill-current" />
                            {{ __('Canvas') }}
                        </x-layouts.partials.sidebar.link>
                    </li>
                </ul>
            </div>
        </nav>

        <x-layouts.partials.sidebar.app-version />
    </div>
</aside>
