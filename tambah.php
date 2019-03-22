<?php
include 'functions.php';
  if (isset($_POST["submit"])) {
    
    if (tambah($_POST) > 0) {
      echo "<script>
          alert('Berhasil ditambahkan');
          document.location.href = 'kotak_saran.php';
        </script>";
    } else {
      echo "<script>
          alert('Gagal ditambahkan');
          document.location.href = 'kotak_saran.php';
        </script>";
    }
  }
?>
<!-- Hello Brahmasta Bagus Aryandra -->
<!-- Selamat Mengoding -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="X RPL 2">
    <meta name="keywords" content="HTML,CSS,C++">
    <meta name="author" content="Brahmasta Bagus A">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Login | <?= $brand ?></title>
  </head>
  <style>
  body:before {
  content: "";
  position: fixed;
  z-index: -1;
  background-size:cover;
  background-position:center top;
  display: block;
  background-image: url(1_l3wujEgEKOecwVzf_dqVrQ.jpeg);
  width: 100%;
  height: 1000px;
  filter: blur(.9px) ;
  -webkit-filter: blur(.9px) ;
}
  nav {
  background-color: #07e736;
  }
  .brand-logo {
   color: #505050 !important;
   line-height: 60px;
  }
  .container {
    margin-top: 10px;
  }
  fieldset {
  width: 600px;
  margin-left: 160px;
  background-color: whitesmoke;
  border-radius: 5px;
  box-shadow: 0px 3px 5px black;
  border: none;
  }
  h4 {
  font-size: 40px;
  margin-left: -15px;
  margin-top: -3px;
  color: #505050 !important;
  }
  .row {
    margin-top: -5px;
  }
  .fa-icon {
  margin-top: 120px;
  }
  .fab {
  display: block;
  margin-top: 20px;
  font-size: 25px;
  margin-left: 20px;
  }
  a {
      text-decoration: none;
      color: black;
      display: block;
      text-align: center;
      line-height: 30px;
    }
    .a2 {
      position: relative;
      right: 480px;
      top: 5px;
    }
    .a2 {
      background-color: #00c3da;
      width: 150px;
      height: 30px;
      border-radius: 5px;
      margin-left: 370px;
    }
    .a2:hover {
      background-color: #018c9d;
      box-shadow: 0px 3px 3px 0px rgba(0,0,0,2);
    }
    .a2:hover a {
      color: white;
    }
  </style>
  <body>
    <nav>
      <div class="nav nav-wrapper">
        <a href="index.php" class="brand-logo center"><?= $brand ?></a>
      </div>
    </nav>
    <div class="container">
      <fieldset>
        <h4 class="center">Saran</h4>
        <div class="row">
          <form class="col s12" action="" method="POST">
            <div class="row">
              <div class="col s2 fa-icon">
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                <a href="https://www.whatsapp.com"><i class="fab fa-whatsapp"></i></a>
                <a href="https://github.com"><i class="fab fa-github"></i></a>
                <a href="https://id-id.facebook.com"><i class="fab fa-facebook"></i></a>
              </div>
              <div class="col s10">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="first_name" type="text" class="validate" name="nama">
                    <label for="first_name">Nama Anda</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">Password</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="textarea2" class="materialize-textarea" data-length="120" name="saran"></textarea>
                    <label for="textarea2">Masukkan Saran</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col m6">
                    <button class="btn waves-effect waves-light" type="submit" name="submit">Kirim
                    <i class="material-icons right">send</i>
                    </button>
                  </div>
                  <div class="col m6">
                    <div class="a2">
                      <a href="kotak_saran.php">Daftar Saran</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </fieldset>
    </div>
    <script src="materialize/js/materialize.min.js"></script>
  </body>
</html>