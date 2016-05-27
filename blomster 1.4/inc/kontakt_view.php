<?php
	session_start();
	require_once 'includes/header.php';
	require_once '../assets/libs/security.php';

	//if there is a error set it, otherwise show empty array:
	$errors    = isset($_SESSION['errors'])    ? $_SESSION['errors']    : [];
	$fields    = isset($_SESSION['fields'])    ? $_SESSION['fields']    : [];
	$emailsent = isset($_SESSION['emailsent']) ? $_SESSION['emailsent'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/kontakt_view.css"/>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <title>Søborg blomster</title>
</head>
	<div id="Kontakt_Wrapper2">
      	<div class="Kontakt_Contents">
      		<div class="Kontakt_Form">
				<?php if(!empty($errors)): ?>
			      	<div class="Panel1">
			      		<ul>
			      			<li>
			      				<?php echo implode('</li><li>', $errors); ?>
			      			</li>
			      		</ul>
			      	</div>
		      	<?php endif; ?>

		      	<?php if(!empty($emailsent)): ?>
			      	<div class="Panel2">
			      		<ul>
			      			<li>
			      				<?php echo implode('</li><li>', $emailsent); ?>
			      			</li>
			      		</ul>
			      	</div>
		      	<?php endif; ?>

				<form action="kontakt.php" method="post">
					<Label>
						<h1>Dit fulde navn*</h1>
						<input type="text" name="name" autocomplete="off" <?php echo isset($fields['Navn']) ? 'value="' . e($fields['Navn']) . '"' : '' ; ?>>
					</Label>

					<Label>
						<h1>Din email adresse*</h1>
						<input type="text" name="email" autocomplete="off"<?php echo isset($fields['Email']) ? 'value="' . e($fields['Email']) . '"' : '' ; ?>>
					</Label>

					<Label>
						<h1>Din besked*</h1>
						<textarea name="message"><?php echo isset($fields['Besked']) ? e($fields['Besked']) : '' ; ?></textarea>
					</Label>

					<input type="submit" value="Send">

					<p class="Muted">"*" Betyder: fæltet er krævet</p>
				</form>
			</div>
			<div id="Find_Os_Kort"></div>
      	</div>
    </div>
<?php
//Superglobal sessions end
unset($_SESSION['errors']);
unset($_SESSION['fields']);
unset($_SESSION['emailsent']);
require 'includes/footer.php';
?>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="../js/google_kort.js"></script>
