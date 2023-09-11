@extends('layout.homelayout')
@section('content')
@type {import('tailwindcss').Config}





<section class="pt-24 w-full h-screen bg-fixed bg-cover bg-top bg-no-repeat bg-[url('/public/img/bgmerk.jpg')]  bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-yellow-500 md:text-5xl lg:text-6xl">Pendaftaran Merek
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Pastikan Anda memiliki hak eksklusif atas merek dan perlindungan hukumnya. Syafaat siap membantu Anda mendaftarkannya.</p>
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
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-yellow-500 ">Pastikan Anda Memiliki Hak Eksklusif atas Merek dan Perlindungan Hukumnya</h1>
                <div class="h-1 w-20 bg-gray-100 rounded"></div>
            </div>
            <!-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-400 text-opacity-90">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p> -->
        </div>
        <div class="flex flex-wrap -m-4 ">
            <div class="xl:w-1/2 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Pendaftaran Merek</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 6,8 juta</h2>
                        <div>
                            <p>Estimasi waktu proses pendaftaran:
                            </p>
                            <p> 5 hari kerja</p>
                        </div>

                    </div>
                </a>
            </div>


            <div class="xl:w-1/2 md:w-1/2 p-20 pt-26 ">
                <p class="text-white ">Yang akan Anda dapatkan dalam layanan Pendaftaran Merek:</p>
                <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                    <li>Sertifikat Elektronik dari Kementerian Hukum dan HAM</li>
                    <li data-tooltip-target="tooltip-no-arrow"><u>Penelusuran Merk</u></li>
                    <div id="tooltip-no-arrow" role="tooltip" class="box-border border-4 h-auto w-40 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <p class="">
                            Merek yang Anda daftarkan akan dicek di database Ditjen Hak Kekayaan Intelektual.
                        </p>
                    </div>
                    <p class="pt-20 leading-relaxed text-base">*Harga di atas belum termasuk PPN 11%</p>
                </ul>
            </div>
        </div>
</section>





<section class="flex:wrap mx-28 text-gray-900">
    <div class="container py-24 ">
        <div class="text-center mb-10">
            <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-yellow-500 mb-4">
                FAQ Seputar Pendaftaran Merek
            </h1>
            <p class="text-white text-base leading-relaxed xl:w-1/1 lg:w-3/4 mx-auto">
            </p>
        </div>

        <div class=" lg:w-1/1 px-4 py-2">
            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Mengapa merek Saya harus didaftarkan?
                </summary>
                <span class="text-white px-4 py-2">
                    Merek merupakan aset penting dari kegiatan usaha Anda. Meskipun Anda sudah menggunakan merek tersebut dalam aktivitas bisnis sehari-hari, bukan berarti Anda telah mendapatkan hak eksklusif atas merk tersebut dan perlindungan hukumnya. Ini terjadi karena Indonesia menggunakan sistem First to File, yang artinya pihak yang pertama kali mengajukan permohonan pendaftaran diberi prioritas untuk mendapatkan pendaftaran merek dan diakui sebagai pemilik merek yang sah.
                </span>
            </details>

            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Apa syarat yang diperlukan untuk mendaftarkan merek?
                </summary>
                <span class="text-white px-4 py-2">
                    Jika pendaftaran diajukan atas nama perseorangan, maka Anda cukup melampirkan KTP dan Etiket/Label merek kepada Kami. Namun, apabila pendaftaran diajukan atas nama badan hukum maka Anda dapat melampirkan akta pendirian badan hukum dan akta perubahannya (jika ada), NPWP badan hukum, identitas penanggung jawab badan hukum, dan Etiket/Label merek.
                </span>
            </details>

            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Apakah merek memiliki masa berlaku?
                </summary>
                <span class="text-white px-4 py-2">
                    Merek yang telah terdaftar akan mendapatkan pelindungan hukum untuk jangka waktu 10 tahun sejak tanggal penerimaan dan dapat diperpanjang untuk jangka waktu yang sama. Yang dimaksud tanggal penerimaan adalah tanggal penerimaan permohonan yang telah memenuhi persyaratan minimum berupa formular permohonan yang telah diisi lengkap, label merek, dan bukti pembayaran biaya.
                </span>
            </details>
        </div>
    </div>
    </div>
</section>




@endsection('content')