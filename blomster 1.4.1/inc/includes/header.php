 <?php
  require_once "../assets/functions.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/reset_main.css"/>
  <link rel="stylesheet" type="text/css" href="../css/header.css"/>
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <script src="../js/libs/jquery-1.12.0.js" type="text/javascript"></script>
  <script src="../js/libs/handlebars-v4.0.5.js" type="text/javascript"></script>
  <title>Søborg blomster</title>
</head>
    <div id="Wrapper0">
      <header>
        <div class="Wrapper1">

          <div class="Top_Nav_Bar">

          </div><!-- End of Top_Nav_Bar -->

          <div class="Middle_Nav_Bar">

            <div id="Logo">
              <a href="../index.php"><img src="../img/logo1.png" alt=""></a>
            </div>

            <div class="Nav_list">
              <nav>
                <ul>

                  <li>
                    <a href="">OM OS</a>
                  </li>

                  <li>
                    <a href="../inc/kontakt_view.php">FIND BUTIKKEN</a>
                  </li>

                  <li>
                    <a href="../inc/blomster_levering.php">BLOMSTER LEVERING</a>
                  </li>

                  <li>
                    <a href="">NYHEDER</a>
                  </li>

                  <li>
                    <a href="">FAQ</a>
                  </li>

                </ul>
              </nav>
            </div>

          </div><!-- End of Middle_Nav_Bar -->

          <div id="Nav_Bar">
            <nav>
              <ul>
                <li class="<?php selected("index")?>"  id="Forside">
                  <a class="active" href="../index.php">Forside</a>
                </li>

                <li class="<?php selected("sortiment")?>" >
                  <a class="active" href="sortiment.php">Sortiment</a>
                </li>

                <li class="<?php selected("galleri")?>">
                  <a class="active" href="galleri.php">Galleri</a>
                </li>

                <li class="<?php selected("kontakt_view")?>">
                  <a class="active" href="kontakt_view.php">Kontakt</a>
                </li>
             </ul>
            </nav>
          </div><!-- End of Nav_Bar -->
        </div><!-- End of Wrapper1 -->
      </header><!-- End of header -->