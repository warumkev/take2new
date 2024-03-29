<?php
session_start();
include './includes/config.php';

// Datenbankverbindung aufbauen
$connStr = "host=". HOST . " port=" . PORT . " dbname=" . DBNAME . " user=" . USER . " password=" . PASSWORD;
$dbConn = pg_connect($connStr);

if (!$dbConn) {
    echo "Ein Fehler ist aufgetreten.\n";
    exit;
}

// Artikel abrufen

$listArticles = pg_query($dbConn, "SELECT * FROM public.items ORDER BY id");

$listUsers = pg_query($dbConn, "SELECT * FROM public.sellers ORDER BY id");

// Anzahl an Artikeln

$alleArtikelQuery = pg_query($dbConn, "SELECT * FROM public.items");

$alleArtikel = pg_num_rows($alleArtikelQuery);

?>
<!doctype html>
<html lang="en">

<head>
  <title>take2new | Sortiment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
  <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
  <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
  <link rel="stylesheet" href="./assets/dist/css/bootstrap.css">
</head>

<body>

  <?php include('./components/navbar.php'); ?>


  <main>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <section class="py-5 text-center container">
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <div class="row py-lg-5">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="col-lg-6 col-md-8 mx-auto">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <img src="./assets/brand/take2new-logos_black.png" class="rounded mx-auto d-block" height="100px"><br>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <h1 class="fw-light">Unser Sortiment</h1>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <p class="lead text-muted">Unten sind alle aktuell gelisteten Artikel in unserem Sortiment. Schau dich doch
            gerne mal ein wenig um, vielleicht findet das ein oder andere Piece ja den Weg in deinen Schrank!</p>
          <p>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <button type="button" class="btn btn-dark position-relative">
              Aktuelles Sortiment
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <?php echo $alleArtikel; ?>
              </span>
            </button>
          </p>
        </div>
      </div>
    </section>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <div class="album py-5 bg-light">
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <div class="container">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <?php while ($row = pg_fetch_assoc($listArticles)) {

          $name = $row['itemname'];
          $id = $row['id'];
          $description = $row['itemdescription'];
          $price = $row['itemprice'];
          $size = $row['itemsize'];
          $sellerid = $row['sellerid'];
          $getSeller = pg_query($dbConn, "SELECT * FROM public.sellers WHERE id = '$sellerid'");
          $itemSeller = pg_fetch_assoc($getSeller);
          $seller = $itemSeller['username'];
          $img = $row['picturename'];
          $qty = $row['qty'];

        ?>
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div class="col">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="card shadow-sm">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <img src="./itemimg/<?php echo $img; ?>" alt="./itemimg/<?php echo $img; ?>" class="bd-placeholder-img card-img-top" style="object-fit: cover;" width="100%" height="225" role="img"
                 preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>
                  <?php echo $name; ?>
                </title>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">
                 <br>&nbsp&nbsp&nbsp <span class="text-dark"><b><?php echo $name; ?></b></span>
                </text>
              </svg>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <div class="card-body">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <p class="card-text">
                  <?php echo $name . " | " . "Größe " . $size . " | " . $price . " €" . " | " . $seller; ?>
                </p>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <p class="card-text">
                  <?php echo $description; ?>
                </p>
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                  <div class="btn-group">
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <a href="buy.php?artid=<?php echo $id; ?>" class="btn btn-sm btn-outline-secondary">Kaufen</a>
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                  </div>
                  <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                  <small class="text-muted"><?php echo $qty; ?> verfügbar</small>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </main>

  <?php include('./components/footer.php'); ?>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>
