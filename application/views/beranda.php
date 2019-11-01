
<html lang="en">
<head>
  <title>Beranda</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body style="font-family: Montserrat">
<style type="text/css">
  .Asset-14x {
  width: 402px;
  height: 346px;
  object-fit: contain;
  margin-top: 10.5%;
}

    .form-control {
        width: 372px;
      height: 35px;
      object-fit: contain;
      border-radius: 10px;
      background-color: #e6e6e6;
      border-style: none;
      font-size: 13px;
    }

    .labelaja {

    width: 140px;
    height: 15px;
    object-fit: contain;
    font-family: Montserrat;
    font-size: 12px;
    font-weight: 600;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #424242;

    }
    .batas{
      margin-top: -10px;
    width: 6px;
    height: 20px;
    object-fit: contain;
    border-radius: 22px;
    background-color: #6a609c;
    }
.loginlabel{
    width: 83px;
    height: 34px;
    object-fit: contain;
    font-size: 28px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #424242;

}
.loginlabel:hover{
  text-decoration: none;
  color: #bbbbbb;
}
.daftarlabel{
    width: 93px;
    height: 34px;
    object-fit: contain;
    font-size: 28px;
    font-weight: bold;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    color: #bbbbbb;
}
.daftarlabel:hover{
  text-decoration: none;
  color: #424242;
}
</style>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>/image/home-address.png">YukNgekost!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('Beranda_c')?>">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Carikos_c')?>">Cari Kost</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Login_c')?>">Tentang</a>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['username'])) : ?>
            <a class="nav-link" href="<?php echo base_url('Login_c/logout')?>">Logout</a>
          <?php else : ?>
            <a class="nav-link" href="<?php echo base_url('Login_c')?>">Login</a>
          <?php endif; ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Regis_c')?>">Daftar</a>
        </li>
      </ul>
    </div>
    </nav>
    
  <div class="container">
  <div class="row">
    <div class="col-sm-7">
      <p class="p1">Selamat datang di YukNgekost !</p>
      <h2 class="p2" style="font-style: bold;">Yuk cari kost yang paling nyaman buat kamu !</h2>
      <p class="p3">YukNgekost akan membantu kamu dalam mencari kost disekitar Telkom University. Cukup masukan kriteria yang kamu inginkan, YukNgekost akan memberikan pilihan kost-an untuk kamu !</p>


      <form class="form-inline" style="margin-top: 4%;">
        <input class="form-control mr-sm-2" type="search" placeholder="Masukan nama kost atau lokasi kost yang anda inginkan" aria-label="Search" style="width: 380px;height: 50px;
  object-fit: contain;
  font-family: Montserrat;
  font-size: 12px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #a3a3a3;">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="height: 50px;">Cari Kost</button>
      </form>

      <h3 style=" width: 131px;
  height: 20px;
  object-fit: contain;
  font-family: Montserrat;
  font-size: 16px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #6a609c;margin-top: 28%;">Kost Terpopuler</h3>

</div>
 <div class="col-sm-5">
      <img  class="Asset-14x" src="<?php echo base_url()?>/image/berandagambar.png">
       </div>
</div>

   

<!-- list card-->
 
  <div class="row">
      <?php foreach ($kos as $kost) : ?>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="<?php echo base_url()?>/image/gambardetailkos.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"style="object-fit: contain;font-family: Montserrat;font-size: 20px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #424242;"><?= $kost['namakos']; ?></h5>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 16px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #6a609c;"><?= $kost['harga']; ?></p>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 14px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #000000;"><?= $kost['alamatkos']; ?></p>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 14px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #6a609c;"><?= $kost['genderkos']; ?></p>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 14px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #000000;"><?= $kost['kamartersedia']; ?> Kamar Tersedia</p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <!-- <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url()?>/image/gambardetailkos.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"style="object-fit: contain;font-family: Montserrat;font-size: 20px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #424242;">Kost Pondok Eden</h5>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 16px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #6a609c;">Rp 12.000.000</p>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 14px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #000000;">Sukabirus</p>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 14px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #6a609c;">Putra</p>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 14px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #000000;">9 Kamar tersedia</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo base_url()?>/image/gambardetailkos.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"style="object-fit: contain;font-family: Montserrat;font-size: 20px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #424242;">Kost Pondok Eden</h5>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 16px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #6a609c;">Rp 12.000.000</p>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 14px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #000000;">Sukabirus</p>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 14px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #6a609c;">Putra</p>
            <p class="card-text" style="object-fit: contain;font-family: Montserrat;font-size: 14px;font-weight: 600;font-stretch: normal;font-style: normal;line-height: normal;letter-spacing: normal;color: #000000;">9 Kamar tersedia</p>
          </div>
        </div>
      </div> -->
  </div>


<!-- end list card-->

    
    
      
<style type="text/css">
  .btn {
  width: 172px;
  height: 45px;
  object-fit: contain;
  border-radius: 10px;
  background-color: #6a609c;
  color: white;
}

.Asset-14x {
  width: 524px;
  height: 411px;
  object-fit: contain;
}

.p1 {
  font-family: Montserrat;
  font-size: 16px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #ffbb56;
  margin-top: 15%;
}

.p2 {
  width: 476px;
  height: 88px;
  object-fit: contain;
  font-family: Montserrat;
  font-size: 36px;
  font-weight: bolder;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #676099;
}

.p3 {
  width: 429px;
  height: 84px;
  object-fit: contain;
  font-family: Montserrat;
  font-size: 14px;
  font-weight: normal;
  font-stretch: normal;
  font-style: normal;
  line-height: 1.52;
  letter-spacing: normal;
  color: #222222;
  margin-top: 3%;
}

.Rectangle-22 {
  margin-top: 15%;
  width: 1920px;
  height: 461px;
  object-fit: contain;
  opacity: 0.9;
  background-color: #6a609c;
}

.kamu {
  object-fit: contain;
  font-family: Montserrat;
  font-size: 48px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #ffbb56;
  margin-top: 3.5%;
}

.Yuk {
  object-fit: contain;
  font-family: Montserrat;
  font-size: 48px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #ffffff;
  margin-top: 2%;
}

.home-address {
  width: 320px;
  height: 320px;
  object-fit: contain;
  margin-top: 30%;
}

.Tentang-Kami {
  width: 118px;
  height: 20px;
  object-fit: contain;
  font-family: Montserrat;
  font-size: 16px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #6a609c;
  margin-top: 30%;
}

.Ada-yang {
  width: 419px;
  height: 34px;
  object-fit: contain;
  font-family: Montserrat;
  font-size: 28px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  color: #ffbb56;
}

.Group-4 {
  width: 351px;
  height: 68px;
  object-fit: contain;
  margin-top: 2%;
}

.navbar .navbar-header,
.navbar-collapse {
    float:none;
    display:inline-block;
    vertical-align: top;
}

@media (max-width: 768px) {
    .navbar-collapse  {
        display: block;
    }
}




</style>
  
    </div>
  </div>
  <div class="Rectangle-22">
    <div class="container">
  <div class="row">
    <div class="col-sm-1">
    
    </div>
    <div class="col-sm-10">
      <br><br>
      <center><h1 class="kamu">Kamu Pemilik Kost ?</h1></center>
      <center><h1 class="Yuk">Yuk promosikan kost-an kamu di YukNgekost !</h1></center>
      <center><button type="button" class="btn btn-primary" style="width: 315px;height: 84px;margin-top: 2%;background-color: #ffbb56;border-style: none;"><h3 style="color: #6a609c;font-weight: bold;">Daftar Sekarang</h3></button></center>

    </div>
    <div class="col-sm-1">
    
    </div>
  </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img src="<?php echo base_url()?>/image/home-logo.png"srcset="img/home-address@2x.png 2x,img/home-address@3x.png 3x"
     class="home-address">
    </div>
    <div class="col-sm-6">
      <h4 class="Tentang-Kami">Tentang Kami</h4>
      <p>YukNgekos adalah perangkat lunak berupa website dengan tujuan membantu masyarakat terutama mahasiswa sekitar telkom university dalam mencari kos. user cukup mengakses website YukNgekos dan melakukan login, jika user belum memiliki akun, user wajib melakukan registrasi terlebih dahulu. Langkah selanjutnya user membuka tab pencarian dan memasukan kriteria kos sesuai yang user inginkan website akan menampilkan data kos sesuai dengan inputan user.

Dari identifikasi perangkat lunak tersebut dapat dilihat bahwa website ini menguntungkan bagi mahasiswa dan pemilik kos karena dengan adanya YukNgekos, mahasiswa akan lebih mudah mendapatkan kos impian dan pemilik kos akan lebih mudah dalam memasarkan kos yang dia punya. Dalam website ini user tidak dapat melakukan booking atau transaksi. YukNgekos hanya memberikan informasi kos berupa nama kos, fasilitas, harga, alamat, kamar tersedia, foto ,dan nomor telefon pemilik kos. Jadi setelah user menemukan kos yang diinginkan, user bisa langsung menghubungi pemilik untuk transaksi lebih lanjut.  

</p>
    </div>
  </div>

  

</div>
  
    </div>

    <div class="Rectangle-22">
    <div class="container">
  <div class="row">
    <div class="col-sm-1">
    
    </div>
    <div class="col-sm-10">
      <br><br>
      <center><h1 class="Ada-yang">Ada yang ingin ditanyakan ?</h1></center>
      <center><img src="image/telp.png" class="Group-4"></center>
      <nav class="navbar navbar-expand-lg" style="float:none;
    display:inline-block;
    vertical-align: top;">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cari Kost</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Login_c')?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Regis_c')?>">Daftar</a>
        </li>
        
      </ul>
    </div>
  </nav>

  <center><p style="color: #ffffff; margin-top: 20%;">© 2019 YukNgekost Corporation. All Right Reserved</p></center>


    </div>
    <div class="col-sm-1">
    
    </div>
  </div>
  </div>
</div>


    
    
</body>
<!-- <footer>
      <div class="foot">
      <style type="text/css">
        .foot{
            margin-top: 8.5%;
          height: 384px;
          object-fit: contain;
          background-color: #6a609c;
        }
      </style>
      
    </div>
    </footer> -->
</html>