<!-- Debut d'un fichier incluant les sources CSS de materialize -->
<?php include_once("debut_fichier.php");?>

<?php
  if(!isset($_SESSION["login"]))
  {
    ?>
    <!-- Menu bleu en haut du site -->
    <header class="">
        <div class="navbar-fixed">
            <nav class="nav-wrapper blue">
                <div class="container">
                    <a href="#!" class="brand-logo center">Vérif&Quations</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <!-- Eléments du menu -->
                    </ul>
                </div>
            </nav>
        </div>
    </header>

      <ul class="sidenav" id="mobile-demo">
          <!-- Eléments du menu avec le side-nav -->
      </ul>
    <?php
  }
  else if($_SESSION["type"] == 2)
  {
    ?>
    <nav>
      <div class="nav-wrapper blue">
        <a href="#" class="brand-logo">Vérif&Quations</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="../professeur/message_eleve.php">Messages des élèves</a></li>
          <li><a href="cours_professeur.php">Cours</a></li>
          <li><a href="../deconnexion.php">Déconnexion</a></li>
        </ul>
      </div>
    </nav>
    <?php
  }