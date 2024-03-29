<header class="sticky top-0 z-999 flex w-full bg-white drop-shadow-1 dark:bg-boxdark dark:drop-shadow-none">
    <div class="flex flex-grow items-center justify-between px-4 py-4 shadow-2 md:px-6 lg:justify-end 2xl:px-11">
        <div class="flex items-center gap-2 sm:gap-4 lg:hidden" x-data>

            @include('components.layouts.partials.mobile-menu')

            <x-logo-link visible-on="mobile" />
        </div>

        <div class="flex items-center gap-3 2xsm:gap-7">
            <ul class="flex items-center gap-2 2xsm:gap-4">
                <li>
                    <label class="relative m-0 block h-7.5 w-14 rounded-full"
                           :class="darkMode ? 'bg-primary' : 'bg-stroke'">
                        <input class="absolute top-0 z-50 m-0 h-full w-full cursor-pointer opacity-0" type="checkbox"
                               :value="darkMode" @change="darkMode = !darkMode" />
                        <span class="absolute left-1 top-1/2 flex h-6 w-6 -translate-y-1/2 translate-x-0 items-center justify-center rounded-full bg-white shadow-switcher duration-75 ease-linear"
                              :class="darkMode && '!right-1 !translate-x-full'">
                            <span class="dark:hidden">
                                <x-mdi-white-balance-sunny width="18" height="18" />
                            </span>
                            <span class="hidden dark:inline-block">
                                <x-mdi-moon-waning-crescent width="18" height="18" />
                            </span>
                        </span>
                    </label>
                </li>
            </ul>

            <div class="relative" x-data="{ dropdownOpen: false }" @click.outside="dropdownOpen = false">
                <a class="flex items-center gap-4" href="#" @click.prevent="dropdownOpen = ! dropdownOpen">
                    <span class="block text-right">
                        <span
                              class="block text-sm font-semibold text-black dark:text-white">{{ __(auth()->user()->name) }}</span>
                    </span>
                    <x-mdi-chevron-down class="hidden fill-current sm:block" ::class="dropdownOpen && 'rotate-180'" width="20"
                                        height="18" />
                </a>

                <div class="absolute right-0 mt-4 flex w-62.5 flex-col rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
                     x-show="dropdownOpen">
                    <ul class="flex flex-col gap-5 border-b border-stroke px-6 py-7.5 dark:border-strokedark">
                        <li>
                            <a class="flex items-center gap-3.5 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base"
                               href="{{ route('profile.edit') }}" wire:navigate.hover>
                                <x-mdi-account class="fill-current" width="22" height="22" />
                                {{ __('My Profile') }}
                            </a>
                        </li>
                    </ul>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                                class="flex items-center gap-3.5 px-6 py-4 text-sm font-medium duration-300 ease-in-out hover:text-primary lg:text-base">
                            <x-mdi-location-exit class="rotate-180 fill-current" width="22" height="22" />
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
