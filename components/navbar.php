<nav class="navbar navbar-expand-sm navbar-light bg-light" aria-label="Third navbar example">
  <div class="container-fluid">
    <a class="navbar-brand" href="">
      <img src="assets/brand/take2new-logos_black.png" alt="Bootstrap" width="150" height="58">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03"
      aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
      <ul class="navbar-nav me-auto mb-2 mb-sm-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Startseite</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="pricing.php">Unsere Pläne</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="items.php">Unser Sortiment</a>
        </li>
        <?php if (!isset($_SESSION['loggedin'])) { ?>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">Anmelden</a>
        </li>
        <?php } else { ?>
            <?php if (isset($_SESSION['admin'])) { ?>
              <li class="nav-item">
                <a class="nav-link active" href="users.php">Benutzer</a>
              </li>
            <?php } ?>
        <li class="nav-item">
          <a class="nav-link active" href="profile.php">Mein Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="sell.php">Verkaufen</a>
        </li>
        <?php } ?>
        
      </ul>
      <?php 

      if (isset($_GET['searchBtn'])) {

        $keyWord = $_GET['search'];
      
        header("Location: ./home.php?keyword=" . $keyWord);
      
      }

      ?>
      <form class="d-flex" role="search">
        <input class="form-control me-2 btn btn-outline-dark" type="search" placeholder="Artikel durchstöbern" name="search" aria-label="Search">
        <input class="btn btn-outline-warning" type="submit" value="Suchen">
      </form>
    </div>
  </div>
</nav>
