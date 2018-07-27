<?php $pageTitle = "Art of Ink";
$menuTab = "Home";
?>
<?php require "includes/head.php" ?>
<?php require "includes/loader.php" ?>
<div id="wrapper" class="wrapper d-none">

	<div id="particles-js" class="videoWrap">
		<video id="outplay" class="video" autoplay loop muted playsinline poster="https://media.giphy.com/media/mXyPlt3ZDZuup4KWEy/giphy.gif">
			<source src="video/aoi_bg_vid.mp4" type="video/mp4">
		</video>
	
	</div>

	<div class="videoMargin">
		<?php require "includes/header.php" ?>
		<?php include "includes/mainpage.php" ?>
		<div class="clearfix"></div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.js"></script>
	<script src="js/load_particles.js"></script>
<?php include "includes/footer.php" ?>


