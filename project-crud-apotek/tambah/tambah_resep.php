<?php

// panggil koneksi
include '../config.php';

if (isset($_POST["submit"])) {
    $no_resep = $_POST["no_resep"];
    $tgl_resep = $_POST["tgl_resep"];
    $kode_dokter = $_POST["kode_dokter"];
    $kode_pasien = $_POST["kode_pasien"];
    $kode_poli = $_POST["kode_poli"];
    $total_harga = $_POST["total_harga"];

    $query = mysqli_query($conn, "INSERT INTO `t_resep` VALUES ('$no_resep', '$tgl_resep','$kode_dokter', '$kode_pasien', '$kode_poli', '$total_harga)");


    if ($query) {
        header('location: ../resep.php');
        echo "<script>alert('Data Berhasil Ditambah!');</script>";
    } else {
        header('location: tambah_resep.php');
        echo "<script>alert('Data Gagal Ditambah!');</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Apotek</title>
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">Tambah data</h1>

    <div class="container pt-4">

        <form action="" method="POST">

            <div class="form-group">
                <label for="nama">No Resep</label>
                <input type="text" class="form-control" id="no_resep" name="no_resep">
            </div>

            <div class="form-group">
                <label for="alamat">Tanggal Resep</label>
                <input type="date" class="form-control" id="tgl_resep" name="tgl_resep">
            </div>

            <div class="form-group">
                <label for="alamat">Kode Dokter</label>
                <input type="text" class="form-control" id="kode_dokter" name="kode_dokter">
            </div>

            <div class="form-group">
                <label for="telepon">Kode Pasien</label>
                <input type="text" class="form-control" id="kode_pasien" name="kode_pasien">
            </div>

            <div class="form-group">
                <label for="spesialis">Kode Poli</label>
                <input type="text" class="form-control" id="kode_poli" name="kode_poli">
            </div>

            <div class="form-group">
                <label for="kode_poli">Total Harga</label>
                <input type="text" class="form-control" id="total_harga" name="total_harga">
            </div>

            <a href="../resep.php">
                < Kembali</a>
                    <button type="submit" name="submit" class="btn btn-primary float-right">Tambah</button>
        </form>

    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
