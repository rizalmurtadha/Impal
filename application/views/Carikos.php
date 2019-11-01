
<html lang="en">
<head>
  <title>Register</title>
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
.labelcari{
  object-fit: contain;
  font-family: Montserrat;
  font-size: 24px;
  font-weight: bold;
  color: #ffffff;
}
.gender{
  width: 155px;
  height: 40px;
  object-fit: contain;
  font-family: Montserrat;
  border-radius: 8px;
  border-style: none;
  font-size: 14px;
}
.lokasi{
  width: 310px;
  height: 40px;
  object-fit: contain;
  font-family: Montserrat;
  border-radius: 8px;
  border-style: none;
  font-size: 14px;
}
.sort{
  width: 201px;
  height: 40px;
  object-fit: contain;
  font-family: Montserrat;
  border-radius: 8px;
  border-style: none;
  font-size: 14px;
}
.harga{
  width: 233px;
  height: 40px;
  object-fit: contain;
  font-family: Montserrat;
  border-radius: 8px;
  border-style: none;
  font-size: 14px;
}
.labelaja {
  object-fit: contain;
  font-family: Montserrat;
  font-size: 14px;
  font-weight: 500;
  color: #ffffff;
}
.btn {
  width: 109px;
  height: 43px;
  border-radius: 8px;
  background-color: #ffbb56;
  object-fit: contain;
  color: #6a609c;
  font-family: Montserrat;
  font-size: 16px;
  font-weight: bold;
  margin-top: 1%;
  position: absolute;
  right: 4.5%;
}
.labelhasil{
  object-fit: contain;
  font-family: Montserrat;
  font-size: 16px;
  font-weight: bold;
  color: #6a609c;
  margin-top: 4%;
}
.card-body{
  object-fit: contain;
  font-family: Montserrat;
  font-size: 14px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
}
.card{
  width: 311px;
  border: none;
}
.card-body{
  padding-left: 0;
}
</style>
<!-- navbar -->
<div class="container">    
      <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>/image/home-address.png">YukNgekost!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="<?php echo base_url('Beranda_c')?>">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
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
</div>
<!-- form -->
<div class="container-fluid" style="background: #6a609c">
  <div class="row">
    <div class="col-sm-12">
      <div style="margin-top: 3.3%">
        <center><label class="labelcari">Cari Kost</label></center>
      </div>
      <form class="user" method="POST" action="<?php echo base_url('Carikos_c')?>">
        <div class="container" style="width: 750px;height: 240px;object-fit: contain;margin-top: 0.5%;position: relative">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class = "labelaja" for="exampleFormControlSelect1">Gender Kost</label>
                <select class="form-control gender" id="gender" name="gender">
                  <?php if( set_value('gender')=="" ) : ?>
                    <option value="" selected>Semua</option>
                    <option value="Pria" >Pria</option>
                    <option value="Wanita" >Wanita</option>
                    <option value="Campur">Campur</option>
                  <?php elseif(set_value('gender')=='Pria') : ?>
                    <option value="" >Semua</option>
                    <option value="Pria" selected>Pria</option>
                    <option value="Wanita">Wanita</option>
                    <option value="Campur">Campur</option>
                  <?php elseif(set_value('gender')=='Wanita') :?>
                    <option value="" >Semua</option>
                    <option value="Pria" >Pria</option>
                    <option value="Wanita" selected>Wanita</option>
                    <option value="Campur">Campur</option>
                  <?php elseif(set_value('gender')=='Campur') :?>
                    <option value="" >Semua</option>
                    <option value="Pria" >Pria</option>
                    <option value="Wanita" >Wanita</option>
                    <option value="Campur" selected>Campur</option>
                  
                  <?php endif; ?>
                </select>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="form-group" style="margin-left: -5%">
                <label class = "labelaja" for="exampleFormControlInput1">Lokasi</label>
                <input type="text" class="form-control lokasi" id="lokasi" name="lokasi" placeholder="cth: Sukabirus" value="<?= set_value('lokasi'); ?>">
                <?= form_error('lokasi','<small class="text-danger pl-3">','</small>')?>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class = "labelaja" for="exampleFormControlSelect1">Urutkan Berdasarkan</label>
                <select class="form-control sort" id="sort" name="sort">
                  <option value="1">Harga Termurah</option>
                  <option value="2">Fasilitas</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row" style="margin-top: 1%">
            <div class="col-sm-4">
              <div class="form-group">
                <label class = "labelaja" for="exampleFormControlInput1">Rentang Harga</label>
                <input type="number" class="form-control harga" id="harga1" name="harga1" placeholder="Masukkan Harga Minimum" value="<?= set_value('harga1'); ?>">
                <?= form_error('lokasi','<small class="text-danger pl-3">','</small>')?>
              </div>
            </div>
            <hr style="width: 11px;height: 2px;border-radius: 15px;background-color: #c4c4c4;margin-left: 0;margin-right: -1.6%;margin-top: 6%">
            <div class="col-sm-4">
              <div class="form-group">
                <label class = "labelaja" for="exampleFormControlSelect1" style="color: #6a609c">Rentang Harga</label>
                <input type="number" class="form-control harga" id="harga2" name="harga2" placeholder="Masukkan Harga Maksimum" value="<?= set_value('harga2'); ?>">
                <?= form_error('lokasi','<small class="text-danger pl-3">','</small>')?>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class = "labelaja" for="exampleFormControlSelect1">Fasilitas</label>
                <select class="form-control sort" id="fasilitas" name="fasilitas">
                  <option value="">Pilih Fasilitas</option>
                  <option value="">Fasilitas</option>
                </select>
              </div>
            </div>
          </div>
          <input class="btn" type="submit" name="" value="SET">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- hasil -->
<div class="container">
  <div style="margin-top: 3.3%;margin-bottom: 1%">
    <label class="labelhasil">Hasil Perncarian kamu ditemukan <?php echo count($kos)?> Kosan </label>
  </div>
  <div class="row" style="margin-bottom: 2.6%">
    <?php foreach ($kos as $kost) : ?>
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img-top" src="<?php echo base_url()?>/image/kost1.svg" alt="Card image cap">
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