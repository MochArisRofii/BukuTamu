<div class="container mx-auto px-4 py-6">
    <h2 class="text-center text-2xl font-semibold mb-4">Data Admin</h2>
    <hr class="mb-6">
    
    <!-- Search Form -->
    

    <!-- Table -->
    <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg">
        <thead class="bg-gray-100 text-gray-700">
            <tr>
                <th class="py-2 px-4 text-left">No</th>
                <th class="py-2 px-4 text-left">Username</th>
                <th class="py-2 px-4 text-left">No HP</th>
                <th class="py-2 px-4 text-left">Nama</th>
                <th class="py-2 px-4 text-left">Alamat</th>
                <th class="py-2 px-4 text-left">Gender</th>
                <th class="py-2 px-4 text-left">Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include '../koneksi.php';
                if(isset($_POST['tombol_cari'])){
                    $input=$_POST['cari'];
                    if($input!=""){;
                        $sql=mysqli_query($config,"SELECT * FROM admin WHERE nama like'%$input%'");
                    }else{
                        $sql=mysqli_query($config,"SELECT * FROM admin");
                    }
                }else{
                    $sql=mysqli_query($config,"SELECT * FROM admin");
                }
                $jumlahrecord=mysqli_num_rows($sql);
                if ($jumlahrecord < 1) {
                    echo "<tr>";
                    echo "<td colspan='6' class='text-center bg-red-500 text-white py-2'>Data tidak ditemukan</td>";
                    echo "</tr>";
                    echo "<meta http-equiv='refresh' content='2;url=index.php?halaman=dataadmin'>";
                } else {
                    $nomor=1;
                    while($data=mysqli_fetch_array($sql)){
                        ?>
                        <tr class="hover:bg-gray-50">
                            <td class="py-2 px-4"><?php echo $nomor; ?></td>
                            <td class="py-2 px-4"><?php echo $data['username']; ?></td>
                            <td class="py-2 px-4"><?php echo $data['nohp']; ?></td>
                            <td class="py-2 px-4"><?php echo $data['nama']; ?></td>
                            <td class="py-2 px-4"><?php echo $data['alamat']; ?></td>
                            <td class="py-2 px-4"><?php echo $data['gender']; ?></td>
                            <td class="py-2 px-4"><?php echo $data['tgllahir']; ?></td>
                        </tr>
                    <?php
                        $nomor++;
                    }
                }
            ?>
        </tbody>
    </table>
</div>
