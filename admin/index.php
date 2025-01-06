<?php
    session_start();
    include '../koneksi.php';

    if(!isset($_SESSION['admin']))
    {
        echo "<script>alert('Anda harus login dahulu');</script>";
        echo "<script>location='login.php';</script>";
        exit();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Admin Buku Tamu</title>
  </head>
  <body class="bg-gray-100">
      <!-- Navbar -->
      <nav class="bg-blue-600 fixed w-full top-0 left-0 shadow-lg z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
          <a class="text-white text-2xl font-semibold flex items-center" href="#">
            <i class="fas fa-book-open mr-3"></i>
            <span>SELAMAT DATANG ADMIN | <b>BUKU TAMU</b></span>
          </a>
        </div>
      </nav>

      <!-- Main Content -->
      <div class="flex mt-24">
        <!-- Sidebar -->
        <div class="w-1/4 bg-gray-800 p-6 shadow-lg">
          <ul class="space-y-6">
              <li>
                 <a class="text-white text-lg hover:bg-blue-700 px-4 py-2 rounded-md transition duration-300" href="index.php">
                    <i class="fas fa-home mr-3"></i>Home
                 </a>
              </li>
              <li>
                 <a class="text-white text-lg hover:bg-blue-700 px-4 py-2 rounded-md transition duration-300" href="index.php?halaman=datatamu">
                    <i class="fas fa-users mr-3"></i>Data Tamu
                 </a>
              </li>
              <li>
                 <a class="text-white text-lg hover:bg-blue-700 px-4 py-2 rounded-md transition duration-300" href="index.php?halaman=logout">
                    <i class="fas fa-sign-out-alt mr-3"></i>Logout
                 </a>
              </li>
          </ul>
        </div>

        <!-- Content Area -->
        <div class="flex-1 p-6 bg-white shadow-lg rounded-lg m-6">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Dashboard</h2>
            <div class="space-y-6">
                <?php
                    if(isset($_GET['halaman'])){
                        if($_GET['halaman']=="datatamu")
                            {
                                include 'datatamu.php';
                            }elseif($_GET['halaman']=="logout")
                            {
                                include 'logout.php';
                            }elseif($_GET['halaman']=="ubahdatatamu"){
                                include 'ubahdatatamu.php';
                            }elseif($_GET['halaman']=="hapusdatatamu"){
                                include 'hapusdatatamu.php';
                            }
                    }else{
                        include 'home.php';
                    }
                ?>
            </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- Font Awesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
  </body>
</html>
