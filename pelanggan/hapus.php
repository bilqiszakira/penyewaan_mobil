<?php include '../auth/cek_login.php';include '../koneksi.php';$id=(int)($_GET['id']??0);mysqli_query($conn,"DELETE FROM pelanggan WHERE id=$id");header('Location: index.php');exit;?>
