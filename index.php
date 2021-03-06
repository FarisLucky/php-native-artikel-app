<?php require_once "config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Artikels || App</title>
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
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/custom/css.css">
</head>

<body>
  <div class="bg-top navbar-light">
    <div class="container">
      <div class="row no-gutters d-flex align-items-center align-items-stretch">
        <div class="col-md-4 d-flex align-items-center py-4">
          <a class="navbar-brand" href="index.html">Artikels. <span>App</span></a>
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
            <div class="col-md topper d-flex align-items-center justify-content-end">
              <?php if (!isset($_SESSION['login'])) { ?>
              <p class="mb-0">
                <a href="<?= BASE_URL.'public/login.php' ?>"
                  class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                  <span>Login</span>
                </a>
              </p>
              <?php } else { ?>
              <p class="mb-0">
                <a href="<?= BASE_URL.'public/Logout.php' ?>"
                  class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
                  <span>Logout</span>
                </a>
              </p>
              <?php  }?>
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

  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Temukan Artikel yang Anda Cari</h1>
            <p>Membaca akan membuka wawasan dunia</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Temukan Artikel yang Anda Cari</h1>
            <p>Membaca akan membuka wawasan dunia</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-services ftco-no-pb">
    <div class="container">
      <div class="row justify-content-center my-3">
        <div class="col-md-6">
          <h5 class="text-center">Artikels</h5>
        </div>
      </div>
      <div class="row">
        <?php $artikel = selectAll($conn,'tb_artikel','id','DESC');
        while ($data = mysqli_fetch_assoc($artikel)) { ?>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <p class="card-title float-left"><?= $data['judul_artikel'] ?></p>
                  <small class="card-title float-right px-3 bg-info text-white"><?= $data['id_penulis'] ?></small>
                </div>
              </div>
              <p><?= $data['isi_artikel'] ?></p>
              <div class="row">
                <div class="col-sm-12">
                  <a href="<?= BASE_URL.'penulis/detail.php?id='.$data['id'] ?>" class="btn btn-sm btn-info">Lihat
                    Detail</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container-fluid px-4">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>Our</span> Courses</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary
            regelialia. It is a paradisematic country</p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container-fluid px-4">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4">Certified Teachers</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary
            regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url(images/teacher-1.jpg);"></div>
            </div>
            <div class="text pt-3 text-center">
              <h3>Bianca Wilson</h3>
              <span class="position mb-2">Teacher</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url(images/teacher-2.jpg);"></div>
            </div>
            <div class="text pt-3 text-center">
              <h3>Mitch Parker</h3>
              <span class="position mb-2">English Teacher</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url(images/teacher-3.jpg);"></div>
            </div>
            <div class="text pt-3 text-center">
              <h3>Stella Smith</h3>
              <span class="position mb-2">Art Teacher</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url(images/teacher-4.jpg);"></div>
            </div>
            <div class="text pt-3 text-center">
              <h3>Monshe Henderson</h3>
              <span class="position mb-2">Science Teacher</span>
              <div class="faded">
                <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 py-5 px-md-5">
          <div class="py-md-5">
            <div class="heading-section heading-section-white ftco-animate mb-5">
              <h2 class="mb-4">Request A Quote</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.</p>
            </div>
            <form action="#" class="appointment-form ftco-animate">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Select Your Course</option>
                        <option value="">Art Lesson</option>
                        <option value="">Language Lesson</option>
                        <option value="">Music Lesson</option>
                        <option value="">Sports</option>
                        <option value="">Other Services</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4"><span>Recent</span> Blog</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary
            regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end"
              style="background-image: url('images/image_1.jpg');">
              <div class="meta-date text-center p-2">
                <span class="day">26</span>
                <span class="mos">June</span>
                <span class="yr">2019</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                      class="ion-ios-arrow-round-forward"></span></a></p>
                <p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end"
              style="background-image: url('images/image_2.jpg');">
              <div class="meta-date text-center p-2">
                <span class="day">26</span>
                <span class="mos">June</span>
                <span class="yr">2019</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                      class="ion-ios-arrow-round-forward"></span></a></p>
                <p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 ftco-animate">
          <div class="blog-entry">
            <a href="blog-single.html" class="block-20 d-flex align-items-end"
              style="background-image: url('images/image_3.jpg');">
              <div class="meta-date text-center p-2">
                <span class="day">26</span>
                <span class="mos">June</span>
                <span class="yr">2019</span>
              </div>
            </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span
                      class="ion-ios-arrow-round-forward"></span></a></p>
                <p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <h2 class="mb-4">Student Says About Us</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary
            regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
                  <p class="name">Racky Henderson</p>
                  <span class="position">Father</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
                  <p class="name">Henry Dee</p>
                  <span class="position">Mother</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/teacher-3.jpg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
                  <p class="name">Mark Huff</p>
                  <span class="position">Mother</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/teacher-4.jpg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
                  <p class="name">Rodel Golez</p>
                  <span class="position">Mother</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
                </div>
                <div class="text ml-2">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts.</p>
                  <p class="name">Ken Bosh</p>
                  <span class="position">Mother</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-gallery">
    <div class="container-wrap">
      <div class="row no-gutters">
        <div class="col-md-3 ftco-animate">
          <a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center"
            style="background-image: url(images/course-1.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-3 ftco-animate">
          <a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center"
            style="background-image: url(images/image_2.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-3 ftco-animate">
          <a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center"
            style="background-image: url(images/image_3.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
        </div>
        <div class="col-md-3 ftco-animate">
          <a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center"
            style="background-image: url(images/image_4.jpg);">
            <div class="icon mb-4 d-flex align-items-center justify-content-center">
              <span class="icon-instagram"></span>
            </div>
          </a>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
  </script>
  <script src="<?= BASE_URL ?>assets/js/google-map.js"></script>
  <script src="<?= BASE_URL ?>assets/js/main.js"></script>

</body>

</html>