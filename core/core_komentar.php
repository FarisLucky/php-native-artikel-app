<?php

require_once '../config/config.php';
 
if (!isset($_SESSION['login'])) {
  echo "<script>alert('Anda Tidak punya Akses')</script>";
  echo "<script>window.location = '".BASE_URL."'</script>";
}

if (isset($_POST['tambah_komentar'])) {
  $nama = $_POST['nama'];
  $isi = $_POST['isi'];
  $email = $_POST['email'];

  $data = [
    'nama'=>$judul,
    'isi_komentar'=>$artikel,
    'email'=>$email
  ];
  // var_dump($_POST);
  $query = insertData($conn,'tb_komentar',$data);
  if (mysqli_affected_rows($conn)) {
    // echo "Berhasil ditambahkann";
    $id = mysqli_insert_id($conn);

    // get Insert Id
    // $query = insertData($conn,'tb_detail',$data);
    echo "<script>alert('Berhasil ditambahkan')</script>";
    echo "<script>window.location = '".BASE_URL."penulis/tambah.php'</script>";
  }
}