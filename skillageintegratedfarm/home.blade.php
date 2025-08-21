<x-home-layout>
    
    @section('guest')
        @include('components.navbar')
        <!-- Jumbotron -->
        <div class="relative text-center">
            <img src="{{ asset('img/banner/banner-dekstop.webp') }}" class="hidden w-full filter brightness-50 md:block"
                alt="banner desktop">
            <img src="{{ asset('img/banner/banner-mobile.webp') }}" class="block w-full filter brightness-50 md:hidden"
                alt="banner mobile">
            <div
                class="absolute items-end justify-center w-3/4 p-4 text-white transform -translate-x-1/2 bottom-20 md:bottom-5 md:w-full left-1/2">
                <div class="flex flex-col items-center lg:px-48 lg:pb-5">
                    <h1 class="mb-8 text-2xl font-bold font-playfair md:text-6xl lg:mt-20">
                        Pesantren Integratif Holistik Pertama di Indonesia
                    </h1>
                    <p class="mb-12 text-sm text-base md:text-xl">
                        Selamat datang di Pesantren Integratif Holistik SMK Skill Village Islamic School, rumah pendidikan
                        akhlakul karimah untuk calon pemimpin, pengusaha, profesional yang alim dan terampil teknologi di
                        masa depan
                    </p>
                    <div class="flex mt-5 space-x-8">
                        <a href="#biaya">
                            <button type="button"
                                class="text-gray-900 bg-white border  hover:bg-blue-400 font-medium rounded-full text-xl px-5 py-2.5 w-[165px]">Biaya</button>
                        </a>
                        <a href="https://bit.ly/PPDBSkillVillageIslamicSchool">
                            <button type="button"
                                class="text-white bg-[#09496F] hover:bg-blue-700 font-medium rounded-full text-xl px-5 py-2.5 text-center w-[165px]">Pendaftaran</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skema Unggulan -->
        <div class="container flex flex-col items-center justify-center py-10 mx-auto font-poppins">
            <div class="mb-4 text-center">
                <h5
                    class="text-[#D1AE6C] font-medium text-xl mb-3 [text-shadow:1px_1px_2px_var(--tw-shadow-color)] shadow-yellow-200">
                    Memperkenalkan</h5>
                <h2 class="text-[#09496F] font-semibold text-3xl mb-8">
                    Pesantren Integratif Holistik,<br />Pesantren Seperti Apa?
                </h2>
            </div>
            <div class="w-4/5 mb-8 sm:w-3/5 md:w-2/5 lg:w-1/3">
                <img src="{{ asset('img/skema-unggulan.webp') }}" class="h-auto mx-auto w-72" alt="skema unggulan"
                    loading="lazy">
            </div>
            <div class="text-center">
                <p class="mx-auto text-gray-800 font-medium text-[20px] text-xl md:w-1/2 leading-relaxed">
                    Pesantren dengan program kejuruan mempersiapkan santri memiliki kemampuan unggul di dunia kerja, bisa
                    mengelola/memiliki bisnis, bisa melanjutkan kuliah berbasis kompetensi, menguasai bahasa Inggris/Arab,
                    dan Go Internasional.
                </p>
            </div>
        </div>

        <!-- PPDB Tahun Ajaran -->
        <div class="w-5/6 mx-auto my-[50px] py-5 font-poppins">
            <div class="flex flex-col items-center justify-center md:flex-row">
                <div class="flex flex-col px-2 mb-4 md:mb-0 md:w-1/2 space-y-9">
                    <div class="text-2xl font-medium md:text-3xl">
                        <h1 class="text-[#09496f]">PPDB Tahun Ajaran 2024/2025</h1>
                        <h2 class="text-[#d1ae6c] [text-shadow:1px_1px_2px_var(--tw-shadow-color)] shadow-yellow-200">SMK
                            Skill Village Islamic School</h2>
                    </div>
                    <div class="text-lg font-medium leading-relaxed text-gray-800 md:text-xl">
                        <p class="mb-4">Penerimaan Peserta Didik Baru Tahun Ajaran 2025/2025 Dibuka untuk putra dan putri.
                        </p>
                        <p>Ayo bergabung menjadi lulusan Technopreneur yang Alim dan Alim yang Technopreneur</p>
                    </div>
                    <a href="https://bit.ly/BrosurSMKSkillVillageIslamicSchool2024">
                        <button
                            class="bg-[#09496F] text-white font-medium text-sm md:text-base w-full max-w-xs h-11 rounded-3xl hover:bg-blue-700 ">
                            LIHAT BROSUR DIGITAL SEKOLAH
                        </button>
                    </a>
                </div>
                <div class="flex items-center justify-center md:w-1/2">
                    <iframe class="w-full max-w-xl rounded h-80"
                        src="https://www.youtube.com/embed/zVPwLI3T4EA?si=7gqbXMFtBrVL1qPg" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>

        <!-- Kenapa harus sekolah -->
        <div class="w-5/6 mx-auto my-20 font-poppins">
            <div class="lg:mx-10 flex flex-col md:flex-row justify-center items-center  my-[50px]">
                <div class="flex justify-start mb-5 md:w-1/2 text-start md:mb-0">
                    <img src="{{ asset('img/kenapa-harus-sekolah.webp') }}" class="w-3/4 rounded-lg"
                        alt="alasan sekolah di SMK ini" loading="lazy">
                </div>
                <div class="w-full md:w-1/2">
                    <div class="flex flex-col gap-4 pl-2 pr-2 lg:pl-0 md:pl-0 md:pr-10 lg:pr-0">
                        <div>
                            <h1 class="text-[#09496f] font-medium text-4xl">Kenapa Harus Sekolah di
                                <span
                                    class=" text-[#D1AE6C] font-medium text-4xl [text-shadow:1px_1px_2px_var(--tw-shadow-color)] shadow-yellow-200">Skill
                                    Village Islamic
                                    School?</span>
                            </h1>
                        </div>
                        <p class="text-sm font-medium text-gray-800">
                            Tingkatkan Potensi Putra/Putri Anda di Lingkungan yang Memadukan Aspek Pendidikan, Bisnis,
                            Community, Family, dan Government di dalam satu kawasan.
                        </p>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center justify-between">
                                <h4 class="text-2xl font-medium text-gray-800">Proses</h4>
                                <button class="focus:outline-none" onclick="toggleCollapse(this)" aria-controls="proses"
                                    aria-label="buka detail proses Skill Village Islamic School" aria-expanded="false"
                                    data-target="#proses">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-plus-lg plus-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="hidden bi bi-dash minus-icon" viewBox="0 0 16 16">
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                    </svg>
                                </button>
                            </div>
                            <hr class="border-[#D1AE6C]">
                            <div id="proses" class="hidden">
                                <p class="text-base font-medium text-gray-800 md:text-lg">
                                    Konsep Pendidikan Pesantren Integratif Holistik ABCFG (Integrasi <a
                                        href="{{ route('program.academy') }}" class="text-blue-500 underline">Academic</a>,
                                    <a href="{{ route('program.business') }}" class="text-blue-500 underline">Business</a>,
                                    <a href="{{ route('program.community') }}"
                                        class="text-blue-500 underline">Community</a>, <a
                                        href="{{ route('program.family') }}" class="text-blue-500 underline">Family</a>, <a
                                        href="{{ route('program.government') }}"
                                        class="text-blue-500 underline">Government</a>)
                                    <br><br>
                                    Program Unggul Takhasus Tahfiz Qur'an <br>
                                    Tematik dan Baca Cepat Kitab Kuning
                                    <br><br>
                                    Supercamp Character Building & The Power of Quantum Skillage
                                    <br><br>
                                    Penguatan kompetensi/profesionalisme & entrepreneurship
                                    <br><br>
                                    Pembelajaran berbasis STIFln
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center justify-between">
                                <h4 class="text-2xl font-medium text-gray-800">Kelulusan</h4>
                                <button class="focus:outline-none" onclick="toggleCollapse(this)" aria-controls="kelulusan"
                                    aria-label="buka detail kelulusan Skill Village Islamic School" aria-expanded="false"
                                    data-target="#kelulusan">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-plus-lg plus-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="hidden bi bi-dash minus-icon" viewBox="0 0 16 16">
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                    </svg>
                                </button>
                            </div>
                            <hr class="border-[#D1AE6C]">
                            <div id="kelulusan" class="hidden">
                                <p class="text-base font-medium text-gray-800 md:text-lg">
                                    Lulus memiliki minimal 1 Sertifikat SKKNI
                                    <br><br>
                                    Memiliki minimal satu fokus keahlian/ kompetensi utama di bidang jurusannya
                                    <br><br>
                                    Portofolio/Pengalaman PKL/Produk literasi
                                    <br><br>
                                    Punya kemampuan adaptasi untuk kerja, bisnis, dan melanjutkan kuliah
                                    <br><br>
                                    Habituasi dan Literasi Bahasa inggris/ Arab (sesuai pilihan takhasus)
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center justify-between">
                                <h4 class="text-2xl font-medium text-gray-800">Standar Pengajar</h4>
                                <button class="focus:outline-none" onclick="toggleCollapse(this)"
                                    aria-label="buka detail standar pengajar Skill Village Islamic School"
                                    aria-controls="StandarPengajar" aria-expanded="false" data-target="#StandarPengajar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-plus-lg plus-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="hidden bi bi-dash minus-icon" viewBox="0 0 16 16">
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                    </svg>
                                </button>
                            </div>
                            <hr class="border-[#D1AE6C]">
                            <div id="StandarPengajar" class="hidden">
                                <p class="text-base font-medium text-gray-800 md:text-lg">
                                    Technopreneur yang 'alim dan Alim yang Technopreneur
                                    <br><br>
                                    Memiliki kompetensi di bidang keagamaan, <br>
                                    entrepreneurship, community development dan teknologi.
                                    <br><br>
                                    Muda, berbakat, visioner, dan berkarakter
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center justify-between">
                                <h4 class="text-2xl font-medium text-gray-800">Kompetensi</h4>
                                <button class="focus:outline-none" onclick="toggleCollapse(this)"
                                    aria-controls="Kompetensi"
                                    aria-label="buka detail kompetensi Skill Village Islamic School" aria-expanded="false"
                                    data-target="#Kompetensi">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-plus-lg plus-icon" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="hidden bi bi-dash minus-icon" viewBox="0 0 16 16">
                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                    </svg>
                                </button>
                            </div>
                            <hr class="border-[#D1AE6C]">
                            <div id="Kompetensi" class="hidden">
                                <p class="text-base font-medium text-gray-800 md:text-lg">
                                    Pembelajaran berdasarkan Roadmap<br>
                                    To Excellence
                                    <br><br>
                                    Program pendidikan dan pembelajaran di dukung langsung oleh ekosistem bisnis yang berada
                                    di satu kawasan dengan sekolah
                                    <br><br>
                                    Learning by real project and real business
                                    <br><br>
                                    Kemandirian sebagai ujung tombak<br>
                                    membentuk kompetensi diri
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jurusan -->
        <div class="bg-[#09496F] flex justify-center items-center mt-5 lg:p-20 px-4 py-10 font-poppins" id="jurusan">
            <div class="container flex flex-col items-center justify-center text-center">
                <div class="mb-4 text-4xl font-bold text-white">
                    Jurusan
                </div>
                <div class="mb-4 text-2xl font-bold text-white">
                    <span
                        class="text-[#D1AE6C] font-medium [text-shadow:1px_1px_2px_var(--tw-shadow-color)] shadow-yellow-200">Skill
                        Village Islamic School</span>
                    <span class="font-medium">Hadirkan Jurusan Terbaik</span>
                </div>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <!-- First Card -->
                    <div class="col-span-1">
                        <div class="bg-white p-2 rounded-lg lg:w-[600px] lg:h-[300px]">
                            <div class="items-center h-full lg:flex md:flex">
                                <div class="lg:w-1/3 md:w-1/3">
                                    <img src="{{ asset('img/jurusan/atph.webp') }}"
                                        class="object-cover w-full h-full rounded-lg" alt="Usaha Pertanian Terpadu"
                                        loading="lazy">
                                </div>
                                <div class="lg:w-2/3 md:w-2/3">
                                    <div class="p-4">
                                        <div class="my-2 text-2xl font-bold text-dark text-start">Usaha Pertanian Terpadu
                                        </div>
                                        <div class="mb-3 text-lg font-medium text-gray-500 text-start">Sekolah Pertanian
                                            Bogor</div>
                                        <p class="text-base text-dark text-start">Jurusan UPT mempelajari mengenai
                                            dasar-dasar usaha pertanian terpadu.</p>
                                        <div
                                            class="flex justify-between mt-3 text-center lg:justify-start md:justify-start">
                                            <a href="{{ route('jurusan.upt') }}"
                                                class=" px-3 mr-4 font-medium text-md py-2 rounded-full bg-[#09496f] hover:bg-blue-700 text-white">Selengkapnya</a>
                                            <button href="" data-modal-target="default-modal"
                                                data-modal-toggle="default-modal"
                                                class="bg-[#D1AE6C] hover:bg-yellow-400 rounded-full py-2 px-10 text-white font-medium text-md">Biaya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Second Card -->
                    <div class="col-span-1">
                        <div class="bg-white p-2 rounded-lg lg:w-[600px] lg:h-[300px]">
                            <div class="items-center h-full lg:flex md:flex">
                                <div class="lg:w-1/3 md:w-1/3">
                                    <img src="{{ asset('img/jurusan/rpl.webp') }}"
                                        class="object-cover w-full h-full rounded-lg"
                                        alt="Pengembangan
                                                Perangkat Lunak & GIM"
                                        loading="lazy">
                                </div>
                                <div class="flex flex-col justify-between h-full lg:w-2/3 md:w-2/3 ">
                                    <div class="flex flex-col justify-between h-full p-4">
                                        <div>
                                            <div class="my-2 text-2xl font-bold text-dark text-start">Pengembangan
                                                Perangkat Lunak & GIM</div>
                                            <div class="mb-3 text-lg font-medium text-gray-500 text-start">Sekolah IT Bogor
                                            </div>
                                            <p class="text-base text-dark text-start">Jurusan PPLG Bogor mempelajari
                                                bagaimana
                                                membuat dan mengembangkan software yang berbasis web, mobile, dan desktop.
                                            </p>
                                        </div>
                                        <div
                                            class="flex justify-between mt-3 text-center lg:justify-start md:justify-start">
                                            <a href="{{ route('jurusan.pplg') }}"
                                                class=" px-3 mr-4 font-medium text-md py-2 rounded-full bg-[#09496f] hover:bg-blue-700 text-white">Selengkapnya</a>
                                            <button href="#" data-modal-target="default-modal1"
                                                data-modal-toggle="default-modal1"
                                                class="bg-[#D1AE6C] hover:bg-yellow-400 rounded-full py-2 px-10 text-white font-medium text-md">Biaya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Third Card -->
                    <div class="col-span-1">
                        <div class="bg-white p-2 rounded-lg lg:w-[600px] lg:h-[300px]">
                            <div class="items-center h-full lg:flex md:flex">
                                <div class="lg:w-1/3 md:w-1/3">
                                    <img src="{{ asset('img/jurusan/bkp.webp') }}"
                                        class="object-cover w-full h-full rounded-lg"
                                        alt="Teknik Konstruksi &
                                            Perumahan"
                                        loading="lazy">
                                </div>
                                <div class="lg:w-2/3 md:w-2/3">
                                    <div class="p-4">
                                        <div class="my-2 text-2xl font-bold text-dark text-start">Teknik Konstruksi &
                                            Perumahan</div>
                                        <div class="mb-3 text-lg font-medium text-gray-500 text-start">Sekolah Konstruksi
                                            Bogor
                                        </div>
                                        <p class="text-base text-dark text-start">Jurusan TKP mempelajari bagaimana
                                            dasar-dasar
                                            konstruksi bangunan, teknik pengukuran tanah, gambar teknik, perencanaan,
                                            pengolaan dan
                                            pengawasan bisnis konstruksi dan properti.</p>
                                        <div
                                            class="flex justify-between mt-3 text-center lg:justify-start md:justify-start">
                                            <a href="{{ route('jurusan.tkp') }}"
                                                class=" px-3 mr-4 font-medium text-md py-2 rounded-full bg-[#09496f] hover:bg-blue-700 text-white">Selengkapnya</a>
                                            <button href="#" data-modal-target="default-modal2"
                                                data-modal-toggle="default-modal2"
                                                class="bg-[#D1AE6C] hover:bg-yellow-400 rounded-full py-2 px-10 text-white font-medium text-md">Biaya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fourth Card -->
                    <div class="col-span-1">
                        <div class="bg-white p-2 rounded-lg lg:w-[600px] lg:h-[300px]">
                            <div class="items-center h-full lg:flex md:flex">
                                <div class="lg:w-1/3 md:w-1/3">
                                    <img src="{{ asset('img/jurusan/rpl.webp') }}"
                                        class="object-cover w-full h-full rounded-lg" alt="Teknik Komputer Jaringan"
                                        loading="lazy">
                                </div>
                                <div class="flex flex-col justify-between h-full lg:w-2/3 md:w-2/3">
                                    <div class="flex flex-col justify-between h-full p-4">
                                        <div class="">
                                            <div class="my-2 text-2xl font-bold text-dark text-start">Teknik Jaringan
                                                Komputer & Telekomunikasi
                                            </div>
                                            <div class="mb-3 text-lg font-medium text-gray-500 text-start">Sekolah IT Bogor
                                            </div>
                                            <p class="text-base text-dark text-start">Jurusan TJKT Bogor mempelajari
                                                Mikrotik, Cisco, Linux Fudamental, Cloud Server.</p>
                                        </div>
                                        <div
                                            class="flex justify-between mt-3 text-center lg:justify-start md:justify-start">
                                            <a href="#"
                                                class=" px-3 mr-4 font-medium text-md py-2 rounded-full bg-[#09496f] hover:bg-blue-700 text-white">Selengkapnya</a>
                                            <button href="#" data-modal-target="default-modal3"
                                                data-modal-toggle="default-modal3"
                                                class="bg-[#D1AE6C] hover:bg-yellow-400 rounded-full py-2 px-10 text-white font-medium text-md">Biaya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tenaga Pengasuh dan Fasilitator -->
        <div class="flex flex-col items-center justify-center pt-5 mx-5 lg:mx-40 md:mx-20 lg:py-20 md:py-10 font-poppins">
            <div class="text-[#09496F] text-center">
                <div class="py-3 space-y-3 text-4xl font-medium">
                    <p>Tenaga Pengasuh dan Fasilitator</p>
                    <p>Pesanten Integratif Holistik</p>
                </div>
                <div class="mb-10 text-2xl font-medium">
                    Daftar Tenaga Pengasuh dan Fasilitator <span
                        class="text-[#D1AE6C] [text-shadow:1px_1px_2px_var(--tw-shadow-color)] shadow-yellow-200">Skill
                        Village Islamic School</span>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-4 md:grid-cols-2 lg:gap-10 md:gap-10">
                @foreach ($personnels as $personnel)
                    <div class="bg-[#09496F] rounded-3xl text-center items-center justify-center">
                        <div class="flex flex-col justify-between h-full px-5 py-10 text-white">
                            <div class="mb-10">
                                <p class="text-xl font-semibold">{{ $personnel->name }}</p>
                                <p class="text-base font-normal">{{ $personnel->position }}</p>
                            </div>
                            <a href="{{ route('tenaga.show', $personnel->slug) }}"
                                class="text-[#09496F] bg-white hover:bg-blue-700 hover:text-white font-medium rounded-full px-5 py-2.5 text-center">Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('tenaga.index') }}"
                class="mt-10 text-white bg-[#D1AE6C] hover:bg-blue-700 font-medium rounded-full text-xl px-5 py-2.5 text-center">Lihat
                Selengkapnya</a>
        </div>

        <!-- Biaya Pendidikan -->
        <div class="bg-[#09496F] font-poppins mt-5">
            <div class="py-5 mx-5 lg:mx-40 md:mx-20 lg:py-20 md:py-10">
                <div class="text-center text-white">
                    <div class="py-3 mb-10 text-4xl font-medium" id="biaya">
                        <p>Biaya Pendidikan</p>
                    </div>
                </div>
                <div
                    class="grid justify-center grid-cols-1 gap-5 text-center align-middle lg:mx-40 lg:grid-cols-4 md:grid-cols-2 lg:gap-10 md:gap-10">
                    <!-- 1 -->
                    <button href="#"
                        class=" block bg-white rounded-3xl text-[#09496F] text-center align-middle py-5 shadow-xl hover:bg-yellow-400 hover:text-white"
                        data-modal-target="default-modal" data-modal-toggle="default-modal">
                        <p>Jurusan UPT</p>
                        <p>(Usaha Pertanian Terpadu)</p>
                    </button>
                    <div id="default-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-5xl max-h-full p-4">
                            <!-- Modal content -->
                            <div class="relative bg-[#09496F] rounded-lg shadow ">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 text-center border-b rounded-t md:p-5 ">
                                    <h3 class="text-xl font-semibold text-white">
                                        Biaya Pendidikan Jurusan UPT
                                    </h3>
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto "
                                        data-modal-hide="default-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <img src="{{ asset('img/biaya/atph.webp') }}"
                                    alt="biaya pendidikan jurusan agribisnis tanaman pangan dan hortikultura"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <button href="#"
                        class=" block bg-white rounded-3xl text-[#09496F] text-center align-middle py-5 shadow-xl hover:bg-yellow-400 hover:text-white"
                        data-modal-target="default-modal1" data-modal-toggle="default-modal1">
                        <p>Jurusan PPLG</p>
                        <p>(Pengembangan Perangkat Lunak & GIM)</p>
                    </button>
                    <div id="default-modal1" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-5xl max-h-full p-4">
                            <!-- Modal content -->
                            <div class="relative bg-[#09496F] rounded-lg shadow ">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 text-center border-b rounded-t md:p-5 ">
                                    <h3 class="text-xl font-semibold text-white">
                                        Biaya Pendidikan Jurusan PPLG
                                    </h3>
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto "
                                        data-modal-hide="default-modal1">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <img src="{{ asset('img/biaya/rpl.webp') }}"
                                    alt="biaya pendidikan jurusan rekayasa perangkat lunak" loading="lazy">
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <button href="#"
                        class=" block bg-white rounded-3xl text-[#09496F] text-center align-middle py-5 shadow-xl hover:bg-yellow-400 hover:text-white"
                        data-modal-target="default-modal2" data-modal-toggle="default-modal2">
                        <p>Jurusan TKP</p>
                        <p>(Teknik Konstruksi & Perumahan)</p>
                    </button>
                    <div id="default-modal2" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-5xl max-h-full p-4">
                            <!-- Modal content -->
                            <div class="relative bg-[#09496F] rounded-lg shadow ">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 text-center border-b rounded-t md:p-5 ">
                                    <h3 class="text-xl font-semibold text-white">
                                        Biaya Pendidikan Jurusan TKP
                                    </h3>
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto "
                                        data-modal-hide="default-modal2">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <img src="{{ asset('img/biaya/bkp.webp') }}"
                                    alt="biaya pendidikan jurusan bisnis konstruksi dan properti" loading="lazy">
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <button href="#"
                        class=" block bg-white rounded-3xl text-[#09496F] text-center align-middle py-5 shadow-xl hover:bg-yellow-400 hover:text-white"
                        data-modal-target="default-modal3" data-modal-toggle="default-modal3">
                        <p>Jurusan TJKT</p>
                        <p>(Teknik Jaringan Komputer & Telekomunikasi)</p>
                    </button>
                    <div id="default-modal3" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-5xl max-h-full p-4">
                            <!-- Modal content -->
                            <div class="relative bg-[#09496F] rounded-lg shadow ">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 text-center border-b rounded-t md:p-5 ">
                                    <h3 class="text-xl font-semibold text-white">
                                        Biaya Pendidikan Jurusan TJKT
                                    </h3>
                                    <button type="button"
                                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto "
                                        data-modal-hide="default-modal3">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <img src="{{ asset('img/biaya/tjkt.webp') }}"
                                    alt="biaya pendidikan jurusan teknik jaringan komputer & telekomunikasi"
                                    loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Teaching Factory -->
        <div class="bg-[#09496f] flex justify-center items-center py-16 font-poppins">
            <div class="container">
                <div class="grid row place-items-center lg:mx-16 md:mx-16">
                    <div
                        class="bg-white text-center text-white title-bar flex items-center justify-center lg:rounded-t-full md:rounded-t-full rounded-t-[100px] h-40 lg:w-5/6 md:w-full">
                        <div class="font-semibold text-[#09496F] text-center text-5xl">TEACHING FACTORY</div>
                    </div>
                    <div class="col-md-8 lg:w-5/6">
                        <div class="items-center justify-between mt-4 md:flex ">
                            <div
                                class="px-2 mb-3 text-lg font-medium text-center md:mb-0 lg:text-left md:text-left lg:w-3/5 md:w-3/5 lg:px-0 md:px-0">
                                <p class="text-[#D1AE6C]  text-base">SMK Skill Village Islamic School
                                    <span class="text-base text-white">
                                        dalam proses pembelajarannya menggunakan konsep teaching factory yang
                                        sudah masuk
                                        dalam konsep Pesantren Integratif Holistik. Mengintegrasikan business
                                        process
                                        perusahaan
                                        dengan SMK Skill Village Islamic School, dengan komponen-komponen
                                        seperti gambar
                                        berikut:
                                    </span>
                                </p>
                            </div>
                            <div class="flex flex-row items-center justify-center">
                                <img src="{{ asset('img/teaching-factory.webp') }}" class="h-auto w-80"
                                    alt="teaching factory" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TechnoPark -->
        <div class="flex items-center justify-center py-5 mt-10 font-poppins">
            <div class="container">
                <div class="grid row place-items-center">
                    <div
                        class="bg-[#09496F] text-center text-white title-bar flex items-center justify-center lg:rounded-t-full md:rounded-t-full rounded-t-[100px] h-40 lg:w-5/6 w-full">
                        <div class="text-5xl font-semibold text-center text-white">TECHNOPARK</div>
                    </div>
                    <div
                        class="mt-5 text-lg font-medium text-center lg:text-left md:text-left lg:mt-20 md:mt-10 lg:mx-40 md:mx-16 lg:w-2/4">
                        <p class="text-[#D1AE6C]">SMK Skill Village Islamic School
                            <span class="text-[#001E45] text-base">
                                telah memiliki dan mengembangkan konsep keterpaduan dalam Technopark yang mensinergikan
                                industri yang ada
                                dalam kawasan dengan SMK Skill Village Islamic School.
                                Technopark di kelola secara terintegrasi dengan perusahaan-perusahaan terkait.
                            </span>
                        </p>
                    </div>
                    <div class="mt-5 lg:mt-20 md:mt-10">
                        <!-- 1 -->
                        <div
                            class="items-center text-center lg:flex lg:flex-row md:flex md:flex-row justify-top lg:space-x-10 md:space-x-5">
                            <div class="flex flex-col items-center justify-center mt-10 lg:w-2/4">
                                <div class="text-white ">
                                    <p class="bg-[#4BA33A] text-lg font-medium p-5">
                                        AGRIBISNIS TANAMAN <br> PANGAN & HORTIKULTURA
                                    </p>
                                </div>
                                <div class="flex flex-row items-center justify-center p-5 bg-white shadow-lg w-fit"
                                    style="height: 120px">
                                    <img src="{{ asset('img/mitra/bale-jentera.webp') }}" class="w-[120px] h-[90px]"
                                        alt="logo bale-jentera" loading="lazy">
                                    <img src="{{ asset('img/mitra/permata-desa.webp') }}" class="w-[190px] h-[65px]"
                                        alt="logo permata desa" loading="lazy">
                                </div>
                            </div>
                            <div class="flex flex-col items-center justify-center mt-10 lg:w-2/4">
                                <div class="text-white ">
                                    <p class="bg-[#6A1400] text-lg font-medium p-5">
                                        BISNIS KONSTRUKSI <br>
                                        DAN PROPERTI
                                    </p>
                                </div>
                                <div class="flex flex-row items-center justify-center p-5 bg-white shadow-lg w-fit"
                                    style="height: 120px">
                                    <img src="{{ asset('img/mitra/pt-iam.webp') }}" class="w-[60px] h-[90px]"
                                        alt="logo Insan Andalan Maju" loading="lazy">
                                    <img src="{{ asset('img/mitra/pt-rmg.webp') }}" class="w-[160px] h-[55px]"
                                        alt="logo pt-ratu mas globalindo" loading="lazy">
                                    <img src="{{ asset('img/mitra/holomoc.webp') }}" class="w-[120px] h-[40px]"
                                        alt="logo holomoc" loading="lazy">
                                </div>
                            </div>
                        </div>
                        <!-- 2 -->
                        <div class="flex flex-col items-center justify-center mt-10">
                            <div class="text-white ">
                                <p class="bg-[#001E45] text-lg font-medium p-5">
                                    REKAYASA PERANGKAT LUNAK
                                </p>
                            </div>
                            <div
                                class="items-center justify-center p-5 bg-white shadow-lg lg:flex lg:flex-row md:flex md:flex-row lg:w-fit md:w-fit">
                                <div class="flex flex-row items-center justify-center">
                                    <img src="{{ asset('img/mitra/holomoc.webp') }}" class="w-[150px] h-[40px]"
                                        alt="logo holomoc" loading="lazy">
                                    <img src="{{ asset('img/mitra/spero.webp') }}" class="w-[140px] h-[48px]"
                                        alt="logo spero" loading="lazy">
                                </div>
                                <div class="flex flex-row items-center justify-center">
                                    <img src="{{ asset('img/mitra/telkom.webp') }}" class="w-[160px] h-[71px]"
                                        alt="logo universitas telkom" loading="lazy">
                                    <img src="{{ asset('img/mitra/phoenix-cendikia.webp') }}" class="w-[140px] h-[51px]"
                                        alt="logo pt. phoenix cendikia" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Program -->
        <div class="">
            <div class="py-5 mx-5 lg:mx-40 md:mx-20 lg:py-20 md:py-10 font-poppins ">
                <div class="mb-10 text-center">
                    <div class="text-[#09496F] text-[40px] font-bold">
                        Program
                    </div>
                    <div class="text-[#09496F] text-[25px] font-medium">
                        Program Khusus
                        <span
                            class="text-[#D1AE6C] [text-shadow:1px_1px_2px_var(--tw-shadow-color)] shadow-yellow-200">Skill
                            Village Islamic School</span>
                    </div>
                </div>
                <div
                    class="grid justify-center grid-cols-1 space-y-5 text-center lg:grid-cols-5 md:grid-cols-2 lg:gap-14 md:gap-10 items-top lg:space-y-0 md:space-y-0">
                    <!-- 1 -->
                    <div class="mx-2 bg-white shadow-lg rounded-xl lg:mx-0 md:mx-0">
                        <div class="bg-[#09496F] text-white font-semibold rounded-t-xl py-5 text-xl">
                            Skillage Supercamp
                        </div>
                        <div class="py-10 space-y-10 text-black">
                            <div class="flex flex-col items-center justify-center">
                                <img src="{{ asset('img/program/SS1.webp') }}" class="w-24 h-24"
                                    alt="Quantum Skillage
                                (Metode Terampil Akseleratif)"
                                    loading="lazy">
                                <p class="px-5 font-medium lg:px-0 md:px-0">Quantum Skillage
                                    (Metode Terampil Akseleratif)</p>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <img src="{{ asset('img/program/SS2.webp') }}" class="w-24 h-24"
                                    alt="Character Building" loading="lazy">
                                <p class="font-medium">Character Building</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="mx-2 bg-white shadow-lg rounded-xl lg:mx-0 md:mx-0">
                        <div class="bg-[#09496F] text-white font-semibold rounded-t-xl py-5 text-xl">
                            Habituasi & Literasi
                        </div>
                        <div class="py-10 space-y-10 text-black">
                            <div class="flex flex-col items-center justify-center">
                                <img src="{{ asset('img/program/HL1.webp') }}" class="w-24 h-24"
                                    alt="Habituasi Literasi Bahasa Arab" loading="lazy">
                                <p class="font-medium">Habituasi Literasi
                                <p class="font-medium">Bahasa Arab</p>
                                </p>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <img src="{{ asset('img/program/HL2.webp') }}" class="w-24 h-24"
                                    alt="Habituasi Literasi Bahasa Inggris" loading="lazy">
                                <p class="font-medium">Habituasi Literasi
                                <p class="font-medium">Bahasa Inggris</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="mx-2 bg-white shadow-lg rounded-xl lg:mx-0 md:mx-0">
                        <div class="bg-[#09496F] text-white font-semibold rounded-t-xl p-5 text-xl">
                            Program Takhasus
                        </div>
                        <div class="py-10 space-y-10 text-black">
                            <div class="flex flex-col items-center justify-center">
                                <img src="{{ asset('img/program/PT1.webp') }}" class="w-24 h-24"
                                    alt="Belajar cepat baca kitab kuning" loading="lazy">
                                <p class="font-medium">Belajar Cepat Baca
                                <p class="font-medium">Kitab Kuning</p>
                                </p>
                            </div>
                            <div class="flex flex-col items-center justify-center">
                                <img src="{{ asset('img/program/PT2.webp') }}" class="w-24 h-24"
                                    alt="(Tahfidz Qur’an Tematik)" loading="lazy">
                                <p class="font-medium">TQT
                                <p class="font-medium">(Tahfidz Qur’an Tematik)</p>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="mx-2 bg-white shadow-lg rounded-xl lg:col-span-2 md:col-span-2 lg:mx-0 md:mx-0">
                        <div class="bg-[#09496F] text-white font-semibold rounded-t-xl py-5 text-xl lg:px-0 md:px-0 px-5">
                            Personal Development Plan (PDP)
                        </div>
                        <div class="grid grid-cols-2 py-10 text-black">
                            <div class="flex flex-col items-center justify-center pb-10">
                                <img src="{{ asset('img/program/PDP1.webp') }}" class="w-24 h-24"
                                    alt="Personal Development Plan Kompetensi" loading="lazy">
                                <p class="font-medium">PDP Kompetensi
                                </p>
                            </div>
                            <div class="flex flex-col items-center justify-center pb-10">
                                <img src="{{ asset('img/program/PDP2.webp') }}" class="w-24 h-24"
                                    alt="Personal Development Plan Technopreneur" loading="lazy">
                                <p class="font-medium">PDP Technopreneur
                                </p>
                            </div>
                            <div class="flex flex-col items-center justify-center pb-10">
                                <img src="{{ asset('img/program/PDP4.webp') }}" class="w-24 h-24"
                                    alt="Personal Development Plan Pengembangan Profesi" loading="lazy">
                                <p class="px-3 font-medium lg:px-0 md:px-0">PDP Pengembangan Profesi
                                </p>
                            </div>
                            <div class="flex flex-col items-center justify-center pb-10">
                                <img src="{{ asset('img/program/PDP3.webp') }}" class="w-24 h-24"
                                    alt="Personal Development Plan Pengembangan Kuliah" loading="lazy">
                                <p class="px-3 font-medium lg:px-0 md:px-0">PDP Pengembangan Kuliah
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="grid items-center mt-5 space-y-5 text-center lg:grid-cols-6 md:grid-cols-2 lg:gap-20 md:gap-10 justify-top lg:space-y-0 md:space-y-0">
                    <div class="bg-white shadow-lg rounded-xl lg:col-start-2 lg:col-span-2 md:col-span-2">
                        <div class="bg-[#09496F] text-white font-semibold rounded-t-xl py-5 text-xl">
                            Program Backpacker
                        </div>
                        <div class="grid grid-cols-2 px-10 py-10 text-black">
                            <div class="col-span-2 lg:px-[70px]">
                                <div class="flex flex-row justify-center space-x-10 ">
                                    <div class="flex flex-col pb-10">
                                        <img src="{{ asset('img/program/PB1.webp') }}" class="w-24 h-24"
                                            alt="Program Backpacker Lokal" loading="lazy">
                                        <p class="font-medium">Lokal
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row items-center justify-center col-span-2 space-x-10">
                                <div class="flex flex-col items-center justify-center pb-10">
                                    <img src="{{ asset('img/program/PB2.webp') }}" class="w-24 h-24"
                                        alt="Program Backpacker Luar Daerah" loading="lazy">
                                    <p class="font-medium">Luar Daerah
                                    </p>
                                </div>
                                <div class="flex flex-col items-center justify-center pb-10">
                                    <img src="{{ asset('img/program/PB3.webp') }}" class="w-24 h-24"
                                        alt="Program Backpacker Luar Negeri" loading="lazy">
                                    <p class="font-medium">Luar Negeri
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="bg-white shadow-lg rounded-xl lg:col-start-4 lg:col-span-2 md:col-span-2">
                        <div class="bg-[#09496F] text-white font-semibold rounded-t-xl py-5 text-xl">
                            Program Olahraga
                        </div>
                        <div class="grid grid-cols-2 px-10 py-10 text-black">
                            <div class="flex flex-row items-center justify-center col-span-2 space-x-10">
                                <div class="flex flex-col items-center justify-center pb-10">
                                    <img src="{{ asset('img/program/PO1.webp') }}" class="w-24 h-24"
                                        alt="Program Olahraga Beladiri" loading="lazy">
                                    <p class="font-medium">Beladiri
                                    </p>
                                </div>
                                <div class="flex flex-col items-center justify-center pb-10">
                                    <img src="{{ asset('img/program/PO2.webp') }}" class="w-24 h-24"
                                        alt="Program Olahraga Memanah" loading="lazy">
                                    <p class="font-medium">Memanah
                                    </p>
                                </div>
                            </div>
                            <div class="flex flex-row items-center justify-center col-span-2 space-x-10">
                                <div class="flex flex-col items-center justify-center pb-10">
                                    <img src="{{ asset('img/program/PO3.webp') }}" class="w-24 h-24"
                                        alt="Program Olahraga Renang" loading="lazy">
                                    <p class="font-medium">Renang
                                    </p>
                                </div>
                                <div class="flex flex-col items-center justify-center pb-10">
                                    <img src="{{ asset('img/program/PO4.webp') }}" class="w-24 h-24"
                                        alt="Program Olahraga Berkuda" loading="lazy">
                                    <p class="font-medium">Berkuda
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sekolah Pilihan Terbaik -->
        <div class="items-center justify-center py-5 mx-5 my-20 lg:flex lg:mx-40 md:mx-20 lg:py-20 md:py-10 font-poppins">
            <div class="items-center justify-center lg:w-1/2">
                <div class="text-[#09496F] text-[40px] font-bold">
                    Pesantren Integratif Holistik
                    SMK Skill Village Islamic School
                </div>
                <br>
                <div
                    class="text-[#D1AE6C] [text-shadow:1px_1px_2px_var(--tw-shadow-color)] shadow-yellow-200 text-[32px] font-bold">
                    Sekolah Pilihan Terbaik!
                </div>
                <br>
                <div class="text-lg text-gray-500">
                    Sekolah Menengah Kejuruan Skill Village Islamic School ialah Pesantren Integratif
                    Holistik pertama di Indonesia yang berlokasi di Desa Sukasirna Kecamatan Jonggol
                    Kabupaten Bogor, Jawa Barat.
                </div>
            </div>
            <div class="flex items-end justify-end lg:w-1/2">
                <a href="https://www.youtube.com/watch?v=RutrAPVWuCE" target="_blank">
                    <img src="{{ asset('img/go-internasional.webp') }}" class="rounded-2xl w-96"
                        alt="SMK pilihan terbaik untuk anda" loading="lazy">
                </a>
            </div>
        </div>

        <!-- PDP -->
        <div class="py-5 mx-5 lg:flex lg:mx-40 md:mx-20 lg:py-20 md:py-10 font-poppins">
            <div class="lg:w-2/6 lg:space-y-6">
                <div class="text-[#C80000] lg:text-6xl text-4xl font-bold">
                    Personal Development Plan
                </div>
                <img src="{{ asset('img/stifin/image1.webp') }}" alt="berbasis" loading="lazy">
                <div class="flex">
                    <div class="w-1/3 text-2xl font-bold lg:text-4xl">
                        berbasis
                    </div>
                    <div class="w-2/3 mt-2">
                        <img src="{{ asset('img/stifin/image2.webp') }}" alt="stifin" loading="lazy">
                        <span class="text-base lg:text-lg">
                            sebuah konsep untuk mengidentifikasi kecerdasan manusia berdasarkan sistem operasi otak yang
                            dominan dan dapat diketahui dengan memindai sidik jari.
                        </span>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/6"></div>
            <div class=col>
                <div class="my-20"><img src="{{ asset('img/stifin/image3.webp') }}" class="w-full h-auto"
                        alt="stifin">
                </div>
                <button type="button"
                    class="text-white bg-[#D1AE6C] border font-medium text-xl px-5 py-2.5 w-full ">"KENAPA
                    HARUS TES
                    STIFIN"</button>
                <div class="my-20"><img src="{{ asset('img/stifin/image4.webp') }}" class="w-full h-auto"
                        alt="stifin">
                </div>
            </div>

        </div>

        <!-- Review -->
        <div class="py-5 lg:py-20 md:py-10 font-poppins">
            <div class="text-[#09496F] font-bold text-[40px] text-center">
                Apa Kata Mereka Tentang
                <p
                    class="text-[#D1AE6C] [text-shadow:1px_1px_2px_var(--tw-shadow-color)] shadow-yellow-200 lg:px-0 md:px-0 px-3">
                    Skill Village Islamic School?</p>
            </div>
            <div class="">
                @include('components.review', ['reviews' => $reviews])
            </div>
        </div>

        <!-- Fasilitas -->
        <div class="bg-[#09496F] mt-10 font-poppins">
            <div class="py-5 mx-5 lg:mx-40 md:mx-20 lg:py-20 md:py-10">
                <div class="pb-10 text-center text-white">
                    <div class="text-[40px] font-bold">
                        Fasilitas
                    </div>
                    <div class="py-5 text-3xl font-medium">
                        <span
                            class="text-[#D1AE6C] [text-shadow:1px_1px_2px_var(--tw-shadow-color)] shadow-yellow-200">Skill
                            Village Islamic School</span> Hadirkan Fasilitas Terbaik
                    </div>
                </div>
                <div class="grid items-start grid-cols-1 gap-16 text-center lg:grid-cols-4 md:grid-cols-2">
                    <!-- 1 -->
                    <div>
                        <div class="bg-white border rounded-lg shadow max-w ">
                            <img class="object-cover w-full h-full rounded-t-lg "
                                src="{{ asset('img/fasilitas/lahan.webp') }}" alt="Lahan" loading="lazy" />
                            <div class="grid p-5 place-items-center max-h-24 min-h-24">
                                <p class="text-sm font-medium text-gray-700 ">Lahan seluas 3 hektar kampung tumbuh
                                    berbasis
                                    masjid</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div>
                        <div class="bg-white border rounded-lg shadow max-w">
                            <img class="object-cover w-full h-full rounded-t-lg"
                                src="{{ asset('img/fasilitas/asrama.webp') }}" alt="Asrama" loading="lazy" />
                            <div class="grid p-5 place-items-center max-h-24 min-h-24">
                                <p class="font-medium text-gray-700 ">Asrama</p>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div>
                        <div class="bg-white border rounded-lg shadow max-w ">
                            <img class="object-cover w-full h-full rounded-t-lg"
                                src="{{ asset('img/fasilitas/masjid.webp') }}" alt="Masjid" loading="lazy" />
                            <div class="grid p-5 place-items-center max-h-24 min-h-24">
                                <p class="font-medium text-gray-700 ">Masjid</p>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div>
                        <div class="bg-white border rounded-lg shadow max-w ">
                            <img class="object-cover w-full h-full rounded-t-lg"
                                src="{{ asset('img/fasilitas/smartclass.webp') }}" alt="Smartclass" loading="lazy" />
                            <div class="grid p-5 place-items-center max-h-24 min-h-24">
                                <p class="font-medium text-gray-700 ">Smartclass</p>
                            </div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div>
                        <div class="bg-white border rounded-lg shadow max-w ">
                            <img class="object-cover w-full h-full rounded-t-lg"
                                src="{{ asset('img/fasilitas/agro.webp') }}" alt="Agro Technopark" loading="lazy" />
                            <div class="grid p-5 place-items-center max-h-24 min-h-24">
                                <p class="font-medium text-gray-700 ">Skillage Agro Technopark</p>
                            </div>
                        </div>
                    </div>
                    <!-- 6 -->
                    <div>
                        <div class="bg-white border rounded-lg shadow max-w ">
                            <img class="object-cover w-full h-full rounded-t-lg"
                                src="{{ asset('img/fasilitas/studio.webp') }}" alt="Studio" loading="lazy" />
                            <div class="grid p-5 place-items-center max-h-24 min-h-24">
                                <p class="font-medium text-gray-700 ">Skillage literacy studio and content creative
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 7 -->
                    <div>
                        <div class="bg-white border rounded-lg shadow max-w ">
                            <img class="object-cover w-full h-full rounded-t-lg"
                                src="{{ asset('img/fasilitas/rest-area.webp') }}" alt="Rest Area" loading="lazy" />
                            <div class="grid p-5 place-items-center max-h-24 min-h-24">
                                <p class="font-medium text-gray-700 ">Rest Area</p>
                            </div>
                        </div>
                    </div>
                    <!-- 8 -->
                    <div>
                        <div class="bg-white border rounded-lg shadow max-w ">
                            <img class="object-cover w-full h-full rounded-t-lg"
                                src="{{ asset('img/fasilitas/memanah.webp') }} " alt="Memanah" loading="lazy" />
                            <div class="grid p-5 place-items-center max-h-24 min-h-24">
                                <p class="font-medium text-gray-700 ">Memanah, Berenang, Berkuda</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- daftar -->
        <div class="py-5 bg-white lg:px-40 md:px-20 lg:py-20 md:py-10 font-poppins">
            <div class="items-center justify-center text-center">
                <div class="text-xl text-gray-500">
                    Abi/Umi/Ananda tertarik?
                </div>
                <br>
                <div class="text-4xl font-bold text-[#09496F]">
                    Ayo Daftar Sekarang!
                </div>
                <br>
                <div class="text-xl text-gray-500">
                    Klik link pendaftaran dibawah ini atau hubungi admin untuk informasi lebih lanjut.
                </div>
                <br>
            </div>
            <div class="flex items-center justify-center space-x-2 lg:space-x-10 md:space-x-5">
                <a href="https://bit.ly/PPDBSkillVillageIslamicSchool"
                    class="text-white bg-[#D1AE6C] hover:bg-blue-700 font-medium rounded-full text-sm px-5 py-2.5 text-center">Isi
                    Formulir Pendaftaran</a>
                <a href="#"
                    class="text-white bg-[#09496F] hover:bg-blue-700 font-medium rounded-full text-sm px-5 py-2.5 text-center">Hubungi
                    Kami</a>
            </div>
        </div>

        <!-- berita -->
        <div class="bg-[#F4F6F9] font-poppins">
            <div class="py-5 mx-5 lg:mx-40 md:mx-20 lg:py-20 md:py-10 ">
                <div class="flex flex-row items-center justify-between mb-5">
                    <div>
                        <div class="text-4xl text-[#09496F] font-bold mb-3">
                            Berita Terkini
                        </div>
                        <div class="text-xl text-black">
                            Informasi terkini terkait Sivitas Akademika
                            <p class="text-[#D1AE6C] [text-shadow:1px_1px_2px_var(--tw-shadow-color)] shadow-yellow-200">
                                Skill Village Islamic School</p>
                        </div>
                    </div>
                    <a href="{{ route('news.list') }}"
                        class="text-white bg-[#09496F] hover:bg-blue-700 font-medium rounded-full lg:text-xl md:text-lg text-base px-5 py-2.5 text-center">Lihat
                        Selengkapnya</a>
                </div>
                <div class="grid items-center grid-cols-1 gap-5 lg:grid-cols-3 md:grid-cols-2 lg:gap-20 md:gap-2">
                    @foreach ($news as $newsItem)
                        <div class="w-full bg-white border border-gray-200 rounded-lg shadow">
                            <div class="absolute text-white bg-[#09496F] mt-5 ml-5 px-5 py-3 rounded-full">
                                {{ $newsItem->category->category_name }}</div>
                            <img class="rounded-t-lg object-cover h-[265px] w-full" src="{{ asset($newsItem->image) }}"
                                alt="berita" loading="lazy" />
                            <div class="p-5">
                                <div class="flex flex-row py-3 space-x-5">
                                    <div class="flex flex-row items-center text-center">
                                        <x-s-v-g-s.user />
                                        <p class="pl-2">Admin</p>
                                    </div>
                                    <div class="flex flex-row">
                                        <x-s-v-g-s.calendar />
                                        <p class="pl-2">{{ $newsItem->created_at->format('d M Y') }}</p>
                                    </div>
                                </div>
                                <h5 class="mb-2 text-lg font-medium tracking-tight text-gray-900 line-clamp-2">
                                    {{ $newsItem->title }}</h5>
                                <a href="{{ route('news.detail', $newsItem->slug) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-[#09496f] hover:bg-[#09496f] hover:text-white rounded-lg border-solid border-2 border-[#09496F]">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('components.footer')

        <script>
            function toggleCollapse(button) {
                const collapseTarget = document.querySelector(button.getAttribute('data-target'));
                const plusIconSvg = button.querySelector('.plus-icon');
                const minusIconSvg = button.querySelector('.minus-icon');

                collapseTarget.classList.toggle('hidden');
                plusIconSvg.classList.toggle('hidden');
                minusIconSvg.classList.toggle('hidden');
            }
        </script>
    @endsection
</x-home-layout>
