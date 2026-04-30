@extends('app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<div class="min-h-[80vh] flex items-center justify-center bg-gradient-to-br from-gray-900 via-gray-800 to-black px-6">

    <div class="text-center max-w-2xl">

        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight mb-6">
            Wujudkan Kebaikan Bersama
            <span class="text-blue-400 drop-shadow-lg">Donasiku</span>
        </h1>

        <p class="text-gray-300 text-lg mb-8">
            Platform donasi digital yang menghadirkan penyaluran bantuan secara cepat, praktis, dan transparan.

        <!-- CTA Button -->
        <div class="flex justify-center">
            <a href="/donasi" class="bg-blue-500 text-white px-8 py-3 rounded-xl shadow-lg hover:bg-blue-600 hover:scale-105 transition duration-300">
                Mulai Donasi Sekarang
            </a>
        </div>

    </div>

</div>

<!-- Card Section -->
<div class="bg-gray-900 py-12">
    <div class="container mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-6">

            <!-- Cepat -->
            <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-blue-500/20 hover:-translate-y-2 transition duration-300">
                <h3 class="text-xl font-semibold text-blue-400 mb-2">Cepat</h3>
                <p class="text-gray-300">
                    Setiap donasi diproses secara optimal untuk memastikan kecepatan dan kemudahan penggunaan.
                </p>
            </div>

            <!-- Praktis -->
            <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-blue-500/20 hover:-translate-y-2 transition duration-300">
                <h3 class="text-xl font-semibold text-blue-400 mb-2">Praktis</h3>
                <p class="text-gray-300">
                    Antarmuka sederhana memudahkan siapa saja untuk berdonasi kapan saja dan di mana saja.
                </p>
            </div>

            <!-- Transparan -->
            <div class="bg-gray-800 p-6 rounded-2xl shadow-lg hover:shadow-blue-500/20 hover:-translate-y-2 transition duration-300">
                <h3 class="text-xl font-semibold text-blue-400 mb-2">Transparan</h3>
                <p class="text-gray-300">
                    Setiap donasi dapat dipantau secara terbuka sehingga memberikan kejelasan dan kepercayaan kepada pengguna.
                </p>
            </div>

        </div>

    </div>
</div>

@endsection