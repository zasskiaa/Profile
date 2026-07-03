<?php
include 'koneksi.php';
?>

<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pesan</title>
    <link rel="stylesheet" href="assets/dashboard.css">
</head>
<body>

<h2 style="text-align: center;">Dashboard Pesan</h2>

<div class="container">


<div class="kotak-tabel">

    <h3>Daftar Pesan</h3>

    <a href="pesan.php"
       class="btn-kembali">
       + Tambah Pesan Baru
    </a>

    <a href="form.php"
       class="btn-kembali">
       <- Back
    </a>


    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Tanggal Isi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        <?php

        $nomor_urut = 1;

        $query_select =
        "SELECT * FROM pesan ORDER BY id DESC";

        $hasil =
        mysqli_query($koneksi, $query_select);

        while ($baris = mysqli_fetch_assoc($hasil)) :

        ?>

            <tr>

                <td><?= $nomor_urut++; ?></td>

                <td><?= $baris['nama']; ?></td>

                <td><?= $baris['email']; ?></td>

                <td><?= $baris['pesan']; ?></td>
                 <td><?= date("d-m-Y", strtotime($baris['tanggal_isi']));?></td>

 
                <td class="kolom-aksi">
                            <form action="edit.php" method="GET">
    <input type="hidden"
           name="id"
           value="<?= $baris['id']; ?>">

    <button type="submit"
            class="btn_edit_pesan">
        Edit Pesan
    </button>
</form>

<form action="proses.php"
      method="POST"
      onsubmit="return confirm('Yakin ingin menghapus pesan ini?');">

    <input type="hidden"
           name="aksi"
           value="hapus">

    <input type="hidden"
           name="id"
           value="<?= $baris['id']; ?>">

    <button type="submit"
            class="btn-hapus">
        Hapus
    </button>

</form>
                <td class="kolom-aksi">

                    <td class="kolom-aksi">



</td>
                </td>

            </tr>

        <?php endwhile; ?>

        </tbody>
    </table>

</div>


</div>

</body>
</html>
