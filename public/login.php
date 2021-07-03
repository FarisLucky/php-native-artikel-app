<?php require_once "../config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fox University - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/animate.css">

  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/magnific-popup.css">

  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/aos.css">

  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/ionicons.min.css">

  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/flaticon.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/icomoon.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/datatables/datatables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/sweetalert/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>

<body>
  <div class="bg-top navbar-light">
    <div class="container">
      <div class="row no-gutters d-flex align-items-center align-items-stretch">
        <div class="col-md-4 d-flex align-items-center py-4">
          <a class="navbar-brand" href="index.html">Fox. <span>University</span></a>
        </div>
        <div class="col-lg-8 d-block">
          <div class="row d-flex">
            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
              <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span>
              </div>
              <div class="text">
                <span>Email</span>
                <span>youremail@email.com</span>
              </div>
            </div>
            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
              <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
              <div class="text">
                <span>Call</span>
                <span>Call Us: + 1235 2355 98</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center px-4">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <form action="#" class="searchform order-lg-last">
        <div class="form-group d-flex">
          <input type="text" class="form-control pl-3" placeholder="Search">
          <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
        </div>
      </form>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"><a href="<?= BASE_URL ?>" class="nav-link pl-0">Home</a></li>
          <?php if (isset($_SESSION['login'])) { ?>
          <li class="nav-item"><a href="<?= BASE_URL ?>penulis/kelolaartikel.php" class="nav-link">Kelola Artikel</a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <section id="registrasi">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 pt-3">
          <h5 class="text-center">Ayo Login !</h5>
        </div>
      </div>
      <?php if (isset($_GET['gagal'])) { ?>
      <div class="alert alert-danger">
        <?= $_GET['gagal'] ?>
      </div>
      <?php } ?>
      <div class="row justify-content-center">
        <div class="col-sm-8 p-4 pt-2">
          <div class="card">
            <div class="card-body">
              <form action="<?= BASE_URL ?>core/core_registrasi.php" method="POST">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="txt_user" class="form-control" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="txt_pass" class="form-control" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="login" class="btn btn-primary pl-2">Simpan</button>
                    </div>
                    <div class="form-group">
                      <a href="<?= BASE_URL ?>public/register.php" class="float-right">daftar jadi penulis</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San
                    Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span
                      class="text">info@yourdomain.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Recent Blog</h2>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-5 d-flex">
              <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
              <div class="text">
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
              <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Subscribe Us!</h2>
            <form action="#" class="subscribe-form">
              <div class="form-group">
                <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="form-control submit px-3">
              </div>
            </form>
          </div>
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
            document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by
            <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div>


  <script src="<?= BASE_URL ?>assets/js/jquery.min.js"></script>
  <script src="<?= BASE_URL ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= BASE_URL ?>assets/js/popper.min.js"></script>
  <script src="<?= BASE_URL ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= BASE_URL ?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?= BASE_URL ?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?= BASE_URL ?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?= BASE_URL ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?= BASE_URL ?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= BASE_URL ?>assets/js/aos.js"></script>
  <script src="<?= BASE_URL ?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?= BASE_URL ?>assets/js/scrollax.min.js"></script>
  <script src="<?= BASE_URL ?>assets/js/google-map.js"></script>
  <script src="<?= BASE_URL ?>assets/js/main.js"></script>
  <script src="<?= BASE_URL ?>assets/sweetalert/sweetalert2.all.min.js"></script>
  <script src="<?= BASE_URL ?>assets/datatables/datatables.min.js"></script>
  <script type="text/javascript">
  $('#tbl_tables').DataTable({
    responsive: true
  })
  let sukses = $(".notif").attr("data-success");
  let failed = $(".notif").attr("data-failed");
  if (!!sukses) {
    console.log(sukses);
    Swal({
      title: "Berhasil",
      text: sukses,
      type: "success"
    })
  }
  if (!!failed) {
    console.log(sukses);
    Swal({
      title: "Gagal",
      text: failed,
      type: "error"
    })
  }
  </script>

</body>

</html>