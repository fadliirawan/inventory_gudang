<x-app-layout>

    <x-slot name="header">

        <div class="flex justify-between items-center">

            <div>

                <h2 class="font-bold text-3xl text-gray-800 dark:text-white">
                    Barang Keluar
                </h2>

                <p class="text-gray-500 dark:text-gray-300 mt-1">
                    Monitoring data barang keluar gudang
                </p>

            </div>

            <a href="{{ route('outgoing-goods.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-2xl shadow">

                + Tambah Barang Keluar

            </a>

        </div>

    </x-slot>

    <div class="py-10 bg-gray-100 dark:bg-gray-900 min-h-screen">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow p-6">

                <div class="overflow-x-auto">

                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">

                        <thead class="bg-gray-50 dark:bg-gray-700">

                            <tr>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 dark:text-white">
                                    No
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 dark:text-white">
                                    Produk
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 dark:text-white">
                                    Qty
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 dark:text-white">
                                    Tanggal
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 dark:text-white">
                                    Destination
                                </th>

                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700 dark:text-white">
                                    Aksi
                                </th>

                            </tr>

                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                            @forelse($outgoingGoods as $item)

                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">

                                <td class="px-6 py-4 text-gray-700 dark:text-white">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="px-6 py-4 text-gray-700 dark:text-white">
                                    {{ $item->product->name }}
                                </td>

                                <td class="px-6 py-4 text-gray-700 dark:text-white">
                                    {{ $item->qty }}
                                </td>

                                <td class="px-6 py-4 text-gray-700 dark:text-white">
                                    {{ $item->date }}
                                </td>

                                <td class="px-6 py-4 text-gray-700 dark:text-white">
                                    {{ $item->destination }}
                                </td>

                                <td class="px-6 py-4 flex gap-2">

                                    <a href="#"
                                       class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-xl shadow">

                                        Edit

                                    </a>

                                    <form action="#"
                                          method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl shadow">

                                            Hapus

                                        </button>

                                    </form>

                                </td>

                            </tr>

                            @empty

                            <tr>

                                <td colspan="6"
                                    class="text-center py-10 text-gray-500 dark:text-gray-300">

                                    Belum ada data barang keluar

                                </td>

                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>