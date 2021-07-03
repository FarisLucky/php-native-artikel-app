<?php

require_once '../config/config.php';

if (isset($_POST['register'])) {
  $nama = $_POST['txt_nama'];
  $user = $_POST['txt_user'];
  $pass = $_POST['txt_pass'];

  $val_pass = password_hash($pass,PASSWORD_DEFAULT);
  $data = [
    'nama_lengkap'=>$nama,
    'username'=>$user,
    'password'=>$val_pass
  ];
  // var_dump($_POST);
  $query = insertData($conn,'tb_penulis',$data);
  if (mysqli_affected_rows($conn)) {
    // echo "Berhasil ditambahkann";
    // echo mysqli_error($conn);
    echo "<script>alert('Berhasil')</script>";
    echo "<script>window.location = '".BASE_URL."'</script>";
  }
}
if (isset($_POST['login'])) {
  $user = $_POST['txt_user'];
  $pass = $_POST['txt_pass'];

  $get_user = selectWhere($conn,'tb_penulis',['username'=>$user]);
  if (mysqli_num_rows($get_user)) {
    $rs_user = mysqli_fetch_assoc($get_user);
    if (password_verify($pass,$rs_user['password'])) {
      $_SESSION['login'] = true;
      $_SESSION['id_penulis'] = $rs_user['id_penulis'];
      $_SESSION['nama'] = $rs_user['nama_lengkap'];
      header('Location: ../index.php');
    } else {
      header('Location: ../public/login.php?gagal=PasswordSalah');
    }
  } else {
    header('Location: ../public/login.php?gagal=Usertidakditemukan');
  }
}