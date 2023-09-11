@extends('layout.homelayout')
@section('content')
@type {import('tailwindcss').Config}


<section class="pt-24 w-full h-screen bg-fixed bg-cover bg-top bg-no-repeat bg-[url('/public/img/bgoss.jpg')]  bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-yellow-500 md:text-5xl lg:text-6xl">Layanan OSS RBA
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Pastikan legalitas perusahaan Anda sesuai dengan aturan terbaru. Syafaat siap melayani sesuai kebutuhan Anda.</p>
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
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-yellow-500 ">Pastikan Legalitas Perusahaan Anda Sesuai dengan Peraturan Terbaru</h1>
                <div class="h-1 w-20 bg-gray-100 rounded"></div>
            </div>
            <!-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-400 text-opacity-90">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p> -->
        </div>
        <div class="flex flex-wrap -m-4 ">
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Registrasi / Migrasi OSS RBA untuk UMK</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 3,5 juta</h2>
                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    Hak Akses OSS RBA
                                </li>
                                <li>Nomor Induk Berusaha (NIB)</li>
                                <li>Surat Pernyataan Mandiri</li>
                                <li>Maksimal 5 KBLI dalam 1 lokasi</li>
                                <li>Tidak termasuk pengurusan Sertifikat Standar (risiko MT) dan Izin (risiko Tinggi)</li>
                            </ul>
                            <br>
                            <p>Estimasi waktu pengerjaan:
                                5 hari kerja</p></br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/721x401" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Registrasi / Migrasi OSS RBA untuk NON UMK
                        </h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 4,5 juta</h2>
                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    Hak Akses OSS RBA
                                </li>
                                <li>Nomor Induk Berusaha (NIB)</li>
                                <li> Surat Pernyataan Mandiri
                                </li>
                                <li>PKKPR/KKPR/KKKPR 1 lokasi (verifikasi BKPM)</li>
                                <li>Maksimal 5 KBLI dalam 1 lokasi</li>
                                <li>Tidak termasuk pengurusan Sertifikat Standar (risiko MT) dan Izin (risiko Tinggi)</li>
                                <br>
                                <p>Estimasi waktu pengerjaan:
                                    7 hari kerja</p></br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/722x402" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Easy Premium</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 7,8 juta</h2>
                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    Penyesuaian KBLI terbaru dan Registrasi OSS RBA
                                </li>
                                <li>
                                    Akta Perubahan
                                </li>
                                <li>Nomor Induk Berusaha (NIB)</li>
                                <li>Surat Pernyataan Mandiri</li>

                            </ul>
                            <br>
                            <p>Estimasi waktu pengerjaan:
                                14 hari kerja</p></br>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Konsultasi OSS RBA
                        </h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 3,3 juta</h2>

                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    Secara privat dan ekslusif
                                </li>
                                <li>
                                    Dapat mengonsultasikan permasalahan terkait OSS RBA
                                </li>
                                <li>1 Perusahaan maksimal 2 orang</li>
                                <li>1 sesi konsultasi maksimal 120 menit</li>
                            </ul>
                        </div>

                    </div>
                </a>
            </div>

            <div class="xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Verifikasi Sertifikat Standar dan Izin
                        </h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 13,5 Juta</h2>
                        <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                            <li>
                                Pengecekan KBLI
                            </li>
                            <li>
                                Sertifikat Standar Terverifikasi
                            </li>
                            <li>PB-UMKU (*)</li>
                        </ul>
                        <br>
                        <p>Estimasi waktu pengerjaan:
                            3-6 Bulan hari kerja</p>
                        <p>*Tergantung KBLI</p></br>


                    </div>
            </div>
            </a>

            <div class="xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">PKKPR / KKKPR</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 4 juta</h2>
                        <p class="leading-relaxed text-base">PKKPR (Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang) dan KKKPR (Konfirmasi Kesesuaian Kegiatan Pemanfaatan Ruang) adalah izin lokasi bagi perusahaan berskala Non-UMK. Hubungi kami jika Anda membutuhkan bantuan dalam pengurusan PKKPR dan KKKPR! </p>
                    </div>
            </div>
            </a>

            <div class="xl:w-1/4 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">In House Training OSS dan LKPM</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Tanya Via LiveChat</h2>
                        <p class="leading-relaxed text-base">Pelatihan OSS dan LKPM secara privat. Membahas secara lengkap mengenai perizinan terbaru di Indonesia dan OSS dan LKPM dimana materi, narasumber dan pelaksanaannya dapat di sesuaikan dengan kebutuhan perusahaan.</p>
                    </div>
            </div>
            </a>

            <div class="xl:w-1/4 md:w-1/2 p-20 pt-26 ">
                <p class="text-white ">Keuntungan menggunakan Syafaat dalam Layanan OSS RBA:</p>
                <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                    <li>Konsultasi pada ahlinya</li>
                    <li>Fleksibel untuk metode pelaksanaan</li>
                    <li>Kebutuhan bisa disesuaikan</li>
                    <p class="pt-20 leading-relaxed text-base">*Harga di atas belum termasuk PPN 11%</p>
                </ul>
            </div>
        </div>
</section>


<section class="flex:wrap mx-28 text-gray-900">
    <div class="container py-24 ">
        <div class="text-center mb-10">
            <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-yellow-500 mb-4">
                FAQ Seputar Layanan OSS RBA
            </h1>
            <p class="text-base text-white leading-relaxed xl:w-1/1 lg:w-3/4 mx-auto">
                Pertanyaan yang sering ditanyakan terkait Layanan OSS RBA
            </p>
        </div>

        <div class=" lg:w-1/1 px-4 py-2">
            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Apa saja dokumen persyaratan untuk melakukan Penyesuaian Anggaran Dasar dan OSS RBA?
                </summary>

                <span class="text-white px-4 py-2">
                    <ul>
                        <li>1. Persetujuan Para Pendiri dan Pengurus (draft kami siapkan)</li>
                        <li>2. Akta & SK Kemenkumham Pendirian dan seluruh perubahannya</li>
                        <li>3. NPWP PT</li>
                        <li>4. KTP dan NPWP seluruh pemegang saham dan pengurus</li>
                    </ul>
                    Note:
                    <ul class="text-white list-image-circle pl-8">
                        <li>Mohon dipastikan alamat yang tercantum pada KTP dan NPWP sama dan valid</li>
                        <li>NPWP para pendiri dan pengurus sudah menggunakan format terupdate (terdapat NIK pada NPWP)</li>
                        <li>Tidak memiliki laporan pajak terhutang</li>
                    </ul>
                </span>
            </details>
            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Bagaimana penyesuaian Anggaran Dasar dilakukan?
                </summary>
                <span class="text-white px-4 py-2">
                    Penyesuaian dilakukan dengan mengubah isi Anggaran Dasar PT yang memuat bidang usaha sebagaimana tercantum dalam Maksud dan Tujuan agar sesuai dengan Klasifikasi Baku Lapangan Usaha Indonesia (KBLI) terbaru
                </span>
            </details>
            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Mengapa Maksud dan Tujuan harus sesuai dengan KBLI terbaru?
                </summary>

                <span class="text-white px-4 py-2">
                    Salah satu yang wajib diisi oleh pelaku usaha saat melakukan registrasi ke dalam sistem OSS RBA adalah data mengenai bidang usaha yang diatur dalam KBLI. Saat ini sistem OSS RBA menggunakan KBLI 2020 yang mengacu pada Peraturan Kepala BPS 02/2020. Sehingga bagi PT yang masih menggunakan KBLI versi lama pada Maksud dan Tujuan wajib menyesuaikan Anggaran dasarnya terlebih dahulu agar proses registrasi OSS RBA dapat dilakukan. </span>
            </details>

            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Apa saja dokumen persyaratan untuk melakukan Registrasi OSS RBA?
                </summary>
                <span class="text-white px-4 py-2">
                    Para pendiri dan pengurus perusahaan:
                    <ul>
                        <li> 1. Untuk PT/Yayasan AKTA & SK Kemenkumham bidang usaha yg tercantum di dalam akta pada sistem AHU sudah menggunakan KBLI 2017
                        </li>
                        <li> 2. Untuk CV sudah teregistrasi dan memiliki SKT/SKPP dari Sistem Administrasi Badan Usaha (SABU) Kemenkumham
                        </li>
                        <li> 3. Belum pernah melakukan registrasi ke dalam sistem OSS RBA
                        </li>
                        <li> 4. NPWP Perusahaan
                        </li>
                        <li> 5. KTP dan NPWP Penanggung Jawab Perusahaan
                        </li>
                    </ul>
                </span>
            </details>
            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Bila saya tidak atau belum memiliki persyaratan tersebut apa proses registrasi OSS RBA masih bisa dijalankan?
                </summary>

                <span class="text-white px-4 py-2">
                    Kamu harus memiliki persyaratan tersebut. Atau bila dokumennya sudah ada tapi sudah tidak berlaku atau bukan dalam format terbaru maka kamu harus datang ke kantor pemerintah yang berwenang. Misalnya untuk NPWP, kamu bisa datang ke Kantor Pelayanan Pajak (KPP) setempat. Proses registrasi OSS RBA hanya bisa dilakukan apabila dokumen persyaratan dinyatakan benar dan lengkap.
            </details>
            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Apa saja yang saya dapatkan setelah melakukan registrasi OSS RBA?
                </summary>

                <span class="text-white px-4 py-2">
                    Kamu akan mendapatkan Nomor Induk Berusaha (NIB) sebagai identitas untuk Perusahaan dan Surat Izin Usaha Perdagangan (SIUP) atau izin usaha lain yang sesuai dengan kegiatan usaha kamu. Khusus untuk NIB dan SIUP, kedua dokumen legalitas tersebut berlaku selama Perusahaan melakukan kegiatan usahanya. Dengan begitu kamu tidak perlu lagi memperpanjang masa berlakunya.
            </details>

        </div>
    </div>
    </div>
</section>
































@endsection('content')