<!DOCTYPE html>
<html lang="en" class="scroll-smooth hover:scroll-auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
    <div class="container">
        @yield('container')
    </div>
</body>

<footer class="bg-gray-800 dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com/" class="flex items-center">
                    <img src="{{ asset('img/logosyafaat.jpeg') }}" class=" mr-9 rounded-lg h-24 w-24 " alt="Logo Syafaat" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white"></span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">

                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase dark:text-white">Follow us</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Instagram</a>
                        </li>

                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase dark:text-white">Hubungi Kami</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Kontak </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline"> LiveChat </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-100 uppercase dark:text-white">Bantuan dan Panduan</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">FAQ </a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline"> Syarat &amp; Penggunaan Layanan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-center">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                © 2023 <a href="https://wa.me/+6283824445350/" class="hover:underline">FAW™</a>. All Rights Reserved.
            </span>
        </div>

    </div>
</footer>
</html>