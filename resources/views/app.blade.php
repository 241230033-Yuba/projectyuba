<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>@yield('title') | Donasiku</title>
</head>

<body class="min-h-screen flex flex-col bg-gray-900 text-gray-200">

    <!-- Navbar -->
    @include('partials.header')

    <!-- Main Content (DITAMBAH TRANSISI) -->
    <main id="page-content" class="flex-grow container mx-auto px-6 py-8 transition-opacity duration-300 opacity-0">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 text-center py-4 border-t border-gray-700">
        <p>© {{ date('Y') }} Donasiku. All rights reserved.</p>
    </footer>

    <!-- SCRIPT TRANSISI -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const content = document.getElementById("page-content");

            // Fade IN saat halaman load
            setTimeout(() => {
                content.classList.remove("opacity-0");
            }, 50);

            // Fade OUT saat klik link
            document.querySelectorAll("a").forEach(link => {
                link.addEventListener("click", function(e) {
                    // hanya untuk link internal
                    if (this.hostname === window.location.hostname) {
                        e.preventDefault();
                        const url = this.href;

                        content.classList.add("opacity-0");

                        setTimeout(() => {
                            window.location.href = url;
                        }, 300);
                    }
                });
            });
        });
    </script>

</body>

</html>