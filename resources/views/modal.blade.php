@extends('layout.homelayout')
@section('content')
@type {import('tailwindcss').Config}


<section class="pt-24 w-full h-screen bg-fixed bg-cover bg-top bg-no-repeat bg-[url('/public/img/bgasst.jpg')]  bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-yellow-500 md:text-5xl lg:text-6xl">Asisten Investasi Andalan Anda di Indonesia
        </h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Perencanaan yang cermat dan pemahaman terhadap peraturan daerah adalah hal yang utama ketika Anda hendak melakukan investasi di Indonesia. Oleh karena itu, kami di sini untuk Anda!</p>
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

<section class="text-gray-600 body-font mb-10">
    <div class="container px-auto py-24 mx-auto">
        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
            </div>
            <div class="flex-grow sm:text-left text-left mt-6 sm:mt-0">
                <h2 class="text-yellow-500 text-2xl title-font font-bold mb-2">
                    Membantu Anda Memahami Regulasi Indonesia
                </h2>
                <p class="text-white text-left leading-relaxed text-base">Syafaat melakukan penelitian dan memahami peraturan bisnis Indonesia, perekonomian domestik, dan peluang investasi. Kami membantu Anda mempersiapkan diri dengan baik terhadap perbedaan peraturan dan praktik bisnis yang dinamis di Indonesia.</p>
            </div>
        </div>

        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                <p class="text-yellow-500 text-right text-2xl title-font font-bold mb-2">Berikan Nasihat Profesional Berkelanjutan</p>
                <p class="text-white leading-relaxed text-right text-base">Di Syafaat, Anda dapat berkonsultasi dengan pakar lokal dan profesional hukum yang sangat berpengalaman dalam lanskap regulasi investasi Indonesia. Kami memandu Anda melalui persyaratan hukum dan peraturan, serta potensi risikonya.</p>
            </div>
            <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
            </div>
        </div>

        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
            </div>
            <div class="flex-grow sm:text-left text-left mt-6 sm:mt-0">
                <h2 class="text-yellow-500 text-2xl title-font text-left font-bold mb-2">
                    Terus Update Peraturan Investasi Indonesia
                </h2>
                <p class="text-white text-left leading-relaxed text-base">Syafaat terus memberi Anda informasi tentang peraturan penanaman modal asing terkini di Indonesia. Memahami peraturan saat ini dapat membantu Anda mengambil keputusan apa pun untuk bisnis Anda.</p>
            </div>
        </div>
        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                <p class="text-yellow-500 text-right text-2xl title-font font-bold  mb-2">Menjadi Pembantu Tepercaya Anda dalam Melakukan Investasi</p>
                <p class="text-white leading-relaxed text-right text-base"> Syafaat, membantu Anda mulai dari perizinan investasi hingga pendirian perseroan terbatas. Kami juga memetakan risiko sistem perizinan untuk Anda dan menghindari izin dengan risiko tinggi yang memerlukan proses panjang.</p>
            </div>
            <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
            </div>
        </div>
        <button class="flex mx-auto mt-20 text-white bg-yellow-500 border-0 py-2 px-8 focus:outline-none hover:bg-yellow-800 rounded text-lg">Hubungi kami</button>
    </div>
</section>


<section class="pb-10">
    <div class="bg-black container mx-auto px-4 sm:px-6 lg:px-8">

        <div class="bg-gray-600  rounded-xl mx-auto max-w-screen-lg flex flex-wrap">
            <p class="text-4xl text-yellow-500 mx-auto px-2 pt-6 text-center text-bold ">Langkah Mulus untuk Berinvestasi di Indonesia dengan Syafaat</p>
            <p class="text-lg text-white text-center mx-auto px-2 pt-2  mb-2 text-bold ">Jangan biarkan masalah peraturan apa pun membuat Anda khawatir.</p>
            <ul class="relative m-10 w-full max-w-lg mx-auto list-none overflow-hidden p-0 transition-[height] duration-200 ease-in-out" data-te-stepper-init data-te-stepper-type="vertical">
                <!--First item-->
                <li data-te-stepper-step-ref class="relative h-fit after:absolute after:left-[2.45rem] after:top-[3.6rem] after:mt-px after:h-[calc(100%-2.45rem)] after:w-px after:bg-yellow-400 after:content-[''] dark:after:bg-black">
                    <div data-te-stepper-head-ref class="flex cursor-pointer items-center p-6 leading-[1.3rem] no-underline after:bg-[#767eed] after:content-[''] hover:bg-gray-300 focus:outline-none dark:after:bg-gray-800 dark:hover:bg-gray-800">
                        <span data-te-stepper-head-icon-ref class="mr-3 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-gray-800 text-sm font-medium text-yellow-500">
                            1
                        </span>
                        <span data-te-stepper-head-text-ref class="text-black after:absolute after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                            <p class="text-lg font-semibold text-yellow-500"> Diskusi</p>
                        </span>
                    </div>
                    <div data-te-stepper-content-ref class="text-yellow-500 transition-[height, margin-bottom, padding-top, padding-bottom] left-0 overflow-hidden pb-6 pl-[3.75rem] pr-6 duration-300 ease-in-out">
                        <p class="text-white font-bold text-xl">Diskusikan Kebutuhan Anda dengan Syafaat</p>
                        Berdasarkan kebutuhan Anda, tim kami akan memberikan panduan komprehensif untuk mempersiapkan pendirian perseroan terbatas swasta Anda. Siapa Takut. Syafaat telah membantu lebih dari 2.000 penanaman modal asing berbentuk perseroan terbatas swasta di Indonesia.
                    </div>
                </li>

                <!--Second item-->
                <li data-te-stepper-step-ref class="relative h-fit after:absolute after:left-[2.45rem] after:top-[3.6rem] after:mt-px after:h-[calc(100%-2.45rem)] after:w-px after:bg-yellow-400 after:content-[''] dark:after:bg-neutral-600">
                    <div data-te-stepper-head-ref class="flex cursor-pointer items-center p-6 leading-[1.3rem] no-underline after:bg-[#e0e0e0] after:content-[''] hover:bg-gray-300 focus:outline-none dark:after:bg-neutral-600 dark:hover:bg-[#3b3b3b]">
                        <span data-te-stepper-head-icon-ref class="mr-3 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-yellow-500">
                            2
                        </span>
                        <span data-te-stepper-head-text-ref class="text-black after:absolute after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                            <p class="text-lg font-semibold text-yellow-500"> Pengumpulan dokumen</p>
                        </span>
                    </div>
                    <div data-te-stepper-content-ref class="text-yellow-500 transition-[height, margin-bottom, padding-top, padding-bottom] left-0 overflow-hidden pb-6 pl-[3.75rem] pr-6 duration-300 ease-in-out">
                        <p class="text-white font-bold text-xl">Koleksi Berkas
                        </p>
                        Syafaat telah mengembangkan Formulir Syafaat yang telah diteliti sejak tahun 2015 dan terus diupdate sesuai peraturan terkini untuk memudahkan pengisian informasi pendirian PT Anda. Formulir Syafaat disiapkan secara akurat dan ringkas sehingga pengumpulan dokumen persyaratan seperti KTP, NPWP, dan informasi lainnya menjadi lebih mudah dan tidak terlewatkan. Estimasi waktu pengerjaan adalah 1 hari.
                    </div>
                </li>


                <li data-te-stepper-step-ref class="relative h-fit after:absolute after:left-[2.45rem] after:top-[3.6rem] after:mt-px after:h-[calc(100%-2.45rem)] after:w-px after:bg-yellow-400 after:content-[''] dark:after:bg-neutral-600">
                    <div data-te-stepper-head-ref class="flex cursor-pointer items-center p-6 leading-[1.3rem] no-underline after:bg-[#e0e0e0] after:content-[''] hover:bg-gray-300 focus:outline-none dark:after:bg-neutral-600 dark:hover:bg-[#3b3b3b]">
                        <span data-te-stepper-head-icon-ref class="mr-3 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-yellow-500">
                            3
                        </span>
                        <span data-te-stepper-head-text-ref class="text-black after:absolute after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                            <p class="text-lg font-semibold text-yellow-500"> Penyaringan nama bisnis</p>
                        </span>
                    </div>
                    <div data-te-stepper-content-ref class="text-yellow-500 transition-[height, margin-bottom, padding-top, padding-bottom] left-0 overflow-hidden pb-6 pl-[3.75rem] pr-6 duration-300 ease-in-out">
                        <p class="text-white font-bold text-xl">Pemeriksaan Nama Perusahaan</p>
                        Banyak pengusaha yang mengatakan bahwa memilih nama perusahaan ibarat memberi nama kepada seorang anak, penuh makna dan kesan. Segera ajukan nama PT yang Anda inginkan, kami akan segera cek ketersediaannya di Kementerian Hukum dan HAM dan segera klaim untuk Anda. Estimasi waktu pengerjaan adalah 1 hari.
                    </div>
                </li>

                <li data-te-stepper-step-ref class="relative h-fit after:absolute after:left-[2.45rem] after:top-[3.6rem] after:mt-px after:h-[calc(100%-2.45rem)] after:w-px after:bg-yellow-400 after:content-[''] dark:after:bg-neutral-600">
                    <div data-te-stepper-head-ref class="flex cursor-pointer items-center p-6 leading-[1.3rem] no-underline after:bg-[#e0e0e0] after:content-[''] hover:bg-gray-300 focus:outline-none dark:after:bg-neutral-600 dark:hover:bg-[#3b3b3b]">
                        <span data-te-stepper-head-icon-ref class="mr-3 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-yellow-500">
                            4
                        </span>
                        <span data-te-stepper-head-text-ref class="text-black after:absolute after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                            <p class="text-lg font-semibold text-yellow-500"> Penerbitan Akta Pendirian</p>
                        </span>
                    </div>
                    <div data-te-stepper-content-ref class="text-yellow-500 transition-[height, margin-bottom, padding-top, padding-bottom] left-0 overflow-hidden pb-6 pl-[3.75rem] pr-6 duration-300 ease-in-out">
                        <p class="text-white font-bold text-xl">Membuat akta pendirian dan keputusan menteri hukum dan hak asasi manusia</p>
                        Sebagai dokumen terpenting dalam pendirian PT, Akta dan Keputusan Kementerian Hukum dan Hak Asasi Manusia harus dipastikan akurat dan sah. Tim kami akan berkomunikasi secara intensif dengan Anda untuk mewujudkan penyusunan akta yang paling sesuai dengan keinginan Anda. Koordinasi yang baik antara Syafaat dan Notaris akan menjadikan proses pembuatan Akta dan Keputusan Kemenkumham menjadi sangat cepat. Segala pengurusan berkas, mulai dari pengiriman, pengambilan, hingga penandatanganan dokumen, akan dilayani secara 'pick-up', sehingga Anda hanya perlu duduk manis di rumah. Perkiraan waktu penyelesaian adalah 1 hingga 3 hari.
                    </div>
                </li>

                <li data-te-stepper-step-ref class="relative h-fit after:absolute after:left-[2.45rem] after:top-[3.6rem] after:mt-px after:h-[calc(100%-2.45rem)] after:w-px after:bg-yellow-400 after:content-[''] dark:after:bg-neutral-600">
                    <div data-te-stepper-head-ref class="flex cursor-pointer items-center p-6 leading-[1.3rem] no-underline after:bg-[#e0e0e0] after:content-[''] hover:bg-gray-300 focus:outline-none dark:after:bg-neutral-600 dark:hover:bg-[#3b3b3b]">
                        <span data-te-stepper-head-icon-ref class="mr-3 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-yellow-500">
                            5
                        </span>
                        <span data-te-stepper-head-text-ref class="text-black after:absolute after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                            <p class="text-lg font-semibold text-yellow-500"> Pendaftaran nomor pajak perusahaan</p>
                        </span>
                    </div>
                    <div data-te-stepper-content-ref class="text-yellow-500 transition-[height, margin-bottom, padding-top, padding-bottom] left-0 overflow-hidden pb-6 pl-[3.75rem] pr-6 duration-300 ease-in-out">
                        <p class="text-white font-bold text-xl">Taxpayer Registration Number (NPWP)</p>
                        NPWP perusahaan sangat penting untuk dimiliki sejak perusahaan Anda didirikan. NPWP merupakan dokumen penting untuk legalitas usaha Anda yang akan digunakan untuk kewajiban perpajakan, penggajian karyawan, hingga pengembangan usaha. Kami memiliki tim yang terorganisir sehingga proses NPWP dapat selesai dengan cepat. Anda cukup duduk manis di rumah tanpa perlu ke Kantor Pelayanan Pajak. Kartu NPWP dan SKT (Surat Tanda Pendaftaran) yang telah diisi lengkap akan dikirimkan ke alamat Anda. Perkiraan waktu penyelesaian adalah 1 hingga 3 hari.
                    </div>
                </li>


                <li data-te-stepper-step-ref class="relative h-fit after:absolute after:left-[2.45rem] after:top-[3.6rem] after:mt-px after:h-[calc(100%-2.45rem)] after:w-px after:bg-yellow-400 after:content-[''] dark:after:bg-neutral-600">
                    <div data-te-stepper-head-ref class="flex cursor-pointer items-center p-6 leading-[1.3rem] no-underline after:bg-[#e0e0e0] after:content-[''] hover:bg-gray-300 focus:outline-none dark:after:bg-neutral-600 dark:hover:bg-[#3b3b3b]">
                        <span data-te-stepper-head-icon-ref class="mr-3 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-yellow-500">
                            6
                        </span>
                        <span data-te-stepper-head-text-ref class="text-black after:absolute after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                            <p class="text-lg font-semibold text-yellow-500"> Perolehan Nomor Identifikasi Bisnis</p>
                        </span>
                    </div>
                    <div data-te-stepper-content-ref class="text-yellow-500 transition-[height, margin-bottom, padding-top, padding-bottom] left-0 overflow-hidden pb-6 pl-[3.75rem] pr-6 duration-300 ease-in-out">
                        <p class="text-white font-bold text-xl">Pembuatan Nomor Induk Berusaha (NIB) melalui OSS
                        </p>
                        Mendapatkan NIB dan Izin Usaha kini lebih mudah dengan OSS. Namun pengisian OSS yang harus dilakukan berdasarkan KBLI memerlukan ilmu, pengalaman, dan kesabaran khusus. Ada lebih dari 100 item informasi yang harus diisi di OSS. Tim Syafaat yang berpengalaman akan mengisi formulir OSS untuk Anda sehingga pendaftaran NIB dan KBLI bisa lebih cepat. Berkat pengalaman yang telah kami miliki, kami dapat memberikan solusi terbaik jika terdapat kendala dalam pengisian formulir OSS. Perkiraan waktu penyelesaian adalah 1 hingga 3 hari.
                    </div>
                </li>

                <li data-te-stepper-step-ref class="relative h-fit after:absolute after:left-[2.45rem] after:top-[3.6rem] after:mt-px after:h-[calc(100%-2.45rem)] after:w-px after:bg-yellow-400 after:content-[''] dark:after:bg-neutral-600">
                    <div data-te-stepper-head-ref class="flex cursor-pointer items-center p-6 leading-[1.3rem] no-underline after:bg-[#e0e0e0] after:content-[''] hover:bg-gray-300 focus:outline-none dark:after:bg-neutral-600 dark:hover:bg-[#3b3b3b]">
                        <span data-te-stepper-head-icon-ref class="mr-3 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-yellow-500">
                            7
                        </span>
                        <span data-te-stepper-head-text-ref class="text-black after:absolute after:flex after:text-[0.8rem] after:content-[data-content] dark:text-neutral-300">
                            <p class="text-lg font-semibold text-yellow-500"> Pendirian PT selesai</p>
                        </span>
                    </div>
                    <div data-te-stepper-content-ref class="text-yellow-500 transition-[height, margin-bottom, padding-top, padding-bottom] left-0 overflow-hidden pb-6 pl-[3.75rem] pr-6 duration-300 ease-in-out">
                        <p class="text-white font-bold text-xl">Diskusikan Kebutuhan Anda dengan syafaat</p>
                        Anda telah berhasil mendirikan PT resmi secara legal dan memiliki dokumen yang lengkap. Easybiz akan menyerahkan semua dokumen hukum perusahaan langsung ke tempat Anda.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>



<section class="flex:wrap mx-28 text-gray-900">
    <div class="container py-24 ">
        <div class="text-center mb-10">
            <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-yellow-500 mb-4">
                Pertanyaan yang Sering Diajukan
            </h1>
            <p class="text-white text-base leading-relaxed xl:w-1/1 lg:w-3/4 mx-auto">
            </p>
        </div>

        <div class=" lg:w-1/1 px-4 py-2">
            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Berapa persyaratan investasi minimum untuk mendirikan perseroan terbatas swasta?
                </summary>
                <span class="text-white px-4 py-2">
                    Persyaratan investasi minimum di atas Rp 10 Miliar (tidak termasuk pembelian tanah dan bangunan).
                </span>
            </details>

            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Berapa maksimal kepemilikan saham pada perseroan terbatas swasta?
                </summary>
                <span class="text-white px-4 py-2">
                    Tergantung sektor usahanya, karena ada aturan yang mengatur penanaman modal asing pada sektor tertentu.
                </span>
            </details>

            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Kapan pemegang saham harus menyumbangkan modalnya ke rekening bank perusahaan?
                </summary>
                <span class="text-white px-4 py-2">
                    Dalam waktu 60 hari setelah diperolehnya Akta Pendirian Perusahaan.
                </span>
            </details>

            <details class="mb-4">
                <summary class="font-semibold  bg-gray-200 rounded-md py-2 px-4">
                    Bagaimana cara penyampaian LKPM?
                </summary>
                <span class="text-white px-4 py-2">
                    Penyampaian LKPM dilakukan secara daring melalui Sistem OSS.
                </span>
            </details>

        </div>
    </div>
    </div>
</section>
















@endsection('content')