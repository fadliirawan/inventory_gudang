<x-app-layout>

    <x-slot name="header">

        <h2 class="font-bold text-2xl text-white">
            Tambah Barang Masuk
        </h2>

    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 py-10">

        <div class="max-w-3xl mx-auto">

            <div class="bg-white rounded-3xl shadow-2xl p-10">

                <form action="{{ route('incoming-goods.store') }}" method="POST">

                    @csrf

                    <!-- Produk -->
                    <div class="mb-6">

                        <label class="block mb-2 font-semibold text-gray-700">
                            Produk
                        </label>

                        <select name="product_id"
                                class="w-full rounded-2xl border-gray-300 focus:ring-blue-500 focus:border-blue-500">

                            @foreach($products as $product)

                                <option value="{{ $product->id }}">
                                    {{ $product->name }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    <!-- Supplier -->
                    <div class="mb-6">

                        <label class="block mb-2 font-semibold text-gray-700">
                            Supplier
                        </label>

                        <select name="supplier_id"
                                class="w-full rounded-2xl border-gray-300 focus:ring-blue-500 focus:border-blue-500">

                            @foreach($suppliers as $supplier)

                                <option value="{{ $supplier->id }}">
                                    {{ $supplier->name }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                    <!-- Qty -->
                    <div class="mb-6">

                        <label class="block mb-2 font-semibold text-gray-700">
                            Qty
                        </label>

                        <input type="number"
                               name="qty"
                               class="w-full rounded-2xl border-gray-300 focus:ring-blue-500 focus:border-blue-500">

                    </div>

                    <!-- Tanggal -->
                    <div class="mb-6">

                        <label class="block mb-2 font-semibold text-gray-700">
                            Tanggal
                        </label>

                        <input type="date"
                               name="date"
                               class="w-full rounded-2xl border-gray-300 focus:ring-blue-500 focus:border-blue-500">

                    </div>

                    <!-- Button -->
                    <div class="flex justify-end">

                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-2xl shadow-lg font-semibold">

                            Simpan Barang Masuk

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>