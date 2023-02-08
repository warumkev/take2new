<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
<nav class="navbar navbar-expand-sm navbar-light bg-light" aria-label="Third navbar example">
  <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
  <div class="container-fluid">
    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <a class="navbar-brand" href="">
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <img src="assets/brand/take2new-logos_black.png" alt="Bootstrap" width="150" height="58">
    </a>
    <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03"
      aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <span class="navbar-toggler-icon"></span>
    </button>
<!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
    <div class="collapse navbar-collapse" id="navbarsExample03">
      <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
      <ul class="navbar-nav me-auto mb-2 mb-sm-0">
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <li class="nav-item">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <a class="nav-link active" aria-current="page" href="home.php">Startseite</a>
        </li>
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <li class="nav-item">
          <a class="nav-link active" href="pricing.php">Unsere Pläne</a>
        </li>
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <li class="nav-item">
          <a class="nav-link active" href="items.php">Unser Sortiment</a>
        </li>
        <?php if (!isset($_SESSION['loggedin'])) { ?>
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <li class="nav-item">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <a class="nav-link active" href="login.php">Anmelden</a>
        </li>
        <?php } else { ?>
            <?php if (isset($_SESSION['admin'])) { ?>
              <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
              <li class="nav-item">
                <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
                <a class="nav-link active" href="users.php">Benutzer</a>
              </li>
            <?php } ?>
            <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <li class="nav-item">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <a class="nav-link active" href="profile.php">Mein Profil</a>
        </li>
        <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
        <li class="nav-item">
          <!-- Bezugnahme auf Design-Elemente von [Bootstrap 5.2.3]. -->
          <a class="nav-link active" href="sell.php">Verkaufen</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
