@extends('layout.homelayout')
@section('content')
@type {import('tailwindcss').Config}


<section class="pt-24 w-full h-screen bg-fixed bg-cover bg-top bg-no-repeat bg-[url('/public/img/bgyysn.jpg')]  bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-yellow-500 md:text-5xl lg:text-6xl">Layanan LKPM
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">LKPM adalah Laporan Kegiatan Penanaman Modal, yang wajib disampaikan oleh setiap perusahaan dalam periode tertentu. Perusahaan yang masuk skala menengah dan besar wajib mengisi LKPM setiap 3 bulan.</p>
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
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-yellow-500 ">Pilih Paket LKPM yang Sesuai dengan Kebutuhan Anda</h1>
                <div class="h-1 w-20 bg-gray-100 rounded"></div>
            </div>
            <!-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-400 text-opacity-90">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p> -->
        </div>
        <div class="flex flex-wrap -m-4 ">
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Pengisian LKPM</h3>
                        <div class=" bg-gray-300 text-sm flex text-blue-800 text-center "> Dapatkan harga khusus untuk pelaporan lebih dari 10 lokasi! </div>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 2,5 juta</h2>
                        <div>
                            <p>Pelaporan LKPM perusahaan akan dikerjakan oleh team kami, sesuai dengan data yang diberikan oleh Anda. Dengan catatan perusahaan telah melakukan Migrasi OSS RBA.</p>
                        </div>

                    </div>
                </a>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/721x401" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Panduan dan Konsultasi LKPM
                        </h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 3,3 juta</h2>
                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    1 perusahaan maksimal 2 peserta
                                </li>
                                <li>1 sesi maksimal 120 menit
                                </li>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/722x402" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Migrasi OSS RBA dan Pengisian LKPM</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 5 juta</h2>
                        <div>
                            <p>Perusahaan akan mendapatkan layanan migrasi OSS RBA dan pelaporan LKPM Perusahaan untuk 1x periode berdasarkan kriteria usaha Kecil, Menengah, dan Besar.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">In House Training OSS dan LKPM
                        </h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Tanya Via LiveChat</h2>

                        <div>
                            <p>Pelatihan mengenai OSS dan LKPM, dimana materi, narasumber serta pelaksanannya dapat disesuaikan dengan kebutuhan Perusahaan.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Custom</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Tanya Via LiveChat</h2>
                        <p class="leading-relaxed text-base">Tidak menemukan layanan yang sesuai dengan kebutuhan Anda?
                            Ceritakan kebutuhan Anda pada kami!</p>
                    </div>
            </div>
            </a>

            <div class="xl:w-1/3 md:w-1/2 p-20 pt-26 ">
                <p class="text-white ">Keuntungan menggunakan Syafaat dalam pendirian badan usaha yang Anda inginkan</p>
                <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                    <li>Efisien dan hemat biaya</li>
                    <li>Proses mudah</li>
                    <li>Kebutuhan bisa disesuaikan</li>
                    <li data-tooltip-target="tooltip-no-arrow"><u>Konsultasi pada ahlinya</u></li>
                    <div id="tooltip-no-arrow" role="tooltip" class="box-border border-4 h-auto w-40 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <p class="">
                            Pengerjaan dan proses pengisian LKPM bisa diinfokan sambil dibimbing konsultan kami.
                        </p>
                    </div>

                    <li data-tooltip-target="tooltip-no-arrow1"><u>Fleksibel</u></li>
                    <div id="tooltip-no-arrow1" role="tooltip" class="box-border border-4 h-auto w-40 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <p class="">
                            Waktu berkonsultasi fleksible jika Anda memilih paket Panduan dan Konsultasi LKPM dan In House Training.
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
            <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-yellow-700 mb-4">
                FAQ Seputar Layanan LKPM
            </h1>
            <p class="text-base leading-relaxed xl:w-1/1 lg:w-3/4 mx-auto">
                Pertanyaan yang sering ditanyakan terkait LKPM.
            </p>
        </div>

        <div class=" lg:w-1/1 px-4 py-2">
            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Apakah yang dimaksud dengan LKPM?
                </summary>
                <span class="px-4 py-2">
                    LKPM merupakan Laporan mengenai perkembangan realisasi Penanaman Modal dan permasalahan yang dihadapi Pelaku Usaha yang wajib dibuat dan disampaikan secara berkala.
                </span>
            </details>

            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Kapan kewajiban LKPM disampaikan?
                </summary>
                <span class="px-4 py-2">
                    Bagi Pelaku Usaha kecil setiap 6 bulan dalam 1 tahun laporan. Laporan semester I disampaikan paling lambat tanggal 10 bulan Juli tahun yang bersangkutan dan laporan semeseter II disampaikan paling lambat tanggal 10 bulan Januari tahun berikutnya. Sedangkan bagi Pelaku Usaha menengah dan besar, penyampaian LKPM dilaksanakan setiap 3 bulan (triwulan). Laporan triwulan I disampaikan paling lambat tanggal 10 bulan April tahun yang bersangkutan, laporan triwulan II disampaikan paling lambat tanggal 10 bulan Juli tahun yang bersangkutan, laporan triwulan III disampaikan paling lambat tanggal 10 bulan Oktober tahun yang bersangkutan, dan laporan triwulan IV disampaikan paling lambat tanggal 10 bulan Januari tahun berikutnya.
                </span>
            </details>

            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Siapakah yang wajib melakukan pelaporan LKPM?
                </summary>
                <span class="px-4 py-2">
                    LKPM wajib disampaikan oleh pelaku usaha kecil, menengah, dan besar.
                </span>
            </details>

            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Bagaimana cara penyampaian LKPM?
                </summary>
                <span class="px-4 py-2">
                    Penyampaian LKPM dilakukan secara daring melalui Sistem OSS.
                </span>
            </details>

        </div>
    </div>
    </div>
</section>


































@endsection('content')