<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quran App</title>
  <link rel="shortcut icon" href="<?= base_url(IMAGES . "icon/default.png"); ?>">
  <link rel="stylesheet" href="<?= base_url(THEME . "css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" href="<?= base_url(THEME . "css/sticky-footer-navbar.css"); ?>">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Al-Quranku</a>
          <div class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Cari Surat atau Surat Ke-" aria-label="Search" id="filter-api">
            </form>
          </div>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <ul class="list-group">
          <?php
          $n = 1;
          foreach ($surah as $k => $s) {
            if (strtoupper($s['type']) === "MADANIYAH") {
              $surah_type = '<span class="badge badge-primary">' . $s['type'] . '</span>';
            } else {
              $surah_type = '<span class="badge badge-danger">' . $s['type'] . '</span>';
            }
          ?>
            <li class="list-group-item"><a href="<?= site_url('surah/find/' . ($k + 1)) ?>"><?= $n++ . ') ' . $s['titleAr'] . ' (' . $s['title'] . ')' ?></a> <?= $surah_type ?></li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </div>




  <footer class="container">

  </footer>

  <script src="<?= base_url(THEME . "js/jquery-3.4.1.slim.min.js"); ?>"></script>
  <script src="<?= base_url(THEME . "js/popper.min.js"); ?>"></script>
  <script src="<?= base_url(THEME . "js/bootstrap.min.js"); ?>"></script>

  <script>
    $(document).ready(function() {
      $("#filter-api").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("ul > li").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
</body>

</html>