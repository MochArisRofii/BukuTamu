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
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg">
            <div class="text-center mb-6">
                <h2 class="text-3xl font-bold text-red-600">Login Buku Tamu</h2>
            </div>
            <form method="post">
                <div class="mb-4">
                    <label for="user" class="block text-gray-700 font-semibold">Username</label>
                    <div class="mt-2 relative">
                        <input type="text" id="user" name="user" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan Username">
                        <span class="absolute left-3 top-2 text-gray-500"><i class="fas fa-user"></i></span>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="pass" class="block text-gray-700 font-semibold">Password</label>
                    <div class="mt-2 relative">
                        <input type="password" id="pass" name="pass" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan Password">
                        <span class="absolute left-3 top-2 text-gray-500"><i class="fas fa-lock"></i></span>
                    </div>
                </div>

                <button type="submit" name="login" class="w-full py-2 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600 transition duration-300">LOGIN!</button>
            </form>

            <?php
                session_start();
                // koneksi ke database
                include '../koneksi.php';

                if (isset($_POST['login'])) {
                    $usr = mysqli_real_escape_string($config, $_POST['user']);
                    $pwd = mysqli_real_escape_string($config, $_POST['pass']);
                    $ambil = mysqli_query($config, "SELECT * FROM admin WHERE username='$usr' AND password='$pwd'");

                    $cocokkan = mysqli_num_rows($ambil);
                    if ($cocokkan == 1) {
                        $_SESSION['admin'] = mysqli_fetch_assoc($ambil);
                        echo "<div class='alert alert-info text-center mt-4 text-blue-600'>Login Sukses</div>";
                        echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                    } else {
                        echo "<div class='alert alert-danger text-center mt-4 text-red-600'>Login Gagal</div>";
                        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
                    }
                }
            ?>

        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </body>
</html>
