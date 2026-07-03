<?php
include 'koneksi.php';

$id_pesan = isset($_GET['id']) ? intval($_GET['id']) : 0;

// PERBAIKAN: masukkan variabel ke dalam query
$query_data = "SELECT * FROM pesan WHERE id='$id_pesan'";
$hasil = mysqli_query($koneksi, $query_data);
$data_lama = mysqli_fetch_assoc($hasil);

if (!$data_lama) {
    die("Data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesan</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h2 style="color: #007BFF; text-align:center;">Edit Pesan</h2>

    <div class="container">
        <div class="kotak-form">
            <form action="proses.php" method="POST">
                
                <input type="hidden" name="id" value="<?= $data_lama['id'] ?>">
                
                <label>Nama</label>
                <input type="text" value="<?= htmlspecialchars($data_lama['nama']) ?>" readonly style="background-color: #eee;">

                <label>Email</label>
                <input type="text" value="<?= htmlspecialchars($data_lama['email']) ?>" readonly style="background-color: #eee;">

                <label style="color: green; font-size: 16px;">Edit Pesan Anda</label>

               
                <textarea name="edit_pesan" required placeholder="Ketik ulang pesan anda disini" style="width:100%; padding:10px; border-radius:5px; border:1px solid #ccc; min-height:100px;"><?= htmlspecialchars($data_lama['pesan']) ?></textarea>

                <button type="submit" name="btn_edit_pesan" style="background-color: green; margin-top:10px; padding:10px 20px; color:white; border:none; border-radius:5px; cursor:pointer;">Simpan Pesan</button>

                <a href="dashboard.php" style="display:block; text-align:center; margin-top:10px; color: red; font-size: 13px; text-decoration: none; font-family: inherit;"><b>Batal & kembali</b></a>
            </form>
        </div>
    </div>
</body>
</html>
