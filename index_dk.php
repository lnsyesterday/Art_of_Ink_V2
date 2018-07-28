<?php $pageTitle = "Art of Ink"; 
$menuTab = "Home";
$languageBarEn = "index.php";
$languageBarDk = "index_dk.php";
?>
<?php require "includes/head.php" ?>
<?php require "includes/loader.php" ?>

	<div id="wrapper" class="wrapper d-none">

	<div id="particles-js" class="videoWrap">
		<video autoplay loop muted class="video" poster="img/bg.jpg">
			<source src="video/aoi_bg_vid.mp4" type="video/mp4">
		</video>
	</div>

	<div class="videoMargin">
		<?php require "includes/header_dk.php" ?>
		<?php include "includes/mainpage_dk.php" ?>
		<div class="clearfix"></div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.js"></script>
<script src="js/load_particles.js"></script>
<?php include "includes/footer_dk.php" ?>


