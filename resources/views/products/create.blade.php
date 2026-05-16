<x-app-layout>

    <x-slot name="header">

        <h2 class="font-bold text-2xl text-gray-800 dark:text-white">
            Tambah Produk
        </h2>

    </x-slot>

    <div class="py-10 bg-gray-100 min-h-screen">

        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-2xl shadow p-8">

                <form action="{{ route('products.store') }}" method="POST">

                    @csrf

                    <div class="mb-5">

                        <label class="block mb-2 font-medium">
                            Nama Produk
                        </label>

                        <input type="text"
                               name="name"
                               class="w-full rounded-xl border-gray-300">

                    </div>

                    <div class="mb-5">

                        <label class="block mb-2 font-medium">
                            Kode Produk
                        </label>

                        <input type="text"
                               name="code"
                               class="w-full rounded-xl border-gray-300">

                    </div>

                    <div class="mb-5">

                        <label class="block mb-2 font-medium">
                            Stock
                        </label>

                        <input type="number"
                               name="stock"
                               class="w-full rounded-xl border-gray-300">

                    </div>

                    <div class="mb-5">

                        <label class="block mb-2 font-medium">
                            Harga
                        </label>

                        <input type="number"
                               name="price"
                               class="w-full rounded-xl border-gray-300">

                    </div>

                    <div class="flex gap-3">

                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl">

                            Simpan Produk

                        </button>

                        <a href="{{ route('products.index') }}"
                           class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-xl">

                            Kembali

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>