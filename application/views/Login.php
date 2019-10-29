
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
    <a class="navbar-brand" href="#">YukNgekost!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
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
  <div class="container">
  <div class="row">
    <div class="col-sm-6">
    <img  class="Asset-14x" src="<?php echo base_url()?>/image/gambar.png">
    </div>
    <div class="col-sm-6">
     <form class="user" method="POST" action="<?php echo base_url('Login_c')?>">
      

       <style type="text/css">
        



       </style>


       <div style="margin-top: 10.5%;margin-bottom: 2.3%">
        <a class="loginlabel" href="<?php echo base_url('Login_c')?>" style="padding-right: 1.7%">Login</a>
        <img class="batas" src="../../image/batas.png">
        <a class="daftarlabel" href="<?php echo base_url('Regis_c')?>" style="padding-left: 1.7%">Daftar</a>
       </div>
      
    
      <div class="form-group">
        <label class = "labelaja" for="exampleFormControlInput1">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username Kamu" value="<?= set_value('username'); ?>">
        <?= form_error('username','<small class="text-danger pl-3">','</small>')?>
      </div>
       <div class="form-group">
        <label class = "labelaja" for="exampleFormControlInput1">Kata Sandi</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Kata Sandi Kamu">
        <?= form_error('password','<small class="text-danger pl-3">','</small>')?>
      </div>
  
      <input class="btn" type="submit" name="" value="Login">
    </form>
<style type="text/css">
  .btn {
  width: 172px;
  height: 45px;
  object-fit: contain;
  border-radius: 10px;
  background-color: #6a609c;
  color: white;
}
</style>
  
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