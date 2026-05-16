<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-700 to-blue-600 px-4 py-10">

        <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-10">

            <div class="text-center mb-8">

                <h1 class="text-3xl font-bold text-gray-800">
                    Register Account
                </h1>

                <p class="text-gray-500 mt-2">
                    Buat akun untuk masuk ke sistem inventory
                </p>

            </div>

            <form method="POST" action="{{ route('register') }}">

                @csrf

                <div>

                    <x-input-label for="name" :value="__('Name')" />

                    <x-text-input id="name"
                                  class="block mt-1 w-full rounded-xl"
                                  type="text"
                                  name="name"
                                  :value="old('name')"
                                  required autofocus />

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">

                    <x-input-label for="email" :value="__('Email')" />

                    <x-text-input id="email"
                                  class="block mt-1 w-full rounded-xl"
                                  type="email"
                                  name="email"
                                  :value="old('email')"
                                  required />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                </div>

                <div class="mt-4">

                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password"
                                  class="block mt-1 w-full rounded-xl"
                                  type="password"
                                  name="password"
                                  required />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                </div>

                <div class="mt-4">

                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation"
                                  class="block mt-1 w-full rounded-xl"
                                  type="password"
                                  name="password_confirmation"
                                  required />

                </div>

                <button type="submit"
                        class="w-full mt-6 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-xl shadow-lg">

                    Register

                </button>

                <p class="text-center text-sm text-gray-500 mt-6">

                    Sudah punya akun?

                    <a href="{{ route('login') }}"
                       class="text-indigo-600 hover:underline">

                        Login

                    </a>

                </p>

            </form>

        </div>

    </div>

</x-guest-layout>