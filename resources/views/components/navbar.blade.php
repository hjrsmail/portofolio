<nav id="navbar" x-data="{
    isOpen: false,
    navigationMenuOpen: false,
    navigationMenu: '',
    navigationMenuCloseDelay: 200,
    navigationMenuCloseTimeout: null,
    navigationMenuLeave() {
        let that = this;
        this.navigationMenuCloseTimeout = setTimeout(() => {
            that.navigationMenuClose();
        }, this.navigationMenuCloseDelay);
    },
    navigationMenuReposition(navElement) {
        this.navigationMenuClearCloseTimeout();
        this.$refs.navigationDropdown.style.left = navElement.offsetLeft + 'px';
        this.$refs.navigationDropdown.style.marginLeft = (navElement.offsetWidth / 2) + 'px';
    },
    navigationMenuClearCloseTimeout() {
        clearTimeout(this.navigationMenuCloseTimeout);
    },
    navigationMenuClose() {
        this.navigationMenuOpen = false;
        this.navigationMenu = '';
    }
}"
    class="fixed top-0 w-full z-50 bg-dark border-b border-gray-800 transition-all duration-300 will-change-transform">
    <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8 ">
        <div class="flex h-20 items-center justify-between">
            {{-- Logo Kiri --}}
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="size-8"
                        src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                </div>
            </div>

            {{-- Navigasi --}}
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-10">
                    <x-nav-link href="{{ url('/') }}" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="{{ url('about') }}" :active="request()->is('about')">About Me</x-nav-link>
                    <x-nav-link href="{{ url('portofolio') }}" :active="request()->is('portofolio')">Portofolio</x-nav-link>
                    <x-nav-link href="{{ url('contact') }}" :active="request()->is('contact')">Contact</x-nav-link>

                    <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false"
                        class="relative text-md font-medium">
                        <x-nav-link href="#" @click.prevent="open = !open"
                            class="cursor-pointer">Other</x-nav-link>
                        <div x-show="open" x-transition
                            class="absolute left-0 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50 text-md">
                            <a href="{{ url('other/team') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-yellow-500">Our Team</a>
                            <a href="{{ url('other/history') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-yellow-500">History</a>
                            <a href="{{ url('other/mission') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-yellow-500">Mission</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen = !isOpen"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>

                    <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3 border-b border-gray-700">
                <x-nav-link-mobile href="{{ url('/') }}" :active="request()->is('/')">Home</x-nav-link-mobile>
                <x-nav-link-mobile href="{{ url('about') }}" :active="request()->is('blog')">About Me</x-nav-link-mobile>
                <x-nav-link-mobile href="{{ url('portofolio') }}" :active="request()->is('portofolio')">Portofolio</x-nav-link-mobile>
                <x-nav-link-mobile href="{{ url('contact') }}" :active="request()->is('contact')">Contact</x-nav-link-mobile>
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false"
                    class="relative text-md font-medium hidden">
                    <x-nav-link-mobile href="#" @click.prevent="open = !open" class="cursor-pointer">Other</x-nav-link-mobile>
                    <div x-show="open" x-transition
                        class="absolute left-0 mt-2 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50 text-md">
                        <a href="{{ url('other/team') }}" class="block px-4 py-2 text-gray-700 hover:bg-yellow-500">Our
                            Team</a>
                        <a href="{{ url('other/history') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-yellow-500">History</a>
                        <a href="{{ url('other/mission') }}"
                            class="block px-4 py-2 text-gray-700 hover:bg-yellow-500">Mission</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
