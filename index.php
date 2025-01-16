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
    <nav class="bg-gradient-to-r from-black via-yellow-500 to-yellow-600 fixed w-full z-20 top-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <!-- Nama Buku Tamu tanpa logo -->
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Buku Tamu Oyitok</span>

            <!-- Menu items di sebelah kanan -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
                    <li>
                        <a href="#"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-yellow-500 md:hover:bg-transparent md:hover:text-yellow-500 md:p-0 md:dark:hover:text-yellow-500 dark:hover:bg-yellow-500 dark:hover:text-white"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#progkal"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-yellow-500 md:hover:bg-transparent md:hover:text-yellow-500 md:p-0 md:dark:hover:text-yellow-500 dark:hover:bg-yellow-500 dark:hover:text-white">Kompetensi
                            Keahlian</a>
                    </li>
                    <li>
                        <a href="#visimisi"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-yellow-500 md:hover:bg-transparent md:hover:text-yellow-500 md:p-0 md:dark:hover:text-yellow-500 dark:hover:bg-yellow-500 dark:hover:text-white">Visi
                            Misi Value</a>
                    </li>
                    <li>
                        <a href="#contact"
                            class="inline-block py-2 px-3 text-white rounded hover:bg-yellow-500 md:hover:bg-transparent md:hover:text-yellow-500 md:p-0 md:dark:hover:text-yellow-500 dark:hover:bg-yellow-500 dark:hover:text-white">Hubungi
                            Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Bagian Banner -->
    <section id="banner" class="relative bg-gradient-to-r from-black via-yellow-500 to-yellow-600 text-white pb-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between py-12 banner-text">
            <div class="text-center md:text-left">
                <h4 class="text-3xl font-bold mb-4">Selamat Datang Di Buku Tamu Oyitok Group</h4>
                <p class="text-lg">Terima Kasih Telah Berkunjung di Buku Tamu Kami</p>
            </div>
            <img src="assets/images/headOyitok.png" alt="Banner" class="w-2/3 md:w-1/3 mt-4 md:mt-0">
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
            <h2 class="text-3xl font-bold mb-8 text-gray-800">KOMPETENSI KEAHLIAN</h2>
            <p class="text-lg mb-12 text-gray-600">Mereka menawarkan berbagai program yang berfokus pada pengembangan
                kompetensi keahlian, terutama melalui program magang dan praktik kerja lapangan (Prakerin). Berikut
                beberapa program yang mereka tawarkan:</p>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Program Prakerin</h4>
                    <p class="text-gray-600">Ditujukan untuk siswa SMK, program ini memberikan pelatihan soft skill dan
                        hard skill sebagai persiapan memasuki dunia kerja. Oyitok Group telah bekerja sama dengan
                        beberapa SMK di Jawa Timur untuk program ini.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Program Magang Pasca Prakerin</h4>
                    <p class="text-gray-600">Bagi siswa yang lulus seleksi Prakerin, program ini bertujuan meningkatkan
                        kesadaran dan kemampuan individu, serta melatih kepemimpinan dan kompetensi mereka.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Program Probation</h4>
                    <p class="text-gray-600">Setelah lulus sekolah dan sepakat melanjutkan kerja sama, siswa memasuki
                        masa probation untuk mendapatkan pola pikir dan keahlian yang lebih tinggi, sekaligus sebagai
                        masa percobaan sebelum kontrak kerja ditetapkan.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg transition transform hover:scale-105 hover:shadow-xl">
                    <h4 class="text-xl font-semibold text-gray-800 mb-2">Program Magang Manajemen</h4>
                    <p class="text-gray-600">Diberikan kepada individu dengan kesadaran tinggi dan keselarasan misi
                        dengan organisasi, berorientasi pada keberhasilan dan kesejahteraan bersama dalam jangka
                        panjang.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Bagian Visi Misi -->
    <section id="visimisi" class="py-16 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-12 text-gray-800">Visi, Misi, dan Value</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <!-- Visi dan Misi -->
                <div class="text-left space-y-8">
                    <!-- Visi -->
                    <div>
                        <h4 class="text-2xl font-semibold text-gray-800 mb-4">Visi</h4>
                        <p class="text-lg text-gray-700">
                            Mitra Usaha terpercaya yang berorientasi kepada pemberdayaan dan kebermanfaatan generasi
                            muda INDONESIA.
                        </p>
                    </div>

                    <!-- Misi dan Nilai -->
                    <div>
                        <h4 class="text-2xl font-semibold text-gray-800 mb-4">Misi</h4>
                        <ul class="list-decimal list-inside text-lg text-gray-700 space-y-3">
                            <li>
                                Memberikan layanan yang berorientasi pada kepuasan Pelanggan dan Mitra Meningkatkan
                                kualitas produk dan layanan secara terus menerus.
                            </li>
                            <li>
                                Menjaga kepercayaan dengan menjunjung tinggi komitmen.
                            </li>
                            <li>
                                Melibatkan lingkungan dalam menjalankan aktivitas usaha.
                            </li>
                            <li>
                                Menjadi salah satu tempat belajar generasi muda.
                            </li>
                        </ul>

                        <!-- Nilai Perusahaan -->
                        <h4 class="text-2xl font-semibold text-gray-800 mb-4 mt-8">Value</h4>
                        <p class="text-lg text-gray-700">RESPECT, FOCUS, LEARN AND GROWTH, OPENNESS, COURAGE</p>
                    </div>
                </div>

                <!-- Gambar -->
                <div class="flex justify-center">
                    <img src="assets/images/visimisi.png" alt="Visi Misi"
                        class="w-full md:w-3/4 lg:w-2/3 h-auto object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Contact -->
    <section id="contact" class="py-12 bg-gray-50">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-semibold text-gray-700 mb-8">HUBUNGI KAMI</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <img src="assets/images/contact-us.png" alt="Contact Us"
                        class="mx-auto rounded-lg shadow-md max-w-xs md:max-w-md">
                </div>
                <div>
                    <form action="proses.php" method="post" class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
                        <h3 class="text-lg font-semibold text-gray-700 mb-6">Formulir Kontak</h3>
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
                        <div class="mb-4">
                            <label for="kpl" class="block text-left font-medium text-gray-700 mb-2">Keperluan</label>
                            <input type="text" id="kpl" name="kpl"
                                class="w-full border border-gray-300 px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                                placeholder="Masukkan Keperluan Anda?">
                        </div>
                        <button type="submit"
                            class="bg-gradient-to-r from-black via-yellow-500 to-yellow-600 text-white py-2 rounded-lg w-full hover:bg-red-600 transition duration-300">Kirim
                            Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- Bagian Footer -->
    <section id="footer" class="py-4 bg-gradient-to-r from-black via-yellow-500 to-yellow-600 text-white">
        <div class="container mx-auto text-center">
            <p>Buku Tamu Tim Vito &copy; 2024-2025</p>
        </div>
    </section>
</body>

</html>