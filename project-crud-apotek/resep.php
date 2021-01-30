<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tabel Resep</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>

<body>

    <h1 class="text-center">Tabel Resep</h1>


    <div class="container">
        <a href="index.php">
            < Kembali</a>
                <a href="tambah/tambah_resep.php" class="btn btn-primary float-right">Tambah Data</a>
                <br><br>
                <table class="table table-sm" align="center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No Resep</th>
                            <th scope="col">Tanggal Resep</th>
                            <th scope="col">Kode Dokter</th>
                            <th scope="col">Kode Pasien</th>
                            <th scope="col">Kode Poli</th>
                            <th scope="col">Total Harga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <?php

                            include "config.php";
                            $resep = "SELECT * FROM `t_resep`";

                            $result = mysqli_query($conn, $resep);
                            ?>

                            <?php while ($hasil = mysqli_fetch_assoc($result)) : ?>
                                <td><?= $hasil['no_resep']; ?></td>
                                <td><?= $hasil['tgl_resep']; ?></td>
                                <td><?= $hasil['kode_dokter']; ?></td>
                                <td><?= $hasil['kode_pasien']; ?></td>
                                <td><?= $hasil['kode_poli']; ?></td>
                                <td><?= $hasil['total_harga']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
    </div>
</body>

</html>