<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Carousel -->
    <link
      rel="stylesheet"
      href="./OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="./OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css"
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
              <a class="btn btn-primary" href="<?= base_url('login')?>">Login</a>
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
        <div class="col-sm-6 main-content ps-5 ">
          <h1>Selamat Datang di Website</h1>
          <h1>
            Pekon Kejayaan
          </h1>
          <p class="pt-3 fw-light" >Pekon Kejayaan merupakan salah satu pekon yang terletak di<br> Kecamatan Talang Padang  Kabupaten Tanggamus</p>
          <!-- <button type="button" class="btn">Mulai Sewa Mobil</button> -->
        </div>
        <div class="col-sm-6  text-center m-auto ">
          <img src="./assets/images/logo_tanggamus-remove.png" class="img-fluid w-" alt="" />
        </div>
      </div>
    </div>
    <!-- tutup konten 1 -->

    <!-- Artikel  -->
    <div class="container-fluid mx-auto mt-5 mb-5 news">
      <h2 class="text-center">Berita Terkini Pekon kejayaan</h2>
      <div class="row mt-5 mb-5">

          <?php 
          $i = 0;

          foreach($artikel as $artikel) :
          if($i>=3){
            break;
          }else{

          
          ?>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/images/<?= $artikel['gambar'];?>" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"><?= $artikel['judul'];?></h5>    
                    <a href="/artikel/<?= $artikel['slug'];?>" class="btn btn-primary ms-5">Lanjut membaca</a>
                    </div>
                </div>
            </div>
        <?php 
        $i++;}
    endforeach;?>
    </div>    
     
</div>
  </div>
    <!-- Artikel Tutup -->

    <!-- konten 2 -->
    <div class="container main-content-2 mt-5 mb-5" id="OurServices">
      <div class="">
        <div class="row">
          <h2 class="text-center">Kegiatan Pekon Kejayaan</h2>
          <div class="col-sm-6 text-center m-auto mt-3">
            
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./assets/images/IMG20220726102430.jpg" class="d-block m-auto" style="max-width: 75%; border: 20px solid #f1f3ff; border-radius: 20px;" alt="...">
                </div>
                <div class="carousel-item" >
                  <img src="./assets/images/kwt.jpeg" class="d-block m-auto" style="max-width: 75%; border: 20px solid #f1f3ff; border-radius: 20px;" alt="...">
                </div>
                <div class="carousel-item" >
                  <img src="./assets/images/posyandu.jpg" class="d-block m-auto" style="max-width: 75%; border: 20px solid #f1f3ff; border-radius: 20px;" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true" style="background-color:  #f1f3ff;"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark" aria-hidden="true" style="background-color:  #f1f3ff;"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-sm-6 main-contents-2 align-self-center">
            <h1> 
            </h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi tempore aliquid nam error modi quidem vero et tempora dolores libero?
            </p>
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
