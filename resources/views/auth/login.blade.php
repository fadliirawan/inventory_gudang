<x-guest-layout>

    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 via-indigo-800 to-gray-900 px-4">

        <div class="w-full max-w-md">

            <div class="bg-white/10 backdrop-blur-lg border border-white/20 rounded-3xl shadow-2xl p-8">

                <div class="text-center mb-8">

                    <h1 class="text-4xl font-bold text-white">
                        Inventory System
                    </h1>

                    <p class="text-gray-300 mt-2">
                        Login untuk melanjutkan
                    </p>

                </div>

                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <div class="mb-5">

                        <label class="block text-white mb-2">
                            Email
                        </label>

                        <input type="email"
                               name="email"
                               required
                               class="w-full rounded-2xl border-0 bg-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-blue-400">

                    </div>

                    <div class="mb-6">

                        <label class="block text-white mb-2">
                            Password
                        </label>

                        <input type="password"
                               name="password"
                               required
                               class="w-full rounded-2xl border-0 bg-white/20 text-white placeholder-gray-300 focus:ring-2 focus:ring-blue-400">

                    </div>

                    <button type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-2xl font-semibold shadow-lg transition duration-300">

                        Login

                    </button>

                    <div class="text-center mt-5 text-gray-300">

                        Belum punya akun?

                        <a href="{{ route('register') }}" class="text-blue-300 hover:text-white font-semibold">
                            Register
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</x-guest-layout>