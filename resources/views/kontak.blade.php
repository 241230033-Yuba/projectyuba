@extends('app')

@section('title', 'Kontak')

@section('content')

<div class="min-h-[80vh] flex items-center justify-center px-6">

    <div class="bg-white dark:bg-gray-800 shadow-2xl rounded-2xl p-8 max-w-xl w-full border border-gray-300 dark:border-gray-700">

        <h1 class="text-3xl font-bold text-blue-500 text-center mb-4">
            Hubungi Kami
        </h1>

        <p class="text-gray-600 dark:text-gray-300 text-center mb-8">
            Punya pertanyaan atau ingin bekerja sama? Kirim pesan ke kami.
        </p>

        <form class="space-y-5">

            <div>
                <label class="block mb-1">Nama</label>
                <input type="text" placeholder="Masukan nama"
                    class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block mb-1">Email</label>
                <input type="email" placeholder="Masukan email"
                    class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div>
                <label class="block mb-1">Pesan</label>
                <textarea rows="4" placeholder="Tulis pesan"
                    class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-900 border border-gray-300 dark:border-gray-700 rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
            </div>

            <button type="submit"
                class="w-full bg-blue-500 text-white py-3 rounded-xl hover:bg-blue-600 transition">
                Kirim Pesan
            </button>

        </form>

    </div>

</div>

@endsection