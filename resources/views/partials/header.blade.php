<nav class="bg-gray-900/80 backdrop-blur-md shadow-lg sticky top-0 z-50 border-b border-gray-800">

    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="/" class="text-2xl font-extrabold text-white tracking-wide hover:text-blue-400 transition duration-300">
            Donasiku
        </a>

        <!-- Menu Desktop -->
        <div class="hidden md:flex items-center space-x-6">

            <a href="/" class="relative text-gray-300 hover:text-blue-400 transition duration-300 group">
                Home
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-400 transition-all group-hover:w-full"></span>
            </a>

            <a href="/kontak" class="relative text-gray-300 hover:text-blue-400 transition duration-300 group">
                Kontak
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-400 transition-all group-hover:w-full"></span>
            </a>

            <a href="/profil" class="relative text-gray-300 hover:text-blue-400 transition duration-300 group">
                Profil
                <span class="absolute left-0 -bottom-1 w-0 h-0.5 bg-blue-400 transition-all group-hover:w-full"></span>
            </a>

        </div>

        <!-- Mobile Button -->
        <button id="menu-btn" class="md:hidden text-gray-300 text-2xl focus:outline-none">
            ☰
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="menu" class="hidden md:hidden px-6 pb-4 space-y-3 bg-gray-900 border-t border-gray-800">

        <a href="/" class="block text-gray-300 hover:text-blue-400 transition">Home</a>
        <a href="/kontak" class="block text-gray-300 hover:text-blue-400 transition">Kontak</a>
        <a href="/profil" class="block text-gray-300 hover:text-blue-400 transition">Profil</a>

    </div>

</nav>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>