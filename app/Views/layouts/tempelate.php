<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- My Style -->
  <link href="<?php echo base_url('assets/css/style.css'); ?> " rel="stylesheet">

  <!-- BOOTSTRAP /-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <title><?= $title; ?> - Sistem Antrian</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fa-solid fa-clock"></i>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="<?php base_url(); ?>antrian">Ambil antrian</a>
          <a class="nav-link" href="<?php base_url(); ?>antrianno">Layar antrian</a>
          <a class="nav-link" href="<?php base_url(); ?>loketpanggil">Loket Panggil</a>
          <a class="nav-link" href="<?php base_url(); ?>loket">Loket</a>
          <a class="nav-link" href="<?php base_url(); ?>pelayanan">Pelayanan</a>
        </div>
      </div>
    </div>
  </nav>

  <?= $this->renderSection('content'); ?>

  <footer class="footer mt-5 py-3 text-center">
    <div class="container">
    <span>
        <p><i class="fa-solid fa-smile"></i> TERIMAKASIH <i class="fa-solid fa-smile"></i></p>
        <i class="fa-solid fa-heart"></i> LYDIA DIFFANI <i class="fa-solid fa-heart"></i></p>
        <p>&copy; <script>
            document.write(new Date().getFullYear());
          </script>
        </p>
    </span>
    </div>
  </footer>
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>