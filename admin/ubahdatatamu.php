<h2 class="text-2xl font-semibold mb-4">Ubah Data Tamu</h2>
<hr class="mb-6">
<?php
$nktp = mysqli_query($config, "select * from tamu where noktp='$_GET[id]'");
$data = mysqli_fetch_assoc($nktp);
?>
<form method="post" class="space-y-4">
    <!-- No KTP -->
    <div class="form-group">
        <label for="noktp" class="block text-sm font-medium text-gray-700">No KTP</label>
        <input type="number" class="form-control w-full p-2 rounded-md border border-gray-300" name="noktp" readonly
            value="<?php echo $data['noktp'] ?>" id="noktp">
    </div>

    <!-- No Handphone -->
    <div class="form-group">
        <label for="nohp" class="block text-sm font-medium text-gray-700">No Handphone</label>
        <input type="number" class="form-control w-full p-2 rounded-md border border-gray-300" name="nohp"
            value="<?php echo $data['nohp'] ?>" id="nohp">
    </div>

    <!-- Nama -->
    <div class="form-group">
        <label for="nm" class="block text-sm font-medium text-gray-700">Nama</label>
        <input type="text" class="form-control w-full p-2 rounded-md border border-gray-300" name="nm"
            value="<?php echo $data['nama'] ?>" id="nm">
    </div>

    <!-- Alamat -->
    <div class="form-group">
        <label for="alm" class="block text-sm font-medium text-gray-700">Alamat</label>
        <textarea class="form-control w-full p-2 rounded-md border border-gray-300" rows="3" name="alm"
            id="alm"><?php echo $data['alamat'] ?></textarea>
    </div>

    <div class="form-group">
        <label for="kpl" class="block text-sm font-medium text-gray-700">Keperluan</label>
        <input type="text" class="form-control w-full p-2 rounded-md border border-gray-300" name="kpl"
            value="<?php echo $data['keperluan'] ?>" id="nm">
    </div>

    <!-- Submit Button -->
    <button type="submit" name="ubahdata"
        class="btn bg-blue-500 text-white w-full py-2 rounded-md hover:bg-blue-600 transition duration-300">UPDATE
        DATA</button>
</form>

<?php
if (isset($_POST['ubahdata'])) {
    $sql = mysqli_query($config, "UPDATE tamu SET nohp='$_POST[nohp]', nama='$_POST[nm]', alamat='$_POST[alm]', keperluan='$_POST[kpl]' WHERE noktp='$_GET[id]'");
    echo "<script>alert('Data berhasil di update');</script>";
    echo "<script>location='index.php?halaman=datatamu';</script>";
}
?>