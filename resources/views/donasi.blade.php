@extends('app')

@section('title', 'Donasi')

@section('content')

<div class="min-h-[80vh] flex items-center justify-center px-6">

    <div class="bg-white dark:bg-gray-800 shadow-2xl rounded-2xl p-8 max-w-xl w-full border border-gray-300 dark:border-gray-700">

        <h1 class="text-3xl font-bold text-blue-500 text-center mb-4">
            Donasi Sekarang
        </h1>

        <p class="text-gray-600 dark:text-gray-300 text-center mb-8">
            Bantu mereka yang membutuhkan dengan berdonasi hari ini.
        </p>

        <form action="/donasi/pay" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block mb-1">Nama Lengkap</label>
                <input type="text" name="nama" required placeholder="Masukan nama"
                    class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block mb-1">Email</label>
                <input type="email" name="email" required placeholder="Masukan email"
                    class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block mb-1">Jumlah Donasi (Rp)</label>
                <input type="number" name="jumlah" min="1000" required placeholder="Rp"
                    class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block mb-1">Pesan (Opsional)</label>
                <textarea name="pesan" rows="3" placeholder="Tulis pesan"
                    class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-3 rounded-xl hover:bg-blue-600 transition">
                Donasi Sekarang
            </button>

        </form>

    </div>

</div>

@endsection
