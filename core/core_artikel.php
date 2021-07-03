<?php

require_once '../config/config.php';
 
if (!isset($_SESSION['login'])) {
  echo "<script>alert('Anda Tidak punya Akses')</script>";
  echo "<script>window.location = '".BASE_URL."'</script>";
}

if (isset($_POST['tambah_artikel'])) {
  $judul = $_POST['judul'];
  $artikel = $_POST['artikel'];
  $date = date('Y-m-d');
  $user = $_SESSION['id_penulis'];

  $data = [
    'judul_artikel'=>$judul,
    'isi_artikel'=>$artikel,
    'id_penulis'=>$user,
    'tanggal'=>$date
  ];
  // var_dump($_POST);
  $query = insertData($conn,'tb_artikel',$data);
  if (mysqli_affected_rows($conn)) {
    // echo "Berhasil ditambahkann";
    echo "<script>alert('Berhasil ditambahkan')</script>";
    echo "<script>window.location = '".BASE_URL."penulis/tambah.php'</script>";
  }
}
if (isset($_POST['ubah_artikel'])) {
  $id = $_POST['id'];
  $judul = $_POST['judul'];
  $artikel = $_POST['artikel'];
  $user = $_SESSION['id_penulis'];

  $data = [
    'judul_artikel'=>$judul,
    'isi_artikel'=>$artikel
  ];
  // var_dump($_POST);
  $query = updateData($conn,'tb_artikel',$data,['id'=>$id]);
  if (mysqli_affected_rows($conn)) {
    echo "<script>alert('Berhasil diubah')</script>";
    echo "<script>window.location = '".BASE_URL."penulis/ubah.php?id=".$id."'</script>";
    // echo mysqli_error($conn);
  } else {
    echo "<script>alert('Tidak ada perubahan')</script>";
    echo "<script>window.location = '".BASE_URL."penulis/ubah.php?id=".$id."'</script>";
  }
}
if (isset($_GET['hapus'])) {
  $id = $_GET['hapus'];

  $query = deleteItem($conn,'tb_artikel',['id'=>$id]);
  if (mysqli_affected_rows($query)) {
    echo "<script>alert('Berhasil dihapus')</script>";
    echo "<script>window.location = '".BASE_URL."penulis/kelolaartikel.php'</script>";
  }
}