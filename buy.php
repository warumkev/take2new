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

  <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/dist/css/bootstrap.css">
</head>

<body>

  <?php include('./components/navbar.php'); ?>
  <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <img src="./assets/brand/take2new.svg" class="rounded mx-auto d-block" height="100px"><br>
                    <h1 class="fw-light">take<span class="text-danger">2</span>new - Checkout</h1>
                    <p class="lead text-muted">Gib deine Daten ein und der Artikel wandert in deinen Schrank.</p>
                </div>
            </div>
        </section>
    <div class="container">
  <main>
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-dark">Artikel</span>
          <span class="badge bg-dark rounded-pill">1</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"><?php echo $artInfo['itemname'];?></h6>
              <small class="text-muted"><?php echo $artInfo['itemsize'];?></small>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (EUR)</span>
            <strong><?php echo $artInfo['itemprice']." €";?></strong>
          </li>
        </ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Rechnungsadresse</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Vorname</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="" control-id="ControlID-3">
              <div class="invalid-feedback">
                Ein gültiger Vorname muss angegeben werden!
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Nachname</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="" control-id="ControlID-4">
              <div class="invalid-feedback">
              Ein gültiger Nachname muss angegeben werden!
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" control-id="ControlID-6">
              <div class="invalid-feedback">
              Bitte geben Sie eine gültige E-Mail-Adresse für Versand-Updates ein.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Adresse</label>
              <input type="text" class="form-control" id="address" placeholder="Musterstraße 1" required="" control-id="ControlID-7">
              <div class="invalid-feedback">
              Bitte geben Sie Ihre Versandadresse ein.
              </div>
            </div>

            <div class="col-12">
              <label for="plz" class="form-label">PLZ / Stadt</label>
              <input type="text" class="form-control" id="plz" placeholder="63123 / Musterstadt" control-id="ControlID-8">
            </div>

          <hr class="my-4">

          <h4 class="mb-3">Zahlungsweise</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input border-dark bg-dark" checked="" required="" control-id="ControlID-14">
              <label class="form-check-label" for="bar">Barzahlung bei Lieferung</label>
            </div>
</div>

          <hr class="my-4">

          <a class="w-100 btn btn-outline-dark btn-lg" type="post" control-id="ControlID-20">Continue to checkout</a>
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