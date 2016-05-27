<?php
	require_once "assets/functions.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset_main.css"/>
	<link rel="stylesheet" type="text/css" href="css/header.css"/>
	<link rel="stylesheet" type="text/css" href="css/footer.css"/>
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<script src="js/libs/jquery-1.12.0.js"></script>
	<title>Søborg blomster</title>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-74185174-1', 'auto');
	  ga('send', 'pageview');
    </script>
</head>
<body>
    <div id="Wrapper0">
    	<header>
	        <div class="Wrapper1">

		        <div class="Top_Nav_Bar">

		        </div><!-- End of Top_Nav_Bar -->

		        <div class="Middle_Nav_Bar">
			        <div id="Logo">
			            <a href="index.php"><img src="img/logo1.png" alt=""></a>
			        </div>

			  	<div class="Nav_list">
	              	<nav>
		                <ul>

		                  <li>
		                    <a href="">OM OS</a>
		                  </li>

		                  <li>
		                    <a href="inc/kontakt_view.php">FIND BUTIKKEN</a>
		                  </li>

		                  <li>
		                    <a href="inc/blomster_levering.php">BLOMSTER LEVERING</a>
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
		                <li class="<?php selected("index")?>" id="Forside">
		                  <a class="active" href="index.php">Forside</a>
		                </li>

		                <li class="<?php selected("sortiment")?>">
		                  <a class="active" href="inc/sortiment.php">Sortiment</a>
		                </li>

		                <li class="<?php selected("galleri")?>">
		                  <a class="active" href="inc/galleri.php">Galleri</a>
		                </li>

		                <li class="<?php selected("kontakt_view")?>">
		                  <a class="active" href="inc/kontakt_view.php">Kontakt</a>
		                </li>
	                </ul>
	            </nav>
	          </div><!-- End of Nav_Bar -->
	        </div><!-- End of Wrapper1 -->
    	</header><!-- End of header -->

		<div id="Wrapper2">
			<div class="Contents">
			</div>
		</div>

      <footer>
        <div id="Wrapper3">
	        <div class="Top_Footer_Section">

	        </div>

			<div class="Mid_Footer_Section">
	            <div class="Information">
	                <h1>Information</h1>
	                <ul>
	                  <li>
	                    <a href="#">Om os</a>
	                  </li>

	                  <li>
	                    <a href="#">Betingelser</a>
	                  </li>

	                  <li>
	                    <a href="#">Blomster levering</a>
	                  </li>

	                  <li>
	                    <a href="#">Nyheder</a>
	                  </li>

	                  <li>
	                    <a href="#">FAQ</a>
	                  </li>
	                </ul>
	            </div>

	            <div class"Adresse">
	                <h1>Adresse</h1>
	                <ul>
	                	<li>
	                		<h2>Søborg Blomster</h2>
	                	</li>
	                	<li>
	                		<h2>Søborg hovedgade 73</h2>
	                	</li>
	                	<li>
	                		<h2>2860 Søborg</h2>
	                	</li>
	                	<li>
	                		<a href="">Find os her >></a>
	                	</li>
	                </ul>
	            </div>

	            <div class"Kontakt">
	                <h1>Kontakt</h1>
	                <ul>
	                	<li>
	                		<p>Tlf:<span>57 67 67 67</span></p>
	                	</li>

	                	<li>
	                		<p>E-mail: skriv til os i <a href="inc/kontakt_view.php">kontaktformularen.</a></p>
	                	</li>

	                	<li>
	                		<p>CVR:<span>18 89 75 39</span></p>
	                	</li>
	                </ul>
	            </div>

	            <div class"Åbningstider">
	                <h1>Åbningstider</h1>
	                <ul>
	                	<li>
	                		<p>Man:<span>10:00 - 17:00</span></p>
	                	</li>
	                	<li>
	                		<p>Tirs:<span>9:00 - 18:00</span></p>
	                	</li>
	                	<li>
	                		<p>Ons:<span>9:00 - 18:00</span></p>
	                	</li>
	                	<li>
	                		<p>Tors:<span>9:00 - 18:00</span></p>
	                	</li>
	                	<li>
	                		<p>Fre:<span>9:00 - 18:00</span></p>
	                	</li>
	                	<li>
	                		<p>Lør:<span>9:00 - 16:30</span></p>
	                	</li>
	                	<li>
	                		<p>Søn:<span>9:00 - 15:30</span></p>
	                	</li>
	                </ul>
	            </div>
          	</div>

            <div class="Lower_Footer_Section">
	            <div class="Lower_Footer_Nav-Bar">
	              <ul>
	                <li>
	                  <a href="index.php">Forside</a>
	                </li>

	                <li>
	                  <a href="inc/sortiment.php">Sortiment</a>
	                </li>

	               <li>
	                  <a href="inc/galleri.php">Galleri</a>
	                </li>

	                 <li>
	                  <a href="inc/kontakt.php">Kontakt</a>
	                </li>
	              </ul>
	            </div>
                <p>VERSION 1.0 &nbsp COPYRIGHT &copy<span>FADI BUNNI</span></p>
          </div>
        </div><!-- End of Wrapper3 -->
      </footer>
    </div><!-- End of Wrapper0 -->
  </body><!-- End of Body -->
</html>