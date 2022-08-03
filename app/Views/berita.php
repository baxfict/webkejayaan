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

  <!-- tutup konten 1 -->

  <!-- Artikel  -->
  <div class="container-fluid mx-auto mt-5 mb-5 news">
    <h2 class="text-center">Berita Terkini Pekon kejayaan</h2>
    <div class="row mt-5 mb-5">
      <?php 
          foreach($artikel as $artikel) :
            
          ?>
      <div class="col-md-4">
        <div class="card mt-3" style="width: 18rem;">
          <img src="./assets/images/<?= $artikel['gambar'];?>" class="card-img-top img-fluid"
            style=" width:  300px;height: 300px; object-fit: cover; border: 5px solid white; border-radius: 10px;"
            alt="...">
          <div class="card-body">
            <p class="card-title" style="font-size: 14px; text-align: center; font-weight: bold;">
              <?= $artikel['judul'];?></p>
            <button href="<?= $artikel['id'];?>" type="button" class="btn btn-primary ms-5" data-bs-toggle="modal"
              data-bs-target="#exampleModal<?= $artikel['id'];?>">
              Lanjutkan Membaca
            </button>
          </div>
        </div>
        <div class="modal fade " id="exampleModal<?= $artikel['id'];?>" tabindex="-1"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content modalku justify-content-center">
              <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel"><?= $artikel['judul'];?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-12 text-center"> <img src="./assets/images/<?= $artikel['gambar'];?>"
                      class="card-img-top img-fluid w-25 m-auto"
                      style=" width:  300px;height: 300px; object-fit: cover; border: 5px solid white; border-radius: 10px;"
                      alt="..."></div>
                  <div class="col-12 justify-content-center"> <?= $artikel['isi'];?></div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php 
    endforeach;?>
    </div>



  </div>
  </div>
  <!-- Artikel Tutup -->
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