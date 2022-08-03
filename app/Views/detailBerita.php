<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Carousel -->
  <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="./OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- My Css -->
  <link rel="stylesheet" href="./assets/style.css" />

  <title>Kejayaan</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg main-nav">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: black;"><img src="./assets/images/logo_tanggamus-remove.png" alt=""
          width="35" height="40" /> Pekon Kejayaan</a>

      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse menu-nav" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="./index.html">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./profil.html">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./Berita.html">Berita</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="./login.html">Login</a>
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
  <!-- <div class="container-fluid jumbotron">
      <div class="row main-content-1 ">
        <div class="col-sm-6 mt-5 text-center">
          <h3>Visi</h3>
          <ul>
            <li class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, obcaecati, distinctio assumenda aut commodi velit harum cupiditate cum tenetur quam ducimus sequi numquam, fuga odit? Eum velit ipsum assumenda dolorum.</li>
          </ul>
        </div>
        <div class="col-sm-6  mt-5 text-center ">
          <h3>Misi</h3>
          <ul >
            <li class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam neque, laborum at libero veniam ratione odio nisi maiores rem vero et aspernatur itaque repellat enim debitis facere non tempora? Quibusdam.</li>
          </ul>
        </div>
      </div>
    </div> -->
  <!-- tutup konten 1 -->

  <!-- Artikel  -->
  <div class="container mx-auto mt-5 mb-5 news" style="border: 2px solid rgb(241,243,255);">
    <h3 class="text-center" style="border-bottom: 3px solid #f1f3ff;"><?= $artikel['judul'];?></h3>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8 text-center">
        <img src="./assets/images/<?= $artikel['gambar'];?>" alt="" class="mt-5"
          style="border: 20px solid #f1f3ff; border-radius: 20px;">
        <p style="text-align: justify;" class="mt-4"><?= $artikel['isi'];?></p>
      </div>
      <div class="col-2"></div>
    </div>

  </div>
  </div>
  <!-- Artikel Tutup -->

  <!-- konten 2 -->
  <!-- <div class="container main-content-2 mt-5 mb-5" id="OurServices">
      <div class="">
        <div class="row">
          <h2 class="text-center">Lokasi Pekon Kejayaan</h2>
          <div class="col-sm-12 text-center m-auto mt-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31777.659512714297!2d104.76478430414662!3d-5.385319700005683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4724cec6c6c5f9%3A0xbc30ffdc5153d21e!2sKejayaan%2C%20Kec.%20Talang%20Padang%2C%20Kabupaten%20Tanggamus%2C%20Lampung!5e0!3m2!1sid!2sid!4v1659368366933!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          
        </div>
      </div>
    </div> -->
  <!-- tutup konten 2 -->

  <!-- Card -->
  <div class="container-fluid">

  </div>
  <!-- Card Close -->

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
            <img src="./assets/images/icon_instagram.png" width="32px" height="32px" alt="" />
          </li>
          <li>
            <img src="./assets/images/icon_twitter.png" width="32px" height="32px" alt="" />
          </li>
          <li>
            <img src="./assets/images/icon_mail.png" width="32px" height="32px" alt="" />
          </li>
          <li>
            <img src="./assets/images/icon_twitch.png" width="32px" height="32px" alt="" />
          </li>
        </ul>
      </div>
      <div class="col-3">
        <p>Copyright Binar 2022</p>
        <img src="./assets/images/Rectangle 74.png" width="100px" height="34px" alt="" />
      </div>
    </div>
  </div>
  <!-- footer -->
</body>

</html>