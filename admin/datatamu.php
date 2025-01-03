<div class="container mx-auto px-4 py-6">
    <h2 class="text-center text-2xl font-semibold mb-4">Data Tamu</h2>
    <hr class="mb-6">
    
    <!-- Search Form -->
    <form method="post" class="flex justify-between mb-4">
        <div class="flex space-x-4">
            <input type="text" class="form-control p-2 rounded-md border border-gray-300" name="cari" placeholder="Ketik Nama..."/>
            <button class="btn bg-green-500 text-white p-2 rounded-md hover:bg-green-600 transition duration-300" name="tombol_cari">Cari</button>
        </div>
        <a href="cetakdatatamu.php" class="btn bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600 transition duration-300" target="_blank">Cetak</a>
    </form>

    <!-- Table -->
    <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="py-2 px-4 text-left">No</th>
                <th class="py-2 px-4 text-left">No KTP</th>
                <th class="py-2 px-4 text-left">No HP</th>
                <th class="py-2 px-4 text-left">Nama</th>
                <th class="py-2 px-4 text-left">Alamat</th>
                <th class="py-2 px-4 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include '../koneksi.php';
                if(isset($_POST['tombol_cari'])){
                    $input=$_POST['cari'];
                    if($input!=""){;
                        $sql=mysqli_query($config,"SELECT * FROM tamu WHERE nama like'%$input%'");
                    }else{
                        $sql=mysqli_query($config,"SELECT * FROM tamu");
                    }
                }else{
                    $sql=mysqli_query($config,"SELECT * FROM tamu");
                }
                $jumlahrecord=mysqli_num_rows($sql);
                if ($jumlahrecord < 1) {
                    echo "<tr>";
                    echo "<td colspan='6' class='text-center bg-red-500 text-white py-2'>Data tidak ditemukan</td>";
                    echo "</tr>";
                    echo "<meta http-equiv='refresh' content='2;url=index.php?halaman=datatamu'>";
                } else {
                    $nomor=1;
                    while($data=mysqli_fetch_array($sql)){
                        ?>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4"><?php echo $nomor; ?></td>
                            <td class="py-2 px-4"><?php echo $data['noktp']; ?></td>
                            <td class="py-2 px-4"><?php echo $data['nohp']; ?></td>
                            <td class="py-2 px-4"><?php echo $data['nama']; ?></td>
                            <td class="py-2 px-4"><?php echo $data['alamat']; ?></td>
                            <td class="py-2 px-4">
                                <a href="index.php?halaman=ubahdatatamu&id=<?php echo $data['noktp'];?>" class="bg-blue-500 text-white py-1 px-3 rounded-md hover:bg-blue-600 transition duration-300">Ubah</a>
                                <a href="index.php?halaman=hapusdatatamu&id=<?php echo $data['noktp'];?>" onclick="return confirm('Apakah data dihapus??')" class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600 transition duration-300 ml-2">Hapus</a>
                            </td>
                        </tr>
                    <?php
                        $nomor++;
                    }
                }
            ?>
        </tbody>
    </table>
</div>
