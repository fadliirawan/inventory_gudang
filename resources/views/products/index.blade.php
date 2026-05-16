<x-app-layout>

    <x-slot name="header">

        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">

            <div>

                <h2 class="font-bold text-3xl text-gray-800 dark:text-gray-100">
                    Data Produk
                </h2>

                <p class="text-gray-500 dark:text-gray-400 mt-1">
                    Kelola seluruh data produk gudang
                </p>

            </div>

            <div class="flex gap-3">

                <!-- EXPORT EXCEL -->
                <a href="{{ route('products.export.excel') }}"
                   class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-2xl shadow-lg transition duration-300">

                    Export Excel

                </a>

                <!-- EXPORT PDF -->
                <a href="{{ route('products.export.pdf') }}"
                   class="bg-red-600 hover:bg-red-700 text-white px-5 py-3 rounded-2xl shadow-lg transition duration-300">

                    Export PDF

                </a>

                <!-- TAMBAH -->
                <a href="{{ route('products.create') }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-2xl shadow-lg transition duration-300">

                    + Tambah Produk

                </a>

            </div>

        </div>

    </x-slot>

    <div class="py-10 bg-gray-100 dark:bg-gray-900 min-h-screen">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 rounded-3xl shadow-xl p-6">

                <!-- SEARCH -->
                <form action="{{ route('products.index') }}"
                      method="GET"
                      class="mb-6">

                    <div class="flex flex-col md:flex-row gap-3">

                        <input type="text"
                               name="search"
                               value="{{ request('search') }}"
                               placeholder="Cari nama atau kode produk..."
                               class="w-full md:w-96 rounded-2xl border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500">

                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-2xl shadow transition duration-300">

                            Search

                        </button>

                    </div>

                </form>

                <!-- SUCCESS -->
                @if(session('success'))

                <div class="mb-6 bg-green-100 dark:bg-green-900 border border-green-300 dark:border-green-700 text-green-700 dark:text-green-200 px-5 py-4 rounded-2xl">

                    {{ session('success') }}

                </div>

                @endif

                <!-- TABLE -->
                <div class="overflow-x-auto rounded-2xl border border-gray-200 dark:border-gray-700">

                    <table class="min-w-full">

                        <thead class="bg-gray-100 dark:bg-gray-700">

                            <tr>

                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-700 dark:text-gray-100">
                                    No
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-700 dark:text-gray-100">
                                    Nama Produk
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-700 dark:text-gray-100">
                                    Kode
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-700 dark:text-gray-100">
                                    Stock
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-700 dark:text-gray-100">
                                    Harga
                                </th>

                                <th class="px-6 py-4 text-center text-sm font-bold text-gray-700 dark:text-gray-100">
                                    Aksi
                                </th>

                            </tr>

                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                            @forelse($products as $product)

                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition duration-200">

                                <td class="px-6 py-4 text-gray-700 dark:text-gray-100">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="px-6 py-4 font-semibold text-gray-700 dark:text-gray-100">
                                    {{ $product->name }}
                                </td>

                                <td class="px-6 py-4 text-gray-700 dark:text-gray-100">
                                    {{ $product->code }}
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-3 py-1 rounded-full text-sm font-semibold
                                        {{ $product->stock <= 5
                                            ? 'bg-red-100 text-red-600 dark:bg-red-900 dark:text-red-300'
                                            : 'bg-green-100 text-green-600 dark:bg-green-900 dark:text-green-300' }}">

                                        {{ $product->stock }}

                                    </span>

                                </td>

                                <td class="px-6 py-4 text-gray-700 dark:text-gray-100 font-semibold">
                                    Rp {{ number_format($product->price) }}
                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex justify-center gap-2">

                                        <!-- EDIT -->
                                        <a href="{{ route('products.edit', $product->id) }}"
                                           class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-xl shadow transition duration-300">

                                            Edit

                                        </a>

                                        <!-- DELETE -->
                                        <form action="{{ route('products.destroy', $product->id) }}"
                                              method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button onclick="return confirm('Yakin hapus produk?')"
                                                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl shadow transition duration-300">

                                                Hapus

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                            @empty

                            <tr>

                                <td colspan="6"
                                    class="text-center py-12 text-gray-500 dark:text-gray-400">

                                    Belum ada data produk

                                </td>

                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

                <!-- PAGINATION -->
                <div class="mt-6">

                    {{ $products->links() }}

                </div>

            </div>

        </div>

    </div>

</x-app-layout>