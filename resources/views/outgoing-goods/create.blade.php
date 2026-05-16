<x-app-layout>

    <x-slot name="header">

        <h2 class="font-bold text-3xl text-gray-800 dark:text-white">
            Tambah Barang Keluar
        </h2>

    </x-slot>

    <div class="py-10 bg-gray-100 dark:bg-gray-900 min-h-screen">

        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-8">

                <form action="{{ route('outgoing-goods.store') }}" method="POST">

                    @csrf

                    <div class="mb-5">

                        <label class="block mb-2 font-medium text-gray-700 dark:text-white">
                            Produk
                        </label>

                        <select name="product_id"
                                class="w-full rounded-xl border-gray-300 dark:bg-gray-700 dark:text-white">

                            @foreach($products as $product)

                            <option value="{{ $product->id }}">
                                {{ $product->name }}
                            </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="mb-5">

                        <label class="block mb-2 font-medium text-gray-700 dark:text-white">
                            Qty
                        </label>

                        <input type="number"
                               name="qty"
                               class="w-full rounded-xl border-gray-300 dark:bg-gray-700 dark:text-white">

                    </div>

                    <div class="mb-5">

                        <label class="block mb-2 font-medium text-gray-700 dark:text-white">
                            Tanggal
                        </label>

                        <input type="date"
                               name="date"
                               class="w-full rounded-xl border-gray-300 dark:bg-gray-700 dark:text-white">

                    </div>

                    <div class="mb-5">

                        <label class="block mb-2 font-medium text-gray-700 dark:text-white">
                            Destination
                        </label>

                        <input type="text"
                               name="destination"
                               placeholder="Tujuan barang keluar"
                               class="w-full rounded-xl border-gray-300 dark:bg-gray-700 dark:text-white">

                    </div>

                    <div class="flex gap-3">

                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-2xl shadow">

                            Simpan Data

                        </button>

                        <a href="{{ route('outgoing-goods.index') }}"
                           class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-2xl shadow">

                            Kembali

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>