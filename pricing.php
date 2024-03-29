<?php
session_start();
include('./includes/connect.php');
?>
<!doctype html>
<html lang="en">

<head>
  <title>take2new | Über uns</title>
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
  <div class="container py-3">
    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
  <section class="py-5 text-center container">
    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="row py-lg-5">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <div class="col-lg-6 col-md-8 mx-auto">
                  <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <img src="./assets/brand/take2new-logos_black.png" class="rounded mx-auto d-block" height="70px" width="180px" style="margin-top: -80px;">
                    <h1 class="fw-light" style="margin-top: 75px;">Unsere Pläne</h1>
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <p class="lead text-muted">Du interessierst dich für eine Partnerschaft mit uns? Dann schau dir unsere Nutzerorientierten Pläne an und lege direkt los!</p>
                </div>
            </div>
        </section>
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
  <main style="margin-top: -45px;">
  <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <div class="col">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="card mb-4 rounded-3 shadow-sm">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div class="card-header py-3">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <h4 class="my-0 fw-normal">Kostenlos</h4>
          </div>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div class="card-body">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <h1 class="card-title pricing-card-title">0€<small class="text-muted fw-light">/mo</small></h1>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <ul class="list-unstyled mt-3 mb-4">
              <li>Unbegrenzte Artikel</li>
              <li>Öffentlicher Kundensupport</li>
              <li>Versicherung bis 30€</li>
            </ul>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <a href="register.php" type="button" class="w-100 btn btn-lg btn-outline-dark">Jetzt registrieren</a>
          </div>
        </div>
      </div>
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <div class="col">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="card mb-4 rounded-3 shadow-sm">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div class="card-header py-3">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <h4 class="my-0 fw-normal">Reseller</h4>
          </div>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div class="card-body">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <h1 class="card-title pricing-card-title">10€<small class="text-muted fw-light">/mo</small></h1>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <ul class="list-unstyled mt-3 mb-4">
              <li>Unbegrenzte Artikel</li>
              <li>Privater Support</li>
              <li>Versicherung bis 100€</li>
              <li>Zeige deinen Artikel an der Spitze (2x/mo.)</li>
            </ul>
            <a href="https://paypal.com/" target="_blank" type="button" class="w-100 btn btn-lg btn-warning">Jetzt kaufen</a>
          </div>
        </div>
      </div>
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <div class="col">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <div class="card mb-4 rounded-3 shadow-sm border-dark">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div class="card-header py-3 text-bg-dark border-dark">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <h4 class="my-0 fw-normal">Unternehmen</h4>
          </div>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div class="card-body">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <h1 class="card-title pricing-card-title">30€<small class="text-muted fw-light">/mo</small></h1>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <ul class="list-unstyled mt-3 mb-4">
              <li>Unbegrenzte Artikel</li>
              <li>Priorisierter Privater Support</li>
              <li>Verifizierungsabzeichen im Profil</li>
              <li>Versicherung bis 450€</li>
              <li>Zeige deinen Artikel an der Spitze (10x/mo.)</li>
            </ul>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <a href="mailto:take2new@iu-study.org" type="button" class="w-100 btn btn-lg btn-success">Kontaktiere uns</a>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

    <?php include('./components/footer.php');?>
</body>

</html>
