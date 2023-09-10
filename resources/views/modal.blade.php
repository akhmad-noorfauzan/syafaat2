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

<section class="text-gray-600 body-font">
    <div class="container px-auto py-24 mx-auto">
        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
            </div>
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">
                    Membantu Anda Memahami Regulasi Indonesia
                </h2>
                <p class="leading-relaxed text-base">Syafaat melakukan penelitian dan memahami peraturan bisnis Indonesia, perekonomian domestik, dan peluang investasi. Kami membantu Anda mempersiapkan diri dengan baik terhadap perbedaan peraturan dan praktik bisnis yang dinamis di Indonesia.</p>
            </div>
        </div>

        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Berikan Nasihat Profesional Berkelanjutan</h2>
                <p class="leading-relaxed text-base">Di Syafaat, Anda dapat berkonsultasi dengan pakar lokal dan profesional hukum yang sangat berpengalaman dalam lanskap regulasi investasi Indonesia. Kami memandu Anda melalui persyaratan hukum dan peraturan, serta potensi risikonya.</p>
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
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">
                    Membantu Anda Memahami Regulasi Indonesia
                </h2>
                <p class="leading-relaxed text-base">Syafaat melakukan penelitian dan memahami peraturan bisnis Indonesia, perekonomian domestik, dan peluang investasi. Kami membantu Anda mempersiapkan diri dengan baik terhadap perbedaan peraturan dan praktik bisnis yang dinamis di Indonesia.</p>
            </div>
        </div>
        <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Berikan Nasihat Profesional Berkelanjutan</h2>
                <p class="leading-relaxed text-base">Di Syafaat, Anda dapat berkonsultasi dengan pakar lokal dan profesional hukum yang sangat berpengalaman dalam lanskap regulasi investasi Indonesia. Kami memandu Anda melalui persyaratan hukum dan peraturan, serta potensi risikonya.</p>
            </div>
            <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 flex-shrink-0">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
            </div>
        </div>
        <button class="flex mx-auto mt-20 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Hubungi kami</button>
    </div>
</section>


<section class="pt-20 w-full h-screen">
    <div class="grid pl-60 pb-20 grid-cols-3">
        <div class="col-span-2">
            <div data-te-spy="scroll" data-te-target="#scrollspy1" data-te-offset="200" class="relative h-48 overflow-auto">
                <section id="example-1">
                    <h3 class="pb-3 pt-5 text-xl font-semibold">Section 1</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                        earum natus vel minima quod error maxime, molestias ut. Fuga
                        dignissimos nisi nemo necessitatibus quisquam obcaecati et
                        reiciendis quaerat accusamus numquam.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                        earum natus vel minima quod error maxime, molestias ut. Fuga
                        dignissimos nisi nemo necessitatibus quisquam obcaecati et
                        reiciendis quaerat accusamus numquam.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                        earum natus vel minima quod error maxime, molestias ut. Fuga
                        dignissimos nisi nemo necessitatibus quisquam obcaecati et
                        reiciendis quaerat accusamus numquam.
                    </p>
                </section>
                <section id="example-2">
                    <h3 class="pb-3 pt-5 text-xl font-semibold">Section 2</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                        earum natus vel minima quod error maxime, molestias ut. Fuga
                        dignissimos nisi nemo necessitatibus quisquam obcaecati et
                        reiciendis quaerat accusamus numquam.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                        earum natus vel minima quod error maxime, molestias ut. Fuga
                        dignissimos nisi nemo necessitatibus quisquam obcaecati et
                        reiciendis quaerat accusamus numquam.
                    </p>
                </section>
                <section id="example-3">
                    <h3 class="pb-3 pt-5 text-xl font-semibold">Section 3</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                        earum natus vel minima quod error maxime, molestias ut. Fuga
                        dignissimos nisi nemo necessitatibus quisquam obcaecati et
                        reiciendis quaerat accusamus numquam.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                        earum natus vel minima quod error maxime, molestias ut. Fuga
                        dignissimos nisi nemo necessitatibus quisquam obcaecati et
                        reiciendis quaerat accusamus numquam.
                    </p>
                    <section id="example-sub-A">
                        <h3 class="pb-3 pt-5 text-xl font-semibold">Subsection A</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Labore earum natus vel minima quod error maxime, molestias ut.
                            Fuga dignissimos nisi nemo necessitatibus quisquam obcaecati
                            et reiciendis quaerat accusamus numquam.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Labore earum natus vel minima quod error maxime, molestias ut.
                            Fuga dignissimos nisi nemo necessitatibus quisquam obcaecati
                            et reiciendis quaerat accusamus numquam.
                        </p>
                    </section>
                    <section id="example-sub-B">
                        <h3 class="pb-3 pt-5 text-xl font-semibold">Subsection B</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Labore earum natus vel minima quod error maxime, molestias ut.
                            Fuga dignissimos nisi nemo necessitatibus quisquam obcaecati
                            et reiciendis quaerat accusamus numquam.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Labore earum natus vel minima quod error maxime, molestias ut.
                            Fuga dignissimos nisi nemo necessitatibus quisquam obcaecati
                            et reiciendis quaerat accusamus numquam.
                        </p>
                    </section>
                </section>
                <section id="example-4">
                    <h3 class="pb-3 pt-5 text-xl font-semibold">Section 4</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                        earum natus vel minima quod error maxime, molestias ut. Fuga
                        dignissimos nisi nemo necessitatibus quisquam obcaecati et
                        reiciendis quaerat accusamus numquam.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore
                        earum natus vel minima quod error maxime, molestias ut. Fuga
                        dignissimos nisi nemo necessitatibus quisquam obcaecati et
                        reiciendis quaerat accusamus numquam.
                    </p>
                </section>
            </div>
        </div>

        <div>
            <!-- Scrollspy -->
            <div id="scrollspy1" class="pl-20 sticky-top pl-3 text-sm">
                <ul data-te-nav-list-ref>
                    <li class="py-1">
                        <a data-te-nav-link-ref data-te-nav-link-active class="bg-transparent px-[5px] text-neutral-600 shadow-none dark:text-neutral-200" href="#example-1">Section 1</a>
                    </li>
                    <li class="py-1">
                        <a data-te-nav-link-ref class="bg-transparent px-[5px] text-neutral-600 shadow-none dark:text-neutral-200" href="#example-2">Section 2</a>
                    </li>
                    <li class="py-1">
                        <a data-te-nav-link-ref class="bg-transparent px-[5px] text-neutral-600 shadow-none dark:text-neutral-200" href="#example-3">Section 3</a>
                        <ul data-te-nav-list-ref class="pl-3">
                            <li class="py-1">
                                <a data-te-nav-link-ref class="bg-transparent px-[5px] text-neutral-600 shadow-none dark:text-neutral-200" href="#example-sub-A">Subsection A</a>
                            </li>
                            <li>
                                <a data-te-nav-link-ref class="bg-transparent px-[5px] text-neutral-600 shadow-none dark:text-neutral-200" href="#example-sub-B">Subsection B</a>
                            </li>
                        </ul>
                    </li>
                    <li class="py-1">
                        <a data-te-nav-link-ref class="bg-transparent px-[5px] text-neutral-600 shadow-none dark:text-neutral-200" href="#example-4">Section 4</a>
                    </li>
                </ul>
            </div>
            <!-- Scrollspy -->
        </div>
    </div>
</section>



















@endsection('content')