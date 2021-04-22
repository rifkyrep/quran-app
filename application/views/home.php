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
      <div class="col-md-12 mb-4">
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
            <li class="list-group-item">
              <div class="row">
                <div class="col-md-6 col-6">
                  <a href="<?= site_url('surah/find/' . ($k + 1)) ?>"><?= $n++ . ') ' . $s['titleAr'] . ' (' . $s['title'] . ')' ?>
                  </a>
                </div>
                <div class="col-md-6 col-6 text-right">
                  <?= $surah_type ?>
                </div>
              </div>
            </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </div>

  <footer class="container">
    <div class="row">
      <div class="col-md-6 col-7">
        <p>Dikembangkan oleh <a href="https://github.com/rifkyrep" target="_blank">rifky</a>.</p>
      </div>
      <div class="col-md-6 col-5 text-right">
        <!-- Back to Top -->
        <a id="back-to-top" href="#" class="btn btn-sm btn-primary back-to-top" role="button" title="" data-toggle="tooltip" data-placement="left">
          Kembali Ke Atas
        </a>
      </div>
    </div>
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

  <!-- Back to Top -->

  <script type="text/javascript">
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function() {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
          scrollTop: 0
        }, 900);
        return false;
      });

      $('#back-to-top').tooltip('show');

    });
  </script>
</body>

</html>