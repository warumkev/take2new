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
                    <img src="./assets/brand/take2new-logos_black.png" class="rounded mx-auto d-block" width="490px" height="180px" style="margin-top: -50px;"><br>
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <h1 class="fw-light">Checkout</h1>
                    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                    <p class="lead text-muted">Gib deine Daten ein und der Artikel wandert in deinen Schrank.</p>
                </div>
            </div>
        </section>
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <div class="container">
  <main>
    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <div class="row g-5">
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <div class="col-md-5 col-lg-4 order-md-last">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <span class="text-dark">Artikel</span>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <span class="badge bg-dark rounded-pill">1</span>
        </h4>
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <ul class="list-group mb-3">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <h6 class="my-0"><?php echo $artInfo['itemname'];?></h6>
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <small class="text-muted">Größe <?php echo $artInfo['itemsize'];?></small>
            </div>
          </li>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <li class="list-group-item d-flex justify-content-between">
            <span>Summe (EUR)</span>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <strong><?php echo $artInfo['itemprice']." €";?></strong>
          </li>
        </ul>

      </div>
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <div class="col-md-7 col-lg-8">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <h4 class="mb-3">Rechnungsadresse</h4>
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <form class="needs-validation" novalidate="" method="post">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div class="row g-3">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="col-sm-6">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <label for="firstName" class="form-label">Vorname</label>
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required="" control-id="ControlID-3">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <div class="invalid-feedback">
                Ein gültiger Vorname muss angegeben werden!
              </div>
            </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="col-sm-6">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <label for="lastName" class="form-label">Nachname</label>
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required="" control-id="ControlID-4">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <div class="invalid-feedback">
              Ein gültiger Nachname muss angegeben werden!
              </div>
            </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="col-12">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" control-id="ControlID-6">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <div class="invalid-feedback">
              Bitte geben Sie eine gültige E-Mail-Adresse für Versand-Updates ein.
              </div>
            </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="col-12">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <label for="address" class="form-label">Adresse</label>
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <input type="text" class="form-control" id="address" name="address" placeholder="Musterstraße 1" required="" control-id="ControlID-7">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <div class="invalid-feedback">
              Bitte geben Sie Ihre Versandadresse ein.
              </div>
            </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="col-12">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <label for="plz" class="form-label">PLZ / Stadt</label>
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <input type="text" class="form-control" id="plz" name="plz" placeholder="63123 / Musterstadt" control-id="ControlID-8">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            </div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <hr class="my-4">
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <h4 class="mb-3">Zahlungsweise</h4>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <div class="my-3">
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
            <div class="form-check">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <input id="credit" name="credit" name="paymentMethod" type="radio" class="form-check-input border-dark bg-dark" checked="" required="" control-id="ControlID-14">
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <label class="form-check-label" for="bar">Barzahlung bei Lieferung</label>
            </div>
</div>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <hr class="my-4">
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <button name="order" type="post" class="btn btn-dark">Bestellung aufgeben</button>
        </form>
      </div>
    </div>
  </main>
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
