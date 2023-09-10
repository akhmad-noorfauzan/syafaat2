@extends('layout.homelayout')
@section('content')
@type {import('tailwindcss').Config}



<section class="pt-24 w-full h-screen bg-fixed bg-cover bg-top bg-no-repeat bg-[url('/public/img/bgcv.jpg')]  bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-yellow-500 md:text-5xl lg:text-6xl">Paket Pendirian CV
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Solusi lengkap pendirian CV di Indonesia. Termasuk dokumen legalitas, penggunaan alamat Virtual Office, dan pembukaan rekening perusahaan. Gratis konsultasi.</p>
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
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-yellow-500 ">Pilih Paket Pendirian CV yang Sesuai dengan Kebutuhan Anda</h1>
                <div class="h-1 w-20 bg-gray-100 rounded"></div>
            </div>
            <!-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-400 text-opacity-90">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p> -->
        </div>
        <div class="flex flex-wrap -m-4 ">
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Easy Basic</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 5 juta</h2>
                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    Akta Notaris
                                </li>
                            </ul>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-close">
                                <li>Nomor Induk Berusaha (NIB)</li>
                                <li>Virtual Office</li>
                            </ul>
                            <br>
                            <p>Estimasi waktu pengerjaan:
                                10 hari kerja</p></br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/721x401" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Easy Deluxe</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 7 juta</h2>
                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    Berlaku untuk seluruh Indonesia
                                </li>
                                <li>Nomor Induk Berusaha (NIB)</li>
                            </ul>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-close">
                                <li>Virtual Office</li>
                                <li>Kartu NPWP perusahaan</li>
                            </ul>
                            <br>
                            <p>Estimasi waktu pengerjaan:
                                10 hari kerja</p></br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/722x402" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Easy Premium</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 8,5 juta</h2>
                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    CV Wilayah Kalimantan Selatan
                                </li>
                                <li>
                                    Aktivasi E-Fin
                                </li>
                                <li>Kartu NPWP perusahaan</li>
                                <li>Nomor Induk Berusaha (NIB)</li>
                                <li>Virtual Office dan Meeting Room selama 1 Tahun</li>
                            </ul>
                            <br>
                            <p>Estimasi waktu pengerjaan:
                                10 hari kerja</p></br>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Easy Premium Plus </h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 11,7 juta</h2>

                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    CV Wilayah Kalimantan Selatan
                                </li>
                                <li>
                                    Aktivasi E-Fin
                                </li>
                                <li>Kartu NPWP perusahaan</li>
                                <li>Nomor Induk Berusaha (NIB)</li>
                                <li>Virtual Office dan Meeting Room selama 1 Tahun</li>
                                <li>Pelaporan LKPM 1 periode</li>
                            </ul>
                            <br>
                            <p>Estimasi waktu pengerjaan:
                                10 hari kerja</p></br>
                        </div>

                    </div>
                </a>
            </div>

            <div class="xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Easy Express</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 13,5 Juta</h2>
                        <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                            <li>
                                CV Wilayah Kalimantan Selatan
                            </li>
                            <li>
                                Aktivasi E-Fin
                            </li>
                            <li>Kartu NPWP perusahaan</li>
                            <li>Nomor Induk Berusaha (NIB)</li>
                            <li>Virtual Office dan Meeting Room selama 1 Tahun</li>
                        </ul>
                        <br>
                        <p>Estimasi waktu pengerjaan:
                            2-5 hari kerja</p></br>

                    </div>
            </div>
            </a>

            <div class="xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Penutupan CV</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Tanya Via LiveChat</h2>
                        <p class="leading-relaxed text-base">Konsultasikan kebutuhan penutupan pendirian usaha Anda dengan kami!</p>
                    </div>
            </div>
            </a>

            <div class="xl:w-1/4 md:w-1/2 p-4">
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

            <div class="xl:w-1/4 md:w-1/2 p-20 pt-26 ">
                <p class="text-white ">Yang akan Anda dapatkan dalam paket pendirian CV:</p>
                <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                    <li>Akta Pendirian</li>
                    <li>Surat Keterangan Terdaftar</li>
                    <li data-tooltip-target="tooltip-no-arrow"><u>NPWP Perusahaan</u></li>
                    <div id="tooltip-no-arrow" role="tooltip" class="box-border border-4 h-auto w-40 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <p class="">
                            Hanya untuk perusahaan yang berdomisili di Kalimantan Selatan. Untuk perusahaan di luar Wilyah pengajuan dilakukan pelanggan di KPP setempat. Syafaat memandu proses pengisian dan pengajuan form
                        </p>
                    </div>
                    <li data-tooltip-target="tooltip-no-arrow2"><u>Tambahan BNRI (Wajib)</u></li>
                    <div id="tooltip-no-arrow2" role="tooltip" class="box-border border-4 h-auto w-40 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <p class="">
                            Setiap akta pendirian CV wajib diumumkan di tambahan Berita Negara Republik Indonesia (BNRI). Tanpa itu pendirian CV belum sah dan belum mengikat pihak ketiga
                        </p>
                    </div>
                    <li data-tooltip-target="tooltip-no-arrow3"><u>Pembukaan Rekening Perusahaan</u></li>
                    <div id="tooltip-no-arrow3" role="tooltip" class="box-border border-4 h-auto w-40 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <p class="">
                            Anda akan mendapatkan rekening bank atas nama perusahaan Anda
                        </p>
                    </div>
                    <li data-tooltip-target="tooltip-no-arrow4"><u>Virtual Office 1 Tahun</u></li>
                    <div id="tooltip-no-arrow4" role="tooltip" class="box-border border-4 h-auto w-40 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <p class="">
                            Termasuk ruang meeting, nomor telepon bersama, dan alamat surat menyurat.Hubungi sales untuk informasi lebih lengkap.
                        </p>
                    </div>
                    <li data-tooltip-target="tooltip-no-arrow5"><u>Sertifikat Standar</u></li>
                    <div id="tooltip-no-arrow5" role="tooltip" class="box-border border-4 h-auto w-40 absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                        <p class="">
                            Sertifikat untuk resiko menengah rendah
                        </p>
                    </div>
                    <p class="pt-20 leading-relaxed text-base">*Harga di atas belum termasuk PPN 11%</p>
                </ul>
            </div>
        </div>
</section>


<section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
        <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
            <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.6226101883094!2d114.83719257483622!3d-3.4416221965328577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de6819545051885%3A0xe682467a2debcdc!2sAutumn%20Leaves!5e0!3m2!1sid!2sid!4v1694289497079!5m2!1sid!2sid" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">Lokasi Kami</h2>
                    <p class="mt-1">Jl. Garuda No.77, Loktabat Sel., Kec. Banjarbaru Selatan, Kota Banjar Baru, Kalimantan Selatan 70714</p>
                </div>
                <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                    <a class="text-indigo-500 leading-relaxed">example@email.com</a>
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                    <p class="leading-relaxed">123-456-7890</p>
                </div>
            </div>
        </div>

        <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
            <h1 class="title-font sm:text-3xl text-3xl mb-0 font-medium text-gray-800">Fasilitas
            </h1>
            <h1 class="title-font sm:text-4xl text-3xl mb-0 font-medium text-yellow-400"> Virtual Office</h1>
            <p>Khusus untuk klien Syafaat yang menggunakan layanan Paket Premium untuk mendirikan Kantor di Wilayah Kalimantan Selatan, kami menyediakan fasilitas berupa virtual office selama 1 tahun yang beralamat di kantor Syafaat. Dengan menggunakan layanan virtual office Anda akan mendapatkan:</p>
            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                <li>
                    Alamat surat menyurat
                </li>
                <li>
                    Nomor telepon bersama
                </li>
                <li>
                    Ruang meeting
                </li>
            </ul>
        </div>
    </div>
    </div>
</section>




    <section class= "flex:wrap mx-28 text-gray-700">
        <div class="container py-24 ">
            <div class="text-center mb-10">
                <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">
                    FAQ Pendirian CV
                </h1>
                <p class="text-base leading-relaxed xl:w-1/1 lg:w-3/4 mx-auto">
                    Pertanyaan yang sering ditanyakan oleh calon pendiri CV terkait paket pendirian CV.
                </p>
            </div>

            <div class=" lg:w-1/1 px-4 py-2">
                <details class="mb-4">
                    <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                        Apa saja dokumen persyaratan untuk mendirikan CV?
                    </summary>

                    <span class="px-4 py-2">
                        Para pendiri dan pengurus perusahaan:
                        <br>
                        1. KTP (e-KTP)
                        2. Kartu Keluarga
                        3. NPWP
                        </br>
                        Note:
                        Mohon dipastikan alamat yang tercantum pada KTP dan NPWP sama dan valid
                        NPWP para pendiri dan pengurus sudah menggunakan format terupdate (terdapat NIK pada NPWP)
                        Tidak memiliki laporan pajak terhutang
                    </span>
                </details>
                <details class="mb-4">
                    <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                        Apakah saya bisa menggunakan rumah tempat tinggal sebagai alamat sekaligus kantor saya? </summary>

                    <span class="px-4 py-2">
                        Untuk wilayah DKI Jakarta, alamat yang digunakan CV harus sesuai dengan ketentuan zonasi yang ada dalam Perda DKI Jakarta No. 1/2014. Di aturan tersebut, domisili CV tidak diperkenankan berada di kawasan pemukiman. Sedangkan untuk daerah lain, pastikan terlebih dahulu melalui DPMPTSP setempat mengenai bisa atau tidaknya menggunakan alamat rumah sebagai domisili CV
                    </span>
                </details>
                <details class="mb-4">
                    <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                        Apa saja yang harus saya perhatikan dalam proses pendirian CV ?
                    </summary>

                    <span class="px-4 py-2">
                        Salah satu hal yang paling penting dalam proses pendirian CV kamu wajib memperhatikan kode Klasifikasi Baku Lapangan Usaha Indonesia (KBLI) yang digunakan pada maksud dan tujuan yang ada dalam akta pendirian CV. Hal ini dikarenakan Izin usaha yang dibutuhkan suatu perusahaan tergantung dari kode KBLI yang digunakan. Oleh karena itu, salah satu dampak yang muncul ketika kamu tidak menggunakan kode KBLI yang tepat adalah kamu akan diarahkan ke izin usaha yang sebenarnya tidak sesuai dengan kebutuhan perusahaan
                    </span>
                </details>
            </div>
        </div>
</div>
</section>





@endsection('content')