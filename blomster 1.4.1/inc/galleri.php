<?php
	$directory = "../img/gallery/";
	if (glob($directory . "*.jpg") != false) {
	 $filecount = count(glob($directory . "*.jpg"));
	}

	$imagescount = $filecount; // SET TOTAL IMAGES IN GALLERY
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/galleri.css"/>
</head>

<body>
<?php require 'includes/header.php'; ?>
    <div id="Galleri_Wrapper2">
      <div class="Galleri_Contents">
      	<div class="Text_Bar">
			<p>Her kan du se et galleri over nogle af de produkter vi har lavet, igennem tiden. Hvad der ses i galleriet er vejledende, vi kan nemt lave noget der er en blanding af det hele, så bliv inspireret!</p>
		</div>
		<?php
			echo '<ul>';
			for($i = 1; $i<= $imagescount; $i++) {
				echo '<li><a href="../img/gallery/' . $i . '.jpg" class="thumbnailsimage' . $i . ' preview"><img src="../img/gallery/' . $i . '.jpg" width="auto" height="200" alt=""/></a></li>';
			}
			echo '</ul>';
		 ?>
      </div>
    </div>
<?php include 'includes/footer.php'; ?>
<script src="../js/galleri.js" type="text/javascript"></script>