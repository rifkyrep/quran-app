<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $nama ?> | <?= $arti_judul ?></title>
  <link rel="shortcut icon" href="<?= base_url(IMAGES . "icon/default.png"); ?>">
  <link rel="stylesheet" href="<?= base_url(THEME . "css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?= base_url(THEME . "css/sticky-footer-navbar.css"); ?>">
  <style>
    .ayat {
      font-size: 30px;
      text-align: right;
    }

    .terjemahan {
      text-align: right;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        $a = 1;
        $n = 1;
        $o = 1;
        $p = 1;
        foreach ($ayat as $key => $value) {
        ?>
          <p class="ayat"><?= $ayat["verse_" . $n++] ?> <span style="background-color:grey;color:white;font-size:10px" class="rounded-circle p-2"><?= $a++ ?></span></p>
          <p class="terjemahan"><?= $translate["verse_" . $o++] ?></p>
          <small><?= $tafsir["verse_" . $p++] ?></small>
          <hr>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <script src="<?= base_url(THEME . "js/jquery-3.4.1.slim.min.js"); ?>"></script>
  <script src="<?= base_url(THEME . "js/popper.min.js"); ?>"></script>
  <script src="<?= base_url(THEME . "js/bootstrap.min.js"); ?>"></script>
</body>

</html>