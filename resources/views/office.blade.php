@extends('layout.homelayout')
@section('content')
@type {import('tailwindcss').Config}



<section class="pt-24 w-full h-screen bg-fixed bg-cover bg-top bg-no-repeat bg-[url('/public/img/bgmerk.jpg')]  bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-yellow-500 md:text-5xl lg:text-6xl">Layanan Virtual Office
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Layanan penyewaan Virtual Office dengan harga terjangkau dan fasilitas lengkap. Lokasi prestisius dan sudah sesuai aturan zonasi lokasi usaha sesuai Pergub No. 31/2022.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-yellow-700 hover:bg-yellow-500 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                LiveChat
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </a>
        </div>
    </div>
</section>






<section class="text-gray-400 body-font bg-gray-900">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20 ">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-yellow-500 ">Jadikan Syafaat Solusi Kebutuhan Virtual Office Usaha Anda</h1>
                <div class="h-1 w-20 bg-gray-100 rounded"></div>
            </div>
            <!-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-400 text-opacity-90">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p> -->
        </div>
        <div class="flex flex-wrap -m-4 ">
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Virtual Office</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 2,5 juta</h2>
                        <div>
                            <p>Berlangganan virtual office selama 1 tahun di daerah strategis Jakarta untuk mendukung kebutuhan bisnis Anda!
                            </p>

                        </div>
                    </div>
                </a>
            </div>


            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Custom
                        </h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Tanyakan Via LiveChat</h2>
                        <div>
                            <p>Dapatkan penawaran khusus jika berlangganan lebih dari 1 tahun!
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="xl:w-1/3 md:w-1/2 p-20 pt-26 ">
                <p class="text-white ">Berikut manfaat yang Anda dapatkan dengan memilih salah satu dari paket yang kami sediakan:</p>
                <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                    <li>Nomor telepon Bersama</li>
                    <li>Alamat surat menyurat</li>
                    <li data-tooltip-target="tooltip-no-arrow"><u>Ruang Meeting</u></li>
                    <div id="tooltip-no-arrow" role="tooltip" class="box-border border-4 h-auto w-40 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <p class="">
                            Tersedia 2 ruang meeting yang dapat digunakan sesuai jadwal booking. Silakan Hubungi sales untuk informasi lebih lengkap.
                        </p>
                    </div>
                    <p class="pt-20 leading-relaxed text-base">*Harga di atas belum termasuk PPN 11%</p>
                </ul>
            </div>
        </div>
</section>


<section class=" bg-gray-800 text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="w-full md:w-1/2 mb-10 md:mb-0">
            <img src="{{ asset('img/ftptsero.avif') }}" class="  w-full h-auto bg-fixed bg-no-repeat bg-center bg-cover rounded-xl" alt="Logo Syafaat" />
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-blue-500">Virtual Office
                <div class="text-white font-bold ">Itu Apa?
            </h1>
            <p class="text-white mb-8 leading-relaxed">Virtual Office adalah layanan sewa perkantoran virtual atau non fisik yang jauh lebih murah, fleksibel, dan memiliki alamat domisili legal untuk pendaftaran PT/CV Perusahaan seperti kantor pada umumnya.
                Dengan kata lain, anda tidak akan mendapatkan lokasi kantor fisik, namun akan mendapatkan fasilitas seperti ruang meeting, resepsionis profesional, layanan call/mail handling, layanan penerima paket dan juga alamat domisili untuk legalitas perusahaan.</p>
        </div>
    </div>
    </div>
</section>




<section class="pt-10 pb-10">

    <div class="bg-gray-600 rounded-xl mx-auto max-w-screen-lg flex flex-wrap">
        <div class="flex flex-wrap -m-4 ">
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Virtual Office</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 2,5 juta</h2>
                        <div>
                            <p>Berlangganan virtual office selama 1 tahun di daerah strategis Jakarta untuk mendukung kebutuhan bisnis Anda!
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Virtual Office</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 2,5 juta</h2>
                        <div>
                            <p>Berlangganan virtual office selama 1 tahun di daerah strategis Jakarta untuk mendukung kebutuhan bisnis Anda!
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Virtual Office</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 2,5 juta</h2>
                        <div>
                            <p>Berlangganan virtual office selama 1 tahun di daerah strategis Jakarta untuk mendukung kebutuhan bisnis Anda!
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="xl:w-1/3 md:w-1/2 p-4">
            <a href="/">
                <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                    <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                    <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Virtual Office</h3>
                    <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 2,5 juta</h2>
                    <div>
                        <p>Berlangganan virtual office selama 1 tahun di daerah strategis Jakarta untuk mendukung kebutuhan bisnis Anda!
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="xl:w-1/3 md:w-1/2 p-4">
            <a href="/">
                <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                    <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                    <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Virtual Office</h3>
                    <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 2,5 juta</h2>
                    <div>
                        <p>Berlangganan virtual office selama 1 tahun di daerah strategis Jakarta untuk mendukung kebutuhan bisnis Anda!
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="xl:w-1/3 md:w-1/2 p-4">
            <a href="/">
                <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                    <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                    <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Virtual Office</h3>
                    <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 2,5 juta</h2>
                    <div>
                        <p>Berlangganan virtual office selama 1 tahun di daerah strategis Jakarta untuk mendukung kebutuhan bisnis Anda!
                        </p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</section>

























@endsection('content')