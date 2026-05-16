<x-app-layout>

    <x-slot name="header">

        <div class="flex justify-between items-center">

            <div>

                <h2 class="font-bold text-3xl text-gray-800 dark:text-gray-100">
                    Dashboard Inventory
                </h2>

                <p class="text-gray-500 dark:text-gray-400 mt-1">
                    Monitoring data gudang dan stock barang
                </p>

            </div>

            <a href="{{ route('products.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-2xl shadow-lg transition duration-300">

                + Tambah Produk

            </a>

        </div>

    </x-slot>

    <div class="py-10 bg-gray-100 dark:bg-gray-900 min-h-screen">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- ALERT -->
            @if($lowStock > 0)

            <div class="bg-red-100 dark:bg-red-900 border border-red-300 dark:border-red-700 text-red-700 dark:text-red-200 px-5 py-4 rounded-2xl mb-6 shadow">

                Ada {{ $lowStock }} produk dengan stock minimum.

            </div>

            @endif

            <!-- CARD -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- TOTAL PRODUK -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6 border-l-4 border-blue-500">

                    <p class="text-gray-500 dark:text-gray-400">
                        Total Produk
                    </p>

                    <h2 class="text-4xl font-bold mt-3 text-gray-800 dark:text-gray-100">
                        {{ $totalProducts }}
                    </h2>

                </div>

                <!-- TOTAL STOCK -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6 border-l-4 border-green-500">

                    <p class="text-gray-500 dark:text-gray-400">
                        Total Stock
                    </p>

                    <h2 class="text-4xl font-bold mt-3 text-gray-800 dark:text-gray-100">
                        {{ $totalStock }}
                    </h2>

                </div>

                <!-- LOW STOCK -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6 border-l-4 border-yellow-500">

                    <p class="text-gray-500 dark:text-gray-400">
                        Low Stock
                    </p>

                    <h2 class="text-4xl font-bold mt-3 text-gray-800 dark:text-gray-100">
                        {{ $lowStock }}
                    </h2>

                </div>

                <!-- TOTAL VALUE -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6 border-l-4 border-red-500">

                    <p class="text-gray-500 dark:text-gray-400">
                        Total Value
                    </p>

                    <h2 class="text-3xl font-bold mt-3 text-gray-800 dark:text-gray-100">
                        Rp {{ number_format($totalValue) }}
                    </h2>

                </div>

            </div>

            <!-- CONTENT -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-8">

                <!-- INFORMASI SISTEM -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6">

                    <h3 class="font-bold text-xl text-gray-800 dark:text-gray-100 mb-4">
                        Informasi Sistem
                    </h3>

                    <div class="space-y-4">

                        <div class="flex justify-between">

                            <span class="text-gray-500 dark:text-gray-400">
                                Status Gudang
                            </span>

                            <span class="text-green-500 font-semibold">
                                Active
                            </span>

                        </div>

                        <div class="flex justify-between">

                            <span class="text-gray-500 dark:text-gray-400">
                                Total User
                            </span>

                            <span class="font-semibold text-gray-800 dark:text-gray-100">
                                1
                            </span>

                        </div>

                        <div class="flex justify-between">

                            <span class="text-gray-500 dark:text-gray-400">
                                Sistem
                            </span>

                            <span class="font-semibold text-gray-800 dark:text-gray-100">
                                Laravel 12
                            </span>

                        </div>

                    </div>

                </div>

                <!-- AKTIVITAS GUDANG -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6">

                    <h3 class="font-bold text-xl text-gray-800 dark:text-gray-100 mb-6">
                        Aktivitas Gudang
                    </h3>

                    <div class="space-y-5">

                        <!-- BARANG MASUK -->
                        <a href="{{ route('incoming-goods.index') }}"
                           class="block p-5 bg-blue-50 dark:bg-blue-900 rounded-2xl border border-blue-200 dark:border-blue-700 hover:scale-[1.02] transition duration-300">

                            <div class="flex justify-between items-center">

                                <div>

                                    <p class="font-bold text-xl text-blue-700 dark:text-blue-200">
                                        Barang Masuk
                                    </p>

                                    <p class="text-blue-500 dark:text-blue-300 text-sm mt-1">
                                        Monitoring data barang masuk gudang
                                    </p>

                                </div>

                                <div class="text-right">

                                    <h2 class="text-4xl font-bold text-blue-700 dark:text-blue-200">
                                        {{ $totalIncoming }}
                                    </h2>

                                    <p class="text-blue-500 dark:text-blue-300 text-sm">
                                        Total Qty
                                    </p>

                                </div>

                            </div>

                        </a>

                        <!-- BARANG KELUAR -->
                        <a href="{{ route('outgoing-goods.index') }}"
                           class="block p-5 bg-green-50 dark:bg-green-900 rounded-2xl border border-green-200 dark:border-green-700 hover:scale-[1.02] transition duration-300">

                            <div class="flex justify-between items-center">

                                <div>

                                    <p class="font-bold text-xl text-green-700 dark:text-green-200">
                                        Barang Keluar
                                    </p>

                                    <p class="text-green-500 dark:text-green-300 text-sm mt-1">
                                        Monitoring data barang keluar gudang
                                    </p>

                                </div>

                                <div class="text-right">

                                    <h2 class="text-4xl font-bold text-green-700 dark:text-green-200">
                                        {{ $totalOutgoing }}
                                    </h2>

                                    <p class="text-green-500 dark:text-green-300 text-sm">
                                        Total Qty
                                    </p>

                                </div>

                            </div>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>