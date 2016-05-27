<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/sortiment.css"/>
</head>

<body>
<?php require 'includes/header.php'; ?>
    <div id="Sortiment_Wrapper2">
      	<div class="Sortiment_Contents">
			<div class="Left_Nav">
				<noscript>
					<h1>Vælg din kategori</h1>
					<div class="Productfilter_Category">
						<form action="sortiment.php" method="post">
							<select name="Search_CategoryPHP" id="Search_CategoryPHP">
								<option value="Buketter" selected="true">Buketter</option>
								<option value="Brullup">Brullup</option>
								<option value="Dekorationer">Dekorationer</option>
								<option value="Udendørs planter">Udendørs planter</option>
								<option value="Indendørs planter">Indendørs planter</option>
								<option value="Begravelse">Begravelse</option>
								<option value="Diverse">Diverse</option>
							</select>
							<button type="submit">Søg</button>
						</form>
					</div>
				</noscript>
				<nav id="Slide_Menu" style="display:none">
					<ul>
						<li>
							<a href="#">Buketter</a>
							<ul class="Left_Sub_Nav">
								<li><a href="#">Buketter fra 100-149kr.-</a></li>
								<li><a href="#">Buketter fra 150-199kr.-</a></li>
								<li><a href="#">Buketter fra 200-299kr.-</a></li>
								<li><a href="#">Buketter over 300kr.-</a></li>
								<li><a href="#">Kondolance buketter</a></li>
								<li><a href="#">Jule buketter</a></li>
								<li><a href="#">Påske buketter</a></li>
								<li><a href="#">Romantiske buketter</a></li>
								<li><a href="#">Mor og barn-buketter</a></li>
								<li><a href="#">Enkelte roser</a></li>
							</ul>
						</li>

						<li>
							<a href="#">Brullup</a>
							<ul class="Left_Sub_Nav">
								<li><a href="#">Brudebuketter</a></li>
								<li><a href="#">Brudepige buketter</a></li>
								<li><a href="#">Knaphulsblomst</a></li>
								<li><a href="#">Bordpynt</a></li>
								<li><a href="#">Kirkepynt</a></li>
								<li><a href="#">Bil udsmykning</a></li>
							</ul>
						</li>

						<li>
							<a href="#">Begravelse</a>
							<ul  class="Left_Sub_Nav">
								<li><a href="#">Bårebuketter</a></li>
								<li><a href="#">Kistepynt</a></li>
								<li><a href="#">Opsæt</a></li>
								<li><a href="#">Kranse</a></li>
								<li><a href="#">Hjerter</a></li>
								<li><a href="#">Urnepynt</a></li>
							</ul>
						</li>

						<li>
							<a href="#">Dekorationer</a>
							<ul class="Left_Sub_Nav">
								<li><a href="#">Borddekorationer</a></li>
								<li><a href="#">Festlokaler</a></li>
								<li><a href="#">Restaurant</a></li>
							</ul>
						</li>

						<li>
							<a href="#">Udendørs planter</a>
						</li>

						<li>
							<a href="#">Indendørs planter</a>
							<ul  class="Left_Sub_Nav">
								<li><a href="#">Orkideer</a></li>
							</ul>
						</li>

						<li>
							<a href="#">Diverse</a>
							<ul  class="Left_Sub_Nav">
								<li><a href="#">Vaser</a></li>
								<li><a href="#">Grave lys</a></li>
								<li><a href="#">Jord</a></li>
								<li><a href="#">Gødning</a></li>
								<li><a href="#">LECA nødder</a></li>
								<li><a href="#">Bladglans</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<div class="Mid_Content">
				<noscript>
					<?php if(isset($_POST['Search_CategoryPHP'])) : ?>
						<h1><?php echo $_POST['Search_CategoryPHP']; ?></h1>
					<?php endif; ?>
				</noscript>
				<h1></h1> <!-- This tag gets filled up by jquery, don't remove! -->
				<div class="Sub_Content">
					<div class="Text_Bar">
						<?php
							if(isset($icategory)){
								$i = 0;
								foreach ($icategory as $info_text) {
									echo <<<EOT
										<p class="Info_Text">{$info_text->Text_field}</p>

EOT;
									if($i == 0) break;
									$i++;
								}
								if(empty($icategory)){
									echo "<p class='Info_Text'>Ingen produkter på nuværende tidspunkt, søg igen i sortiment for andet inspiration.</p>";
								}
							}
						?>
						<script id="Info_Text" type="text/x-handlebars-template">
							{{#each this}}
								{{#if @first}}
									<p class="Info_Text">{{Text_field}}</p>
								{{/if}}
							{{else}}
									<p class='Info_Text'>Ingen produkter på nuværende tidspunkt, søg igen i sortiment for andet inspiration.</p>
							{{/each}}
						</script>
					</div>
					<div class="Products">
						<ul class="Products_List">
								<?php
									if(isset($icategory)){
										foreach ($icategory as $info) {
											echo <<<EOT
											<li>
												<div class="Product_Info">
													<p id="Product_Name">{$info->Name} </p>
													<p id="Product_Description"><span>Beskrivelse:</span> {$info->Description}</p>
													<p id="Product_Price"><span>Pris:</span> {$info->Price} DKK</p>
												</div>
												<a href="{$info->Img_path_full}{$info->Img_name}{$info->Img_type}" target="blank">
													<img id="Product_Img" src="{$info->Img_path_thumbnail}{$info->Img_name}{$info->Img_type}" alt="{$info->Img_name}">
												</a>
											</li>
EOT;
									    }
									}
								?>
							<script id="Products_List_Template" type="text/x-handlebars-template">
								{{#each this}}
									<li>
										<div class="Product_Info">
											<p id="Product_Name">{{Name}}</p>
											<p id="Product_Description"><span>Beskrivelse:</span> {{Description}}</p>
											<p id="Product_Price"><span>Pris:</span> {{Price}} DKK</p>
										</div>
										<a href="{{Img_path_full}}{{Img_name}}{{Img_type}}" target="blank">
											<img id="Product_Img" src="{{Img_path_thumbnail}}{{Img_name}}{{Img_type}}" alt="{{Img_name}}">
										</a>
									</li>
								{{/each}}
							</script>
						</ul>
					</div>
				</div>
			</div>
      	</div>
    </div>
<?php include 'includes/footer.php'; ?>
<script src="../js/sortiment.js" type="text/javascript"></script>
<script src="../js/products.js" type="text/javascript"></script>