<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tabel Dokter</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>

<body>

    <h1 class="text-center">Tabel Dokter</h1>


    <div class="container">
        <a href="index.php">
            < Kembali</a>
                <a href="tambah/tambah_dokter.php" class="btn btn-primary float-right">Tambah Data</a>
                <br><br>
                <table class="table table-sm" align="center">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Kode Dokter</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Spesialis</th>
                            <th scope="col">Kode Poli</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <?php

                            include "config.php";
                            $dokter = "SELECT * FROM `t_dokter`";

                            $result = mysqli_query($conn, $dokter);
                            ?>

                            <?php while ($hasil = mysqli_fetch_assoc($result)) : ?>
                                <td><?= $hasil['kode_dokter']; ?></td>
                                <td><?= $hasil['nama']; ?></td>
                                <td><?= $hasil['alamat']; ?></td>
                                <td><?= $hasil['telepon']; ?></td>
                                <td><?= $hasil['spesialis']; ?></td>
                                <td><?= $hasil['kode_poli']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
    </div>
</body>

</html>