<!-- Edwin Lawisan 1606876790 --> 

<link rel="stylesheet" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SIMUI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"> HOME <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="profilPengguna.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tampilkanKepanitiaan.php">Daftar Kepanitiaan</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="tampilkanEvent.php">Daftar Event</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="tampilkanOrganisasi.php">Daftar Organisasi</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Buat
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Event</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Organisasi</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="buatKepanitiaan.php">Kepanitiaan</a>
        </div>
      </li>
    <?php
      if(isset($_SESSION["username"])){
        echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
      } else {
        echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>';
      }
      ?>
    </ul>
  </div>
</nav>      