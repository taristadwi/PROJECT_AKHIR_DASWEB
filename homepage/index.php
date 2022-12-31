<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/product.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>SEPOER</title>
</head>

<body>
  <div class="container-fluid" style="padding: 0; margin: 0;">
    <div class="bg-utama" style="padding: 10px;">
      <div class="container">
        <div class="container">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <h1>SEPOER</h1>
              <hr style="border-radius:10px;background:#fff;height: 10px;width: 600px;margin-left: 70px;">
            </li>
          </ul>
          <div class="home">
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link" role="button" href="index.php?page=home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="main/jadwal.php?page=jadwal&&konten=transaksi">Pesanan Saya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
        <!--konten-->
        <div class="konten">
          <div class="container">
            <h1 class="display-4" style="text-align: center;"> BEST PLACE TO ORDER YOUR TICKET </h1>
            <h2 style="text-align: center;"style="margin-top:150px;">KERETA API</h2>
            <hr style="border-radius:10px;background:#fff;height: 5px; width: 100px;margin-top: -30px; margin-left: 46%;">
            <a href="login.php" class="btn btn-light tombol "><i>Join Us</i> </a>
            <img src="img/giphy.gif" />
          </div>

        </div>

      </div>
    </div>
    <div class="container-fluid">
      <?php
      // include 'main/kontent.php';
      ?>
      <!-- <div class="container">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <h1 style="color: black;">GOLFJKT</h1>
            <hr style="border-radius:10px;background:#fff;height: 10px;width: 600px;margin-left: 70px;">
          </li>
        </ul>
      </div> -->
      <!-- <div class="sticky-top" style="position: sticky;"> -->
      <div class="container-fluid h-25" data-toggle="sticky-onscroll" style="z-index:1500;background-color: #006DD1; padding: 1%; position: sticky; top: 0;width:102.4%;margin-left:-15px;">
        <ul class="nav justify-content-end"style="color:white;">
          <li class="nav-item" style="padding: 0;">
            <a class="nav-link" style="color: white;" href="index.php?page=home">Home</a>
          </li>
          <li class="nav-item" style="padding: 0;">
            <a class="nav-link" style="color: white;" href="transaksi.php">Pesanan Saya</a>
          </li>
          <li class="nav-item" style="padding: 0;">
            <a class="nav-link" style="color: white;" href="login.php">Login</a>
          </li>
        </ul>
      </div>
      <section class="search-banner text-white py-3 form-arka-plan" id="search-banner"style="margin-top:-50px;">
    <div class="container py-5 my-5">
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true"style="background:#006DD1;color:white;">Ekonomi</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" id="newuser-tab" data-toggle="tab" href="register.php" role="tab" aria-controls="newuser" aria-selected="false"style="background:#FFB100;color:white;">Eksekutif</a>
        </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="card acik-renk-form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <select id="iller" class="form-control" >
                                        <option selected>Kota Asal</option>
                                        <?php
                                          include "config.php";
                                          $sql="select * from kereta where kelas_kereta ='Ekonomi'";

                                          $hasil=mysqli_query($conn,$sql);
                                          $no=0;
                                          while ($data = mysqli_fetch_array($hasil)) {
                                          $no++;
                                          ?>
                                        <option value="<?php echo $data['stasiun_asal'];?>"><?php echo $data['stasiun_asal'];?></option>
                                        <?php
                                          }
                                        ?>
                                    </select>
                                </div>
                            </div>
         

                            <div class="col-md-4">
                                <div class="form-group ">
                                    <select id="ilceler" class="form-control" >
                                        <option selected>Kota Tujuan </option>
                                        <?php
                                          include "config.php";
                                          $sql="select * from kereta where kelas_kereta ='Ekonomi'";

                                          $hasil=mysqli_query($conn,$sql);
                                          $no=0;
                                          while ($data = mysqli_fetch_array($hasil)) {
                                          $no++;
                                          ?>
                                          <option value="<?php echo $data['stasiun_tujuan'];?>"><?php echo $data['stasiun_tujuan'];?></option>
                                        <?php 
                                          }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                <input type="text" class="form-control" placeholder="Jumlah Penumpang" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group ">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn pl-5 pr-5"style="background:#FFB100;color:white;">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

      <div class="container-fluid">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
          <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Tempat Terbaik Memesan Tiket Kereta Api</h1>
            
          </div>
        </div>
        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
          <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
              <h2 class="display-5">Fasilitas Berkualitas</h2>
              <p class="lead">Layanan stasiun yang memadai dan bersih</p>
            </div>

            <img style="width: 80%; height: 300px; border-radius: 20px 20px 0 0;" src="img/1.jpg" style="background-size: cover;" />

          </div>
          <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
              <h2 class="display-5">Wisata Kota</h2>
              <p class="lead">Wisata kota yang mudah dikunjungi</p>
            </div>

            <img style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="img/2.jpg" style="background-size: cover;" />

          </div>
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
          <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
              <h2 class="display-5">Fasilitas Stasiun</h2>
              <p class="lead">Fasilitas kamar mandi yang bagus</p>
            </div>

            <img style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="img/3.jpg" style="background-size: cover;" />
          </div>
          <div class="bg-primary mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
            <div class="my-3 py-3">
              <h2 class="display-5">Akses Stasiun</h2>
              <p class="lead">Akses menuju stasiun yang mudah digunakan</p>
            </div>

            <img style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;" src="img/4.jpg" style="background-size: cover;" />
          </div>
        </div>

      </div>
      <div class="container-fluid">
        <div id="parallax-world-of-ugg">

          <section>
            <div class="title">
              <h3>BEST PLACE TO ORDER YOUR TICKET</h3>
              <h1>SEPOER</h1>
            </div>
          </section>

          <section>
            <div class="parallax-one">
              <h2>SEPOER</h2>
              <h2><a class="btn btn-light" style="border-radius: 20px;" href="login.php">Gabung Sekarang</a></h2>
            </div>
          </section>

          <section>
            <div class="title">
            </div>
          </section>
        </div>
      </div>

    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
<footer class="container py-5">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2">
        <circle cx="12" cy="12" r="10"></circle>
        <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
        <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
        <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
        <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
        <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
        <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
      </svg>
      <small class="d-block mb-3 text-muted">&copy; 2020-TEXT</small>
    </div>
  </div>
</footer>

</html>