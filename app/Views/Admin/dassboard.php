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
      <a class="navbar-brand" href="<?= base_url('');?>" style="color: black;"><img
          src="./assets/images/logo_tanggamus-remove.png" alt="" width="35" height="40" /> Pekon Kejayaan</a>

      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse menu-nav" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="admin">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-primary" href="<?= base_url('logout')?>">Keluar</a>
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
  <div class="container" style="height: 414px; margin-bottom: 90px;">
    <div class="row">
      <div class="col-2"></div>
      <div class="col-sm-8 mt-5">
        <div class="btn btn-success"><a href="tambah" style="text-decoration: none; color: white;">Tambah Artikel</a>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Judul Artikel</th>
              <th scope="col">slug </th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i =1;?>
            <?php foreach($artikel as $artikel) :?>
            <tr>
              <th scope="row"><?= $i++;?></th>
              <td><?= $artikel['judul'];?></td>
              <td><?= $artikel['slug'];?></td>
              <td><a href="<?= base_url("edit/".$artikel['id']);?>" type="button" class="btn btn-primary"
                  data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a> <a
                  href=" <?= base_url("delete/".$artikel['id']);?>" type="button" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Launch demo modal
            </button> -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content modalku">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container" style="height: 414px">
                      <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8 mt-5">
                          <form action="<?=base_url('update/'.$artikel["id"])?>" method="post"
                            enctype="multipart/form-data">

                            <div class="mb-1">
                              <label for="exampleInputEmail1" class="form-label">Judul Artikel</label>
                              <input type="text" class="form-control" name="judul" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="<?=$artikel["judul"]?>">
                            </div>
                            <div class="mb-1">
                              <label for="exampleInputEmail1" class="form-label">Slug</label>
                              <input type="text" class="form-control" name="slug" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="<?=$artikel["slug"]?>">
                            </div>
                            <div class="form-group mb-2">
                              <label for="exampleFormControlTextarea1">Isi Berita</label>
                              <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"
                                value=""><?=$artikel["isi"]?></textarea>
                            </div>
                            <div class="custom-file mb-2">
                              <input type="file" name="gambar" class="custom-file-input" id="gambar" required>
                              <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                        </div>
                        <div class="col-sm-2"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
      <div class="col-2"></div>
    </div>
  </div>
  <!-- Konten 1 close -->

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