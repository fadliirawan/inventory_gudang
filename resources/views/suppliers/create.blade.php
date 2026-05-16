<x-app-layout>

    <x-slot name="header">
        <h2 class="font-bold text-3xl text-white">
            Tambah Supplier
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gradient-to-br from-slate-900 via-blue-950 to-slate-900 py-10">

        <div class="max-w-3xl mx-auto">

            <div class="bg-white rounded-3xl shadow-2xl p-10">

                <form action="{{ route('suppliers.store') }}" method="POST">

                    @csrf

                    <div class="mb-6">

                        <label class="block mb-2 font-semibold text-gray-700">
                            Nama Supplier
                        </label>

                        <input type="text"
                               name="name"
                               class="w-full rounded-2xl border-gray-300 focus:ring-blue-500 focus:border-blue-500">

                    </div>

                    <div class="mb-6">

                        <label class="block mb-2 font-semibold text-gray-700">
                            Nomor Telepon
                        </label>

                        <input type="text"
                               name="phone"
                               class="w-full rounded-2xl border-gray-300 focus:ring-blue-500 focus:border-blue-500">

                    </div>

                    <div class="mb-6">

                        <label class="block mb-2 font-semibold text-gray-700">
                            Alamat
                        </label>

                        <textarea name="address"
                                  rows="4"
                                  class="w-full rounded-2xl border-gray-300 focus:ring-blue-500 focus:border-blue-500"></textarea>

                    </div>

                    <div class="flex justify-end">

                        <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-2xl font-semibold shadow-lg">
                            Simpan Supplier
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-app-layout>