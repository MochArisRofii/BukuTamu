<?php
    include 'koneksi.php';

    // membuat variabel untuk memanggil elemen form
    // dan mengambil nilainya

    $ktp = $_POST['noktp'];
    $hp = $_POST['nohp'];
    $nama = $_POST['nm'];
    $alamat = $_POST['alm'];
    $keperluan = $_POST['kpl'];


    $query = mysqli_query($config, "INSERT INTO tamu VALUES ('$ktp','$hp','$nama','$alamat', '$keperluan')");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="text-center bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <img src="assets/images/head.png" alt="Logo" class="mx-auto mb-6 w-40">
            <h2 class="text-2xl font-semibold text-green-600 mb-4">TERIMA KASIH TELAH MENGISI BUKU TAMU!</h2>
            <a href="index.php" class="bg-yellow-500 text-white py-2 px-6 rounded-full font-semibold hover:bg-yellow-600 transition duration-300">OK</a>
        </div>
    </div>

</body>
</html>
