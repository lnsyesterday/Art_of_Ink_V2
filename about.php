<?php $pageTitle = "About"; 
$languageBarEn = "about.php";
$languageBarDk = "about_dk.php";
?>
<?php require "includes/head.php" ?>
<?php require "includes/loader.php" ?>

<div id="wrapper" class="wrapper d-none">

<?php require "includes/header.php" ?>
			
	<section class="about__container">
		<h1 class="about__us">About us</h1>
		
		<div class="about__us-paragraph">
			<p>We are professional tattoo artists with high quality standards and we are not settling down for anything less than greatness in our work. We have made <span id="tattoosMade"></span> tattoos.</p>
			<a class="call-to-action black" target="_blank" href="http://m.me/aoiaarhus">Want to have one too?</a>
		</div>

		<div class="parallax intro"></div>
		
		<div class="about__us-paragraph">		
			<p>Our tattoo shops are located in 2 beautiful cities - Odense and Aarhus. Art of Ink was born back in the 2008 when the first studio in Odense opened.</p>
		</div>
	</section>

	<div class="parallax diplomas"></div>

	<section>
		
		<h2 class="about__us">Our pioneer</h2>
		
		<div class="about__us-paragraph">
			<p>HP is the man behind the success. He started his career as an apprentice for Micheal Guldman, and has since then had his own shops in both Kolding and Odense.</p>
		</div>
		<div class="about__us-img">
			<img class="hp"  src="img/hp-desktop.jpg" alt="HP">
			<img class="hp-2" src="img/hp.jpg" alt="HP">
		</div>
		
		<div class="about__us-paragraph">
			<p>HP has tattooed for about 20 years, and has taught several talented artists during this period. HP is skillful in all styles, but has always had a certain eye for oriental art. He loves freehand work, and will gladly create big japanese pieces this way.</p>
		</div>
		
	</section>
<?php include "includes/footer.php" ?>
<script src="js/counter.js"></script>
