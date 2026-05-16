<nav x-data="{ open: false }"
     class="bg-white border-b border-gray-200 shadow-md">

    <!-- Container -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex justify-between h-16">

            <!-- Left -->
            <div class="flex items-center">

                <!-- Logo -->
                <div class="shrink-0 flex items-center">

                    <a href="{{ route('dashboard') }}"
                       class="text-3xl font-bold text-blue-600">

                        InventoryApp

                    </a>

                </div>

                <!-- Desktop Menu -->
                <div class="hidden sm:flex sm:items-center sm:ms-10 space-x-6">

                    <x-nav-link :href="route('dashboard')"
                                :active="request()->routeIs('dashboard')"
                                class="text-gray-700 hover:text-blue-600 font-semibold transition duration-300">

                        Dashboard

                    </x-nav-link>

                    <x-nav-link :href="route('products.index')"
                                :active="request()->routeIs('products.*')"
                                class="text-gray-700 hover:text-blue-600 font-semibold transition duration-300">

                        Products

                    </x-nav-link>

                    <x-nav-link :href="route('incoming-goods.index')"
                                :active="request()->routeIs('incoming-goods.*')"
                                class="text-gray-700 hover:text-blue-600 font-semibold transition duration-300">

                        Barang Masuk

                    </x-nav-link>

                    <x-nav-link :href="route('outgoing-goods.index')"
                                :active="request()->routeIs('outgoing-goods.*')"
                                class="text-gray-700 hover:text-blue-600 font-semibold transition duration-300">

                        Barang Keluar

                    </x-nav-link>

                    <x-nav-link :href="route('suppliers.index')"
                                :active="request()->routeIs('suppliers.*')"
                                class="text-gray-700 hover:text-blue-600 font-semibold transition duration-300">

                        Supplier

                    </x-nav-link>

                </div>

            </div>

            <!-- Right -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                <x-dropdown align="right" width="48">

                    <x-slot name="trigger">

                        <button class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-2xl font-semibold text-sm text-white hover:bg-blue-700 transition duration-300 shadow-lg">

                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-2">

                                <svg class="fill-current h-4 w-4"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">

                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd" />

                                </svg>

                            </div>

                        </button>

                    </x-slot>

                    <!-- Dropdown -->
                    <x-slot name="content">

                        <form method="POST" action="{{ route('logout') }}">

                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                             this.closest('form').submit();">

                                Logout

                            </x-dropdown-link>

                        </form>

                    </x-slot>

                </x-dropdown>

            </div>

            <!-- Mobile Button -->
            <div class="-me-2 flex items-center sm:hidden">

                <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-blue-600 hover:bg-gray-100 transition duration-300">

                    <svg class="h-6 w-6"
                         stroke="currentColor"
                         fill="none"
                         viewBox="0 0 24 24">

                        <path :class="{'hidden': open, 'inline-flex': ! open }"
                              class="inline-flex"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />

                        <path :class="{'hidden': ! open, 'inline-flex': open }"
                              class="hidden"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M6 18L18 6M6 6l12 12" />

                    </svg>

                </button>

            </div>

        </div>

    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': ! open}"
         class="hidden sm:hidden bg-white border-t border-gray-200">

        <div class="pt-2 pb-3 space-y-1 px-4">

            <x-responsive-nav-link :href="route('dashboard')">
                Dashboard
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('products.index')">
                Products
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('incoming-goods.index')">
                Barang Masuk
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('outgoing-goods.index')">
                Barang Keluar
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('suppliers.index')">
                Supplier
            </x-responsive-nav-link>

        </div>

        <!-- Mobile User -->
        <div class="border-t border-gray-200 pt-4 pb-3">

            <div class="px-4">

                <div class="font-medium text-base text-gray-800">
                    {{ Auth::user()->name }}
                </div>

                <div class="font-medium text-sm text-gray-500">
                    {{ Auth::user()->email }}
                </div>

            </div>

            <div class="mt-3 space-y-1 px-4">

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                                           onclick="event.preventDefault();
                                           this.closest('form').submit();">

                        Logout

                    </x-responsive-nav-link>

                </form>

            </div>

        </div>

    </div>

</nav>