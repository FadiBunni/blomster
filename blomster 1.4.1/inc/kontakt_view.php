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
      		<div class="Text_Box">
      			<h1 class="Title">Find os &amp; kontakt os</h1>
      			<p>For neden kan du se, hvor vi befinder os. <br> Til højre kan du bestille, eller skrive til os hvis du har spørgsmål. Hvis du vil bestille, vil vi gerne bede om dine oplysninger; fornavn, efternavn, telefonnummer. Ydermere skal vi også vide, hvilken betalingsmetode du vil benytte, en beskrivelse og en cirka pris på din bestilling, samt fornavn, efternavn, og adressen på modtageren.
      			</p>
      		</div>
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
			<div id="Find_Os_Kort"></div><!--Used for showing the google map-->
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
