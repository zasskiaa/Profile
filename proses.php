<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

/* TAMBAH PESAN */
if (isset($_POST['btn-kirim'])) {

    $nama  = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $pesan = trim($_POST['pesan']);

    $query_insert = "INSERT INTO pesan (nama, email, pesan)
                        VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($koneksi, $query_insert);

    if ($stmt) {

        mysqli_stmt_bind_param(
            $stmt,
            "sss",
            $nama,
            $email,
            $pesan
        );

        if (mysqli_stmt_execute($stmt)) {
            header("Location: pesan.php?status=sukses");
            exit();
        } else {
            echo "Gagal menyimpan data: "
                    . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
        } else {
        echo "Prepare gagal: "
                . mysqli_error($koneksi);
    }
}


/* UPDATE PESAN */
if (isset($_POST['btn_edit_pesan'])) {

    $id = intval($_POST['id']);
    $edit_pesan = trim($_POST['edit_pesan']);
    $query_update = "UPDATE pesan SET pesan = ? WHERE id = ?";
    
    $stmt = mysqli_prepare($koneksi, $query_update);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "si", $edit_pesan, $id);
        
        if (mysqli_stmt_execute($stmt)) {
            header('Location: dashboard.php');
            exit();
        } else {
            echo "Gagal mengupdate data: " . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Prepare gagal: " . mysqli_error($koneksi);
    }
}



/* HAPUS PESAN*/
if (
    isset($_POST['aksi']) &&
    $_POST['aksi'] === 'hapus'
) {

    $id = intval($_POST['id']);
    $query_delete = "DELETE FROM pesan WHERE id = ?";

    $stmt = mysqli_prepare(
        $koneksi,
        $query_delete
    );

    if ($stmt) {
        mysqli_stmt_bind_param(
            $stmt,
            "i",
            $id
        );
        
        if (mysqli_stmt_execute($stmt)) {

            header("Location: dashboard.php");
            exit();

        } else {

            echo "Gagal menghapus data: "
                    . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Prepare gagal: "
                . mysqli_error($koneksi);
    }
}
mysqli_close($koneksi);

?>