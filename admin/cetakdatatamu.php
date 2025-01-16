<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Tamu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-4">
        <div class="text-center mb-6">
            <h2 class="text-3xl font-bold text-gray-700">Laporan Data Tamu</h2>
        </div>

        <div class="overflow-x-auto shadow-lg rounded-lg">
            <table class="min-w-full bg-white border border-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-2 px-4 text-left border-b">No</th>
                        <th class="py-2 px-4 text-left border-b">No KTP</th>
                        <th class="py-2 px-4 text-left border-b">No HP</th>
                        <th class="py-2 px-4 text-left border-b">Nama</th>
                        <th class="py-2 px-4 text-left border-b">Alamat</th>
                        <th class="py-2 px-4 text-left border-b">Keperluan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../koneksi.php';
                    $sql = mysqli_query($config, "SELECT * FROM tamu");
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td class="py-2 px-4 border-b"><?php echo $nomor; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $data['noktp']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $data['nohp']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $data['nama']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $data['alamat']; ?></td>
                            <td class="py-2 px-4 border-b"><?php echo $data['keperluan']; ?></td>
                        </tr>
                    <?php
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="mt-6 text-center">
            <button onclick="window.print()" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none">Cetak Laporan</button>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>
</html>
