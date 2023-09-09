@extends('layout.homelayout')
@section('content')
@type {import('tailwindcss').Config}

<section class="pt-24 w-full h-screen bg-fixed bg-cover bg-top bg-no-repeat bg-[url('/public/img/bgptsero.jpg')]  bg-gray-700 bg-blend-multiply">
  <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-yellow-500 md:text-5xl lg:text-6xl">Pendirian PT Perorangan</h1>
    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Solusi lengkap pendirian PT di seluruh Indonesia. Termasuk dokumen legalitas, penggunaan alamat Virtual Office, dan pengecekkan nama PT. Gratis konsultasi.</p>
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
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-yellow-500 ">Paket Layanan Terbaik untuk Pendirian PT Perorangan</h1>
        <div class="h-1 w-20 bg-gray-100 rounded"></div>
      </div>
      <!-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-400 text-opacity-90">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p> -->
    </div>
    <div class="flex flex-wrap -m-4 ">
      <div class="xl:w-1/5 md:w-1/2 p-4">
        <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/720x400" alt="content">
          <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Ekonomis</h3>
          <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 1,4 juta</h2>
          <div>
            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
              <li>
                Pengecekkan Nama PT
              </li>
              <li>
                Sertifikat Pendaftaran Pendirian PT Perorangan
              </li>
              <li>
                Surat Pernyataan Pendirian PT Perorangan
              </li>
            </ul>
            <ul class="pl-6 pt-2  marker:text-3xl list-image-close">
              <li>Kartu NPWP perusahaan</li>
              <li>Nomor Induk Berusaha (NIB)</li>
              <li>Virtual Office</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="xl:w-1/5 md:w-1/2 p-4">
        <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/721x401" alt="content">
          <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Basic</h3>
          <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 2,6 juta</h2>
          <div>
            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
              <li>
                Pengecekkan Nama PT
              </li>
              <li>
                Sertifikat Pendaftaran Pendirian PT Perorangan
              </li>
              <li>
                Surat Pernyataan Pendirian PT Perorangan
              </li>
              <li>Kartu NPWP perusahaan</li>
              <li>Nomor Induk Berusaha (NIB)</li>
            </ul>
            <ul class="pl-6 pt-2  marker:text-3xl list-image-close">
              <li>Virtual Office</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="xl:w-1/5 md:w-1/2 p-4">
        <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/722x402" alt="content">
          <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Premium</h3>
          <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Rp 4,3 juta</h2>
          <div>
            <ul class="pl-6 pt-2  marker:text-3xl list-image-ceklis">
              <li>
                Pengecekkan Nama PT
              </li>
              <li>
                Sertifikat Pendaftaran Pendirian PT Perorangan
              </li>
              <li>
                Surat Pernyataan Pendirian PT Perorangan
              </li>
              <li>Kartu NPWP perusahaan</li>
              <li>Nomor Induk Berusaha (NIB)</li>
              <li>Virtual Office</li>
            </ul>
          </div>
        </div>
      </div>
      <div class=" xl:w-1/5 md:w-1/2 p-4">
        <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
          <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Penutupan PT Perorangan</h3>
          <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Tanya Via LiveChat</h2>
          <div>
            <p>Konsultasikan kebutuhan penutupan pendirian usaha Anda dengan kami!</p>
          </div>
        </div>
      </div>

      <div class="xl:w-1/5 md:w-1/2 p-4">
        <div class="bg-gray-800 bg-opacity-40 p-6 rounded-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="https://dummyimage.com/723x403" alt="content">
          <h3 class="tracking-widest text-indigo-400 text-xs font-medium title-font">Paket Custom</h3>
          <h2 class="text-4xl text-yellow-300 font-medium title-font mb-4">Tanya Via LiveChat</h2>
          <p class="leading-relaxed text-base">Tidak menemukan layanan yang sesuai dengan kebutuhan Anda?
            Ceritakan kebutuhan Anda pada kami!</p>
        </div>

      </div>
    </div>

</section>

<section class=" bg-gray-800 text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="w-full md:w-1/2 mb-10 md:mb-0">
      <img src="{{ asset('img/ftptsero.avif') }}" class="transition-all duration-300  blur-sm hover:blur-none  w-full h-auto bg-fixed bg-no-repeat bg-center bg-cover rounded-xl" alt="Logo Syafaat" />
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-100">Apa bedanya Pendirian PT biasa dengan ?
        <div class="text-yellow-500 font-bold "> <br class=" hidden lg:inline-block">PT Perorangan
      </h1>
      <p class="text-white mb-8 leading-relaxed">PT Perorangan hadir sebagai solusi legalitas bisnis dari pemerintah untuk usaha rintisan Anda yang bersiap maju dan tumbuh lebih besar. Berbeda dengan PT biasa, PT Perorangan hanya bisa didirikan oleh 1 orang dan tidak memerlukan akta penditian di hadapan notaris. Serta, PT Perorangan dibatasi untuk kegiatan usaha skala mikro dan kecil.</p>
    </div>
  </div>
  </div>
</section>


<section class="bg-gray-800 text-gray-600 body-font">
  <div class="flex flex-col items-center text-center w-full mb-1">
    <h1 class="text-2xl pl-6 pr-4 font-medium title-font mb-4 text-white ">Lalu, Apa Untungnya Mendirikan PT Perorangan?</h1>
    {{-- <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p> --}}
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">

        <div class="lg:w-1/3 lg:mb-0 p-4 mb-6 mx-auto ">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/300x300">
            <p class="text-yellow-500 text-2xl font-bold leading-relaxed">Kemudahan Mengurus
              Legalitas dan Administrasi</p>
            <span class="inline-block h-1 w-10 rounded bg-gray-100 mt-6 mb-4"></span>
            <ul class="list-image-circle text-lg box-border border-4 bg-gray-200 rounded-xl list-disc text-gray-900 font-medium pl-4 text-left">
              <li>Miliki rekening bank perusahaan</li>
              <li>Bisa ikut dalam tender pemerintah</li>
              <li>Dapatkan tambahan modal dan investor</li>
            </ul>
          </div>
        </div>

        <div class="lg:w-1/3 lg:mb-0 p-4 mb-6 mx-auto ">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/302x302">
            <p class="text-yellow-500 mb-10 text-2xl font-bold leading-relaxed">Cukup Satu Orang Pendiri Saja</p>
            <span class="inline-block h-1 w-10 rounded bg-gray-100 mt-6 mb-4"></span>
            <ul class="list-image-circle box-border text-lg border-4 bg-gray-200 rounded-xl text-left list-disc text-gray-900 font-medium pl-4">
              <li>Melegalkan bisnis Anda menjadi lebih cepat dan fleksibel</li>
              <li>Tidak perlu akta pendirian</li>

            </ul>
          </div>
        </div>


        <div class="lg:w-1/3 lg:mb-0 p-4 mb-6 mx-auto ">
          <div class="h-full text-center">
            <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="https://dummyimage.com/305x305">
            <p class="text-yellow-500 mb-10 text-2xl font-bold leading-relaxed">Anda Bisa Memulai
              Sekarang Juga</p>
            <span class="inline-block h-1 w-10 rounded bg-gray-100 mt-6 mb-4"></span>
            <ul class="list-image-circle text-lg box-border border-4 bg-gray-200 rounded-xl list-disc text-gray-900 font-medium pl-4 text-left">
              <li>PT Perorangan membantu Anda untuk bisa mulai melegalkan dan meningkatkan UMKM </li>
              <li>Dapat ditingkatkan menjadi PT biasa</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>

<section class="text-gray-400 body-font bg-gray-900">
  <div class="container px-5 py-24 mx-auto ">
    <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-yellow-500 ">Mengapa Pendirian PT Perorangan Perlu Dibantu Syafaat</h1>
    </div>
    <div class="flex flex-wrap -m-4">

      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
          <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <h2 class="text-lg text-white font-medium title-font mb-2">Memesankan nama PT sesuai keinginan Anda</h2>
          <p class="leading-relaxed text-base">Anda akan dibantu untuk memilih dan memesan nama PT yang tidak hanya sesuai keinginan Anda, tapi juga sesuai dengan peraturan yang berlaku.</p>
        </div>
      </div>

      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
          <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <circle cx="6" cy="6" r="3"></circle>
              <circle cx="6" cy="18" r="3"></circle>
              <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
            </svg>
          </div>
          <h2 class="text-lg text-white font-medium title-font mb-2">Pembayaran PNBP</h2>
          <p class="leading-relaxed text-base">Anda tidak perlu khawatir dalam mengurus pembayaran PNBP (Penerimaan Negara Bukan Pajak) karena kami akan membantu mengurus pembayarannya.</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
          <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <h2 class="text-lg text-white font-medium title-font mb-2">Membantu memilihkan KBLI yang sesuai</h2>
          <p class="leading-relaxed text-base">Kami akan membantu Anda dalam memilih KBLI yang sesuai sehingga Anda mendapatkan perizinan berusaha yang sesuai dengan model bisnis yang Anda jalankan.</p>
        </div>
      </div>
      <div class="xl:w-1/4 md:w-1/2 p-4">
        <div class="border border-gray-700 border-opacity-75 p-6 rounded-lg">
          <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-gray-800 text-indigo-400 mb-4">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1zM4 22v-7"></path>
            </svg>
          </div>
          <h2 class="text-lg text-white font-medium title-font mb-2">Lokasi usaha sesuai ketentuan</h2>
          <p class="leading-relaxed text-base">Kami menyediakan layanan virtual office sehingga Anda tidak kesulitan dalam mencari lokasi usaha yang sesuai untuk bisa mendapatkan perizinan berusaha.</p>
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
      <p>Khusus untuk klien Syafaat yang menggunakan layanan Paket Premium untuk mendirikan PT di wilayah DKI Jakarta, kami menyediakan fasilitas berupa virtual office selama 1 tahun yang beralamat di kantor Syafaat. Dengan menggunakan layanan virtual office Anda akan mendapatkan:</p>
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

@endsection('content')