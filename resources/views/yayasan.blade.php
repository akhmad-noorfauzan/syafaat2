@extends('layout.homelayout')
@section('content')
@type {import('tailwindcss').Config}


<section class="pt-24 w-full h-screen bg-fixed bg-cover bg-top bg-no-repeat bg-[url('/public/img/bgyysn.jpg')]  bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-yellow-500 md:text-5xl lg:text-6xl">Pendirian Yayasan atau Badan Usaha Lainnya
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Solusi pasti pendirian Yayasan dan Badan Usaha Lainnya di Kalimantan Selatan. Gratis konsultasi.</p>
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
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-yellow-500 ">Penuhi Kewajiban dengan Mendaftarkan Yayasan dan Badan Usaha Lainnya yang Anda Inginkan</h1>
                <div class="h-1 w-20 bg-gray-100 rounded"></div>
            </div>
            <!-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-400 text-opacity-90">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p> -->
        </div>
        <div class="flex flex-wrap -m-4 ">
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Pendirian Yayasan</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 12 juta</h2>
                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    Akta Pendirian
                                </li>
                                <li>SK Kemenkumham</li>
                                <li>Nomor Induk Berusaha (NIB)</li>
                                <li>Tanda Daftar Yayasan (TDY)</li>
                                <li>Surat Keterangan Domisili Yayasan (SKDY)</li>
                                <li>Nomor Pokok Wajib Pajak (NPWP) Yayasan</li>
                            </ul>
                            <br>
                            <p>Estimasi waktu pengerjaan:
                                45 hari kerja</p></br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/721x401" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Pendirian Perkumpulan
                        </h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 12 juta</h2>
                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    Akta Pendirian
                                </li>
                                <li>SK Kemenkumham</li>
                                <li>Nomor Induk Berusaha (NIB)
                                </li>
                                <li>Tanda Daftar Perkumpulan (TDP)</li>
                                <li>Surat Keterangan Domisili Perkumpulan (SKDP)</li>
                                <li>Nomor Pokok Wajib Pajak (NPWP) Perkumpulan</li>
                                <br>
                                <p>Estimasi waktu pengerjaan:
                                    45 hari kerja</p></br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/722x402" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Pendirian Koperasi</h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 15 juta</h2>
                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    Akta Pendirian
                                </li>
                                <li>
                                    SK Kemenkumham
                                </li>
                                <li>Nomor Induk Berusaha (NIB)</li>
                                <li>Nomor Induk Koperasi (NIK)</li>
                                <li>Nomor Pokok Wajib Pajak (NPWP) Koperasi</li>
                            </ul>
                            <br>
                            <p>Estimasi waktu pengerjaan:
                                45 hari kerja</p></br>
                        </div>
                    </div>
                </a>
            </div>
            <div class=" xl:w-1/3 md:w-1/2 p-4">
                <a href="/">
                    <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
                        <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
                        <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Pendirian Firma
                        </h3>
                        <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 5 juta</h2>

                        <div>
                            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
                                <li>
                                    Akta Pendirian
                                </li>
                                <li>
                                    SKT Kemenkumham
                                </li>
                                <li>Nomor Induk Berusaha (NIB)</li>
                            </ul>
                            <br>
                            <p>Estimasi waktu pengerjaan:
                                10 hari kerja</p></br>
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
                    <li>Ditangani oleh ahlinya</li>
                    <li>Jaminan layanan sampai selesai</li>
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
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-blue-500">Mengapa
                <div class="text-white font-bold ">Yayasan atau Badan Usaha Lain saya perlu didaftarkan secara legal?
            </h1>
            <p class="text-white mb-8 leading-relaxed">Oleh karena yayasan dan badan usaha lainnya tetap dapat dibebankan PPh, maka yayasan dan badan usaha lainnya harus memiliki Nomor Pokok Wajib Pajak (“NPWP”). Artikel Syarat Pendaftaran Nomor Pokok Wajib Pajak di laman Direktorat Jenderal Pajak juga menegaskan bahwa badan nonprofit, seperti yayasan, juga wajib memiliki NPWP.</p>
        </div>
    </div>
    </div>
</section>

<section class="flex:wrap mx-28 text-gray-900">
    <div class="container py-24 ">
        <div class="text-center mb-10">
            <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-yellow-700 mb-4">
                FAQ Pendirian Yayasan atau Badan Usaha Lainnya
            </h1>
            <p class="text-base text-white leading-relaxed xl:w-1/1 lg:w-3/4 mx-auto">
                Pertanyaan yang sering ditanyakan oleh pemilik Yayasan atau Badan Usaha Lainnya terkait pendaftaran.
            </p>
        </div>

        <div class=" lg:w-1/1 px-4 py-2">
            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Apa Saja Dokumen yang Dibutuhkan Untuk Mendirikan Badan Usaha?
                </summary>

                <span class="text-white px-4 py-2">
                    <ul>
                        <p>Para pendiri dan Pengurus Badan Usaha:</p>
                        <li>1. KTP (e-KTP)</li>
                        <li>2. Kartu Keluarga</li>
                        <li>3. NPWP</li>
                        Note:
                        <ul class="list-image-circle pl-8">
                            <li>Mohon dipastikan alamat yang tercantum pada KTP dan NPWP sama dan valid</li>
                            <li>NPWP para pendiri dan pengurus sudah menggunakan format terupdate (terdapat NIK pada NPWP)</li>
                            <li>Tidak memiliki laporan pajak terhutang</li>
                        </ul>
                        <li>4. Khusus pendirian Koperasi dan Yayasan, lampirkan Akta Pendirian dan Perubahannya (jika ada), SK Kemenkumham, serta NPWP apabila pendirinya badan hukum</li>
                    </ul>

                </span>
            </details>
            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Apakah Domisili Badan Usaha Harus Seusai dengan Rencana Detail Tata Ruang?
                </summary>
                <span class="text-white px-4 py-2">
                    Sejak berlakunya UU Cipta Kerja, setiap kegiatan pemanfaatan ruang harus sesuai dengan ketentuan RDTR masing-masing daerah, baik untuk kegiatan berusaha maupun kegiatan non berusaha. Jika ingin mendirikan Badan Usaha di Jakarta, sebaiknya melihat dahulu Peraturan Gubernur No. 31/2022 Tentang Rencana Detail Tata Ruang Wilayah Perencanaan Provinsi Daerah Khusus Ibukota Jakarta. Tidak hanya menyesuaikan dengan pelaksanaan OSS RBA, Pergub ini memberikan kemudahan bagi industri mikro untuk berlokasi di kawasan perumahan. Sedangkan industri kecil dapat berlokasi di kawasan perumahan dengan syarat tertentu.
                </span>
            </details>
            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Apa saja yang harus saya perhatikan dalam proses pendirian Badan Usaha?

                </summary>

                <span class="text-white px-4 py-2">
                    Salah satu hal yang paling penting dalam proses pendirian badan usaha kamu wajib memperhatikan kode Klasifikasi Baku Lapangan Usaha Indonesia (KBLI) yang digunakan pada maksud dan tujuan yang ada dalam akta pendirian CV. Hal ini dikarenakan Izin usaha yang dibutuhkan suatu perusahaan tergantung dari kode KBLI yang digunakan. Oleh karena itu, salah satu dampak yang muncul ketika kamu tidak menggunakan kode KBLI yang tepat adalah kamu akan diarahkan ke izin usaha yang sebenarnya tidak sesuai dengan kebutuhan badan usaha.</span>
            </details>

        </div>
    </div>
    </div>
</section>


































@endsection('content')