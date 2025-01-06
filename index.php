<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Buku Tamu</title>
    <style>
        .wave-adjust {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .banner-text {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body>
    <nav class="bg-red-500 dark:bg-red-500 fixed w-full z-20 top-0 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <!-- Nama Buku Tamu tanpa logo -->
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Buku Tamu</span>

            <!-- Menu items di sebelah kanan -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 ">
                    <li>
                        <a href="#"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-red-700 md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:hover:bg-red-700 dark:hover:text-white "
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#progkal"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-red-700 md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:hover:bg-red-700 dark:hover:text-white ">Program
                            Keahlian</a>
                    </li>
                    <li>
                        <a href="#visimisi"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-red-700 md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:hover:bg-red-700 dark:hover:text-white ">Visi
                            Misi</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-red-700 md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:hover:bg-red-700 dark:hover:text-white ">Hubungi
                            Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Bagian Banner -->
    <section id="banner" class="relative bg-red-500 text-white pb-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between py-12 banner-text">
            <div class="text-center md:text-left">
                <h4 class="text-3xl font-bold mb-4">Selamat Datang di SMK Negeri 9 Malang</h4>
                <p class="text-lg">Terima Kasih telah berkunjung ke Buku Tamu ini. Semoga anda sehat selalu</p>
            </div>
            <img src="assets/images/head.png" alt="Banner" class="w-2/3 md:w-1/3 mt-4 md:mt-0">
        </div>
        <!-- SVG Wave -->
        <svg class="wave-adjust" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f3f4f5" fill-opacity="1"
                d="M0,192L80,170.7C160,149,320,107,480,112C640,117,800,171,960,197.3C1120,224,1280,224,1360,224L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </section>



    <!-- Bagian Program Keahlian -->
    <section id="progkal" class="py-12 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-8 text-gray-800">PROGRAM KEAHLIAN</h2>
            <p class="text-lg mb-12 text-gray-600">Berbagai program keahlian untuk mempersiapkan tenaga ahli di bidang
                masing-masing</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <img src="assets/images/tbsm.png" alt="TBSM" class="mx-auto mb-4 w-2/3">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Teknik Bisnis Sepeda Motor</h4>
                    <p class="text-gray-600">Menghasilkan tenaga bersertifikasi dan kompeten untuk mengisi lowongan
                        kerja di Teknik Otomotif Sepeda Motor.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <img src="assets/images/tkj.png" alt="TKJ" class="mx-auto mb-4 w-2/3">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Teknik Komputer dan Jaringan</h4>
                    <p class="text-gray-600">Menghasilkan tenaga bersertifikasi dan kompetensi untuk mengisi lowongan
                        kerja di Bidang Teknik Informatika dan Komputer.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <img src="assets/images/rpl.png" alt="RPL" class="mx-auto mb-4 w-2/3">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Rekayasa Perangkat Lunak</h4>
                    <p class="text-gray-600">Menghasilkan tenaga bersertifikasi dan kompetensi di bidang Rekayasa
                        Perangkat Lunak.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <img src="assets/images/anm.png" alt="Animasi" class="mx-auto mb-4 w-2/3">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Animasi</h4>
                    <p class="text-gray-600">Menghasilkan tenaga kerja yang berkompeten untuk mengisi lowongan kerja di
                        bidang Animasi.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Bagian Visi Misi -->
    <section id="visimisi" class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-red-500 mb-12">VISI DAN MISI</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <div class="text-left">
                    <h4 class="text-2xl font-semibold text-red-500 mb-6">Visi Sekolah</h4>
                    <p class="text-lg text-gray-700 mb-6">
                        MEWUJUDKAN LEMBAGA PENDIDIKAN DAN PELATIHAN KEJURUAN, YANG MENGHASILKAN LULUSAN YANG BERAKHLAK
                        MULIA.
                    </p>
                    <h4 class="text-2xl font-semibold text-red-500 mt-8 mb-6">Misi Sekolah</h4>
                    <ul class="list-decimal list-inside text-lg text-gray-700 space-y-3">
                        <li>Mewujudkan Tenaga Pendidik yang berbudi pekerti.</li>
                        <li>Mengelola manajemen sekolah dengan standar ISO 9001:2015.</li>
                        <li>Melaksanakan sistem pendidikan dengan teknologi informasi.</li>
                        <li>Mewujudkan lingkungan sekolah adiwiyata.</li>
                    </ul>
                </div>
                <div class="flex justify-center">
                    <img src="assets/images/target.png" alt="Target" class="w-2/3 shadow-xl rounded-lg">
                </div>
            </div>
        </div>
    </section>


    <!-- Bagian Contact -->
    <section id="contact" class="py-12 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold text-red-500 mb-8">HUBUNGI KAMI</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <img src="assets/images/contact-us.png" alt="Contact Us"
                        class="mx-auto rounded-lg shadow-md max-w-xs md:max-w-md">
                </div>
                <div>
                    <form action="proses.php" method="post" class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
                        <h3 class="text-lg font-semibold text-red-500 mb-6">Formulir Kontak</h3>
                        <div class="mb-4">
                            <label for="noktp" class="block text-left font-medium text-gray-700 mb-2">No KTP</label>
                            <input type="number" id="noktp" name="noktp"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                                placeholder="Masukkan No KTP Anda">
                        </div>
                        <div class="mb-4">
                            <label for="nohp" class="block text-left font-medium text-gray-700 mb-2">No
                                Handphone</label>
                            <input type="number" id="nohp" name="nohp"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                                placeholder="Masukkan No HP Anda">
                        </div>
                        <div class="mb-4">
                            <label for="nm" class="block text-left font-medium text-gray-700 mb-2">Nama</label>
                            <input type="text" id="nm" name="nm"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                                placeholder="Masukkan Nama Anda">
                        </div>
                        <div class="mb-4">
                            <label for="alm" class="block text-left font-medium text-gray-700 mb-2">Alamat</label>
                            <textarea id="alm" name="alm"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                                rows="3" placeholder="Masukkan Alamat Anda"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-red-500 text-white py-2 rounded-lg w-full hover:bg-red-600 transition duration-300">Kirim
                            Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- Bagian Footer -->
    <section id="footer" class="py-4 bg-red-500 text-white">
        <div class="container mx-auto text-center">
            <p>Buku Tamu Tim Vito &copy; 2024-2025 </p>
        </div>
    </section>
</body>

</html>