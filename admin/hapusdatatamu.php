<?php
    $sql=mysqli_query($config,"DELETE from tamu WHERE noktp='$_GET[id]'");

    echo "<script>alert('Data Berhasil Dihapus');</script>";
    echo "<script>location='index.php?halaman=datatamu';</script>";
?>