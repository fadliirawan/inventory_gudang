<x-app-layout>

    <x-slot name="header">

        <div class="flex justify-between items-center">

            <h2 class="font-bold text-2xl">
                Supplier
            </h2>

            <a href="{{ route('suppliers.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-2xl shadow-lg font-semibold">

                + Tambah Supplier

            </a>

        </div>

    </x-slot>

    <div class="py-10">

        <div class="max-w-7xl mx-auto">

            <div class="bg-white rounded-2xl shadow p-5">

                <table class="min-w-full">

                    <thead>

                        <tr class="border-b">

                            <th class="px-4 py-3">No</th>
                            <th class="px-4 py-3">Nama</th>
                            <th class="px-4 py-3">Phone</th>
                            <th class="px-4 py-3">Address</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($suppliers as $supplier)

                        <tr class="border-b">

                            <td class="px-4 py-3">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $supplier->name }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $supplier->phone }}
                            </td>

                            <td class="px-4 py-3">
                                {{ $supplier->address }}
                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</x-app-layout>