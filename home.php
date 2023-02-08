<?php
session_start();
include('./includes/connect.php');
?>
<!doctype html>
<html lang="en">

<head>
  <title>take2new | Startseite</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
  <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
  <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
  <link rel="stylesheet" href="./assets/dist/css/bootstrap.css">
</head>

<body>

  <?php include('./components/navbar.php'); ?>
  <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
  <section class="py-5 text-center container">
    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="row py-lg-5">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <div class="col-lg-6 col-md-8 mx-auto">
                  <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <img src="./assets/brand/take2new-logos_black.png" class="rounded mx-auto d-block" width="490px" height="190px" style="margin-top: -50px; text-align: center;"><br>
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <p class="lead text-muted">Wir freuen uns, dass du den Weg zu uns gefunden hast.</p>
                </div>
            </div>
        </section>
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
  <div class="container px-4 py-5">
    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <h2 class="pb-2 border-bottom">Warum <img src="./assets/brand/take2new-1.png" height="30px" style="margin-top: -10px;">  nutzen?</h2>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <div class="d-flex flex-column align-items-start gap-2">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <h3 class="fw-bold">Wir sind die Spezialisten im Bereich der Second Hand Branche.</h3>
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <p class="text-muted">Im Gegensatz zur Konkurrenz setzen wir alles auf Nachhaltigkeit. Unser hauseigener
          Lieferdienst wickelt Lieferungen schnell & problemlos ab und liefert im besten Fall schon am nächsten Tag zu
          dir nach Hause.</p>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <a href="about.php" class="btn btn-dark btn-lg">Über uns</a>
      </div>
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <div class="row row-cols-1 row-cols-sm-2 g-4">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="d-flex flex-column gap-2">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div
            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-4 rounded-3">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#collection"></use>
            </svg>
          </div>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <h4 class="fw-semibold mb-0"><span class="text-warning">Lieferdienst</span></h4>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <p class="text-muted">Unser Lieferdienst arbeitet rund um die Uhr, um dir deine Pakete zu bringen.</p>
        </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="d-flex flex-column gap-2">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div
            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-dark bg-gradient fs-4 rounded-3">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#gear-fill"></use>
            </svg>
          </div>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <h4 class="fw-semibold mb-0"><span class="text-dark">Günstige Preise</span></h4>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <p class="text-muted">Dank unserer Experten im Einkauf können wir die günstigsten Preise auf dem Markt bieten.
          </p>
        </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="d-flex flex-column gap-2">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div
            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-dark bg-gradient fs-4 rounded-3">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#speedometer"></use>
            </svg>
          </div>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <h4 class="fw-semibold mb-0"><span class="text-dark">Unser Beitrag</span></h4>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <p class="text-muted">Wir legen großen Wert auf die Umwelt. Daher pflanzen wir bei jedem Verkauf eines
            Artikels einen Baum, um dem Klimawandel entgegen zu wirken.</p>
        </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="d-flex flex-column gap-2">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div
            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-warning bg-gradient fs-4 rounded-3">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#table"></use>
            </svg>
          </div>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <h4 class="fw-semibold mb-0"><span class="text-warning">Probleme?</span></h4>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <p class="text-muted">Bei Problemen mit <img src="./assets/brand/take2new-1.png" height="15px" style="margin-top: -10px;"> , melde dich bitte bei unserem Support. Wir
            kommen schnellstmöglich darauf zurück.</p>
        </div>
      </div>
    </div>
  </div>

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
