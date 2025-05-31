@extends('templates.template')

@section('title', 'register page')

@section('contents')
<div class="flex items-center justify-center min-h-screen bg-gradient-to-br from-[#e0c3af] to-[#f4e1d2] px-4">
    <div class="bg-[#926f5b] w-full max-w-md md:max-w-sm p-6 sm:p-8 rounded-2xl shadow-lg text-white">
        <h2 class="text-2xl font-bold text-center mb-2">Selamat datang!</h2>
        <p class="text-center text-sm mb-6">Buat akunmu di Nginepo sekarang!</p>

        <form method="POST" action="/">
            @csrf

            <div class="mb-4">
                <label for="username" class="block text-sm font-semibold mb-1">Username</label>
                <input type="text" name="username" id="username" required
                    class="w-full px-4 py-2 rounded-full bg-[#c7b3a3] text-black focus:outline-none focus:ring-2 focus:ring-white">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold mb-1">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 rounded-full bg-[#c7b3a3] text-black focus:outline-none focus:ring-2 focus:ring-white">
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-sm font-semibold mb-1">Nomor HP</label>
                <input type="text" name="phone" id="phone" required
                    class="w-full px-4 py-2 rounded-full bg-[#c7b3a3] text-black focus:outline-none focus:ring-2 focus:ring-white">
            </div>

            <div class="mb-4 relative">
                <label for="password" class="block text-sm font-semibold mb-1">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 pr-10 rounded-full bg-[#c7b3a3] text-black focus:outline-none focus:ring-2 focus:ring-white">
                <span class="absolute right-3 top-9 text-gray-600 cursor-pointer">
                    👁️‍🗨️
                </span>
            </div>

            <div class="mb-6 relative">
                <label for="password_confirmation" class="block text-sm font-semibold mb-1">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="w-full px-4 py-2 pr-10 rounded-full bg-[#c7b3a3] text-black focus:outline-none focus:ring-2 focus:ring-white">
                <span class="absolute right-3 top-9 text-gray-600 cursor-pointer">
                    👁️‍🗨️
                </span>
            </div>

            <button type="submit"
                class="w-full py-2 bg-gray-800 hover:bg-gray-900 text-white font-semibold rounded-xl transition-all duration-300">
                Register
            </button>
        </form>

        <p class="text-center text-sm mt-4 text-white">
            Sudah memiliki akun?
            <a href="/" class="text-[#4d2600] font-semibold hover:underline">Register</a>
        </p>
    </div>
</div>
@endsection
