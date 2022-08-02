<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Carousel -->
    <link
      rel="stylesheet"
      href="./OwlCarousel2-2.3.4/dist/assets/images/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="./OwlCarousel2-2.3.4/dist/assets/images/owl.theme.default.min.css"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- My Css -->
    <link rel="stylesheet" href="./assets/style.css" />

    <title>Kejayaan</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg main-nav">
      <div class="container">
        <a class="navbar-brand" href="#" style="color: black;"
          ><img
            src="./assets/images/logo_tanggamus-remove.png"
            alt=""
            width="35"
            height="40"
        /> Pekon Kejayaan</a>
        
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse menu-nav" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('')?>">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-primary" href="login">Login</a>
            </li>
            <!-- <li class="nav-item">
              <a class="btn nav-button">Register</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- tutup navbar -->

    <!-- konten 1 -->
    <div class="container-fluid jumbotron">
      <div class="row" style="height: 414px;">
        <div class="col-sm-6 main-content ps-5 ">
          <h1>Selamat Datang di Website</h1>
          <h1>
            Pekon Kejayaan
          </h1>
          <p class="pt-3 fw-light" >Pekon Kejayaan merupakan salah satu pekon yang terletak di<br> Kecamatan Talang Padang  Kabupaten Tanggamus</p>
        </div>
        <div class="col-sm-4 mt-5">
          <form action="" method="post">

            <?php if (session()->getFlashdata('error')) { ?>
              <div class="pesan_error">
                  <?php echo session()->getFlashdata('error') ?>
              </div>
            <?php } ?>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
              <input type="text" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
         
            <input type="submit" name="login" class="btn btn-primary" value="LOGIN">
          </form>
        </div>
        <div class="col-sm-1"></div>
      </div>
    </div>
    <!-- tutup konten 1 -->

    <!-- footer -->
    <div class="container-fluid footer">
      <div class="row">
        <div class="col-sm-3">
          <p>Jalan Suroyo No. 161 Mayangan Kota Probolonggo 672000</p>
          <p>binarcarrental@gmail.com</p>
          <p>081-233-334-808</p>
        </div>
        <div class="col-sm-3">
          <p>Our services</p>
          <p>Why Us</p>
          <p>timonial</p>
          <p>FAQ</p>
        </div>
        <div class="col-sm-3">
          <p>Connect with us</p>
          <ul class="ps-0">
            <li>
              <i class="fa fa-facebook"></i>
            </li>
            <li>  
              <img
                src="./assets/images/icon_instagram.png"
                width="32px"
                height="32px"
                alt=""
              />
            </li>
            <li>
              <img
                src="./assets/images/icon_twitter.png"
                width="32px"
                height="32px"
                alt=""
              />
            </li>
            <li>
              <img
                src="./assets/images/icon_mail.png"
                width="32px"
                height="32px"
                alt=""
              />
            </li>
            <li>
              <img
                src="./assets/images/icon_twitch.png"
                width="32px"
                height="32px"
                alt=""
              />
            </li>
          </ul>
        </div>
        <div class="col-3">
          <p>Copyright Binar 2022</p>
          <img
            src="./assets/images/Rectangle 74.png"
            width="100px"
            height="34px"
            alt=""
          />
        </div>
      </div>
    </div>
    <!-- footer -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
