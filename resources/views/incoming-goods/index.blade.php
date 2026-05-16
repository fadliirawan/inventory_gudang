<x-app-layout>

    <x-slot name="header">

        <div class="flex justify-between items-center">

            <h2 class="font-bold text-2xl text-gray-800 dark:text-white">
                Barang Masuk
            </h2>

            <a href="{{ route('incoming-goods.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl">

                Tambah Barang Masuk

            </a>

        </div>

    </x-slot>

    <div class="py-10 bg-gray-100 min-h-screen">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white rounded-2xl shadow p-5">

                <table class="min-w-full">

                    <thead>

                        <tr class="border-b">

                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Produk</th>
                            <th class="px-4 py-3">Qty</th>
                            <th class="px-4 py-3">Tanggal</th>
                            <th class="px-4 py-3">Supplier</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($incomingGoods as $item)

                        <tr class="border-b">

                            <td class="px-4 py-3">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $item->product->name }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $item->qty }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $item->date }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $item->supplier }}
                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-app-layout>