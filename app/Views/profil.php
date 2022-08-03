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
      <a class="navbar-brand" href="<?= base_url("")?>" style="color: black;"><img
          src="./assets/images/logo_tanggamus-remove.png" alt="" width="35" height="40" /> Pekon Kejayaan</a>

      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse menu-nav" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("")?>">Beranda</a>
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
    <div class="row main-content-1 ">
      <div class="col-sm-6 mt-5 text-center">
        <h3>Visi</h3>
        <ul>
          <li class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, obcaecati, distinctio
            assumenda aut commodi velit harum cupiditate cum tenetur quam ducimus sequi numquam, fuga odit? Eum velit
            ipsum assumenda dolorum.</li>
        </ul>
      </div>
      <div class="col-sm-6  mt-5 text-center ">
        <h3>Misi</h3>
        <ul>
          <li class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam neque, laborum at
            libero veniam ratione odio nisi maiores rem vero et aspernatur itaque repellat enim debitis facere non
            tempora? Quibusdam.</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- tutup konten 1 -->

  <!-- Artikel  -->
  <div class="container mx-auto mt-5 mb-5 news">
    <h3 class="text-center">Sejarah Pekon</h3>
    <div class="row">
      <div class="col-2"></div>
      <div class="col-8" style="text-align: justify;">
        <p>Pada masa penjajahan Hindia Belanda, seorang yang bernama Abdullah Bin Gagawin warga pekon Gunung Haji Limau
          Cukuh Balak bersama beberapa saudaranya mencari lahan pertanian/ perkebunan baru, mereka berjalan memasuki
          hutan mencari lahan yang dianggap cocok untuk berkebun, pada ahirnya mereka sampai di aliran sungai yang
          bernama Way tebu, disana mereka memulai membuka lahan pertanian terutama berladang dan berkebun. Adapun
          perkebunan yang mereka tanami adalahLada dan Kopi dan daerah tempat mereka berkebun diberi nama BUMI
          AGUNG.Setelah bertahun-tahun lamanya mereka mendapat kabar bahwa pemerintah Hindia Belanda mendatangkan
          penduduk dari pulau Jawa ke Lampungyang pada saat itu disebut dengan istilah Kolonisasi dan pembukaan lahan
          pertanian yang kita kenal sekarang dengan nama Gading rejo di daerah Pringsewu. Pada saatkolonisasi itulah
          dibuka jalan dari daerah Gedung Tataan Menuju Kota Agung melalui gading rejo dan pringsewu sedangkan pagelaran
          dan talang padang masih berupa hutan belentara. Dengan di bukanya jalan tersebut maka kendaraan mobil sudah
          bisa masuk kedaerah tersebut untuk pertama kalinya. Dari situlah pak Abdullah dan saudara-saudaranya sepakat
          untuk pindah dari wilayah Way tebu dan mencari lokasi perkampungan yang baru di sepanjang jalan yang dilalui
          oleh kendaan. Kemudian mereka membuka hutan untuk dijadikan lahan pertanian dan sebagian dijadikan lahan
          pemukiman yang kemudian di beri nama KEJAYAAN. Kata kejayaan mempunyai makna tersendiri yaitu; KEMAPANAN atau
          KEMAKMURAN Dengan harapan sampai dengan anak cucu mereka akan mendapat kemapanan dan kemakmuran.Adapun
          perkebunan yang mereka buka didaerah Way tebu atau Bumi Agung tetap mereka urus, hanya sesekali mereka
          kerjakan karna itulah sampai sekarang daerah tersebut tetap menjadi pedukuhan pekon Kejayaan. Salah satu dari
          putra pak abdulah yaitu Abdul Rahman yang diangkat menjadi pimpinan adat di kejayaan sesuai dengan garis
          keturunan dan direstui oleh pemuka adat dari Desa Gunung Aji Limau Cukuh Balak.</p>
      </div>
      <div class="col-2"></div>
    </div>

  </div>
  </div>
  <!-- Artikel Tutup -->

  <!-- konten 2 -->
  <div class="container main-content-2 mt-5 mb-5" id="OurServices">
    <div class="">
      <div class="row">
        <h2 class="text-center">Lokasi Pekon Kejayaan</h2>
        <div class="col-sm-12 text-center m-auto mt-3">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31777.659512714297!2d104.76478430414662!3d-5.385319700005683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4724cec6c6c5f9%3A0xbc30ffdc5153d21e!2sKejayaan%2C%20Kec.%20Talang%20Padang%2C%20Kabupaten%20Tanggamus%2C%20Lampung!5e0!3m2!1sid!2sid!4v1659368366933!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

      </div>
    </div>
  </div>
  <!-- tutup konten 2 -->

  <!-- Card -->
  <div class="container-fluid">

  </div>
  <!-- Card Close -->

  <!-- footer -->
  <div class="container-fluid footer">
    <div class="row ">
      <div class="col-sm-3 mt-3">
        <p>Pekon Kejayaan</p>
        <p>kejayaan@gmail.com</p>
        <p>082238603481</p>
      </div>
      <div class="col-sm-3 mt-3">
        <p>Beranda</p>
        <p>Profil</p>
        <p>Berita</p>
      </div>
      <div class="col-sm-3 mt-3">
        <p>Connect with us :</p>
        <ul class="ps-0">
          <li>
            <button type="button" class="btn border-primary"><i class="fa fa-facebook"></i></button>
          </li>
          <li>
            <button type="button" class="btn border-primary "><i class="fa fa-instagram"></i></button>
          </li>
          <li>
            <button type="button" class="btn border-primary "><i class="fa fa-twitter"></i></button>
          </li>
          <li>
            <button type="button" class="btn border-primary "><i class="fa fa-envelope"></i></button>
          </li>
        </ul>
      </div>
      <div class="col-sm-3 mt-3">
        <p>KKN Unila Periode II Tahun 2022</p>
        <img src="./assets/images/logo_tanggamus-remove.png" width="35px" height="40px" alt="" />
      </div>
    </div>
  </div>
  <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
</body>

</html>