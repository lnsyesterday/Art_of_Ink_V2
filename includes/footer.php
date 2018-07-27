<?php 
$startYear = 2008;
$thisYear = date('Y');
if ($thisYear > $startYear) {
    $thisYear = date('Y');
    $copyright = "$startYear &dash; $thisYear";
} else {
    $copyright = $startYear;
}
 ?>
<footer class="footer black" id="contact">
	<h1 class="footer-headline">Contact</h1>

	<section class="footer__section">
		<div class="addressWrapper white">
			<h2 class="footer__h">Phone</h2>
			<p class="footer__p">
			<a href="tel:+4566119060" class="phoneLink"><img class="phoneIcon" src="./img/phone-icon.svg" alt="phone icon">+45 66 11 90 60</a>
			</p>
			<h2 class="footer__h">Address</h2>
			<address class="footer__p">Grønnegade 58, Aarhus, Denmark-8000</address>
		</div>
		
		<div class="googleMaps" id="locationMap"></div>
	</section>


	<section class="footer__section">
		<h2 class="footer-headline">Social media</h2>
		
		<ul class="footer__socialmedia">
			<li class="footer__socialmedia__li socialmedia__li">
				<a href="https://www.facebook.com/aoiaarhus/" target="_blank" class="socialmedia__a">
				<img src="./img/facebook_icon.svg" alt="facebook icon">
				</a>
			</li>
			<li class="footer__socialmedia__li socialmedia__li">
				<a href="https://www.instagram.com/artofink_dk/" target="_blank" class="socialmedia__a">
				<img src="./img/instagram_icon.svg" alt="instagram icon">
				</a>
			</li>
		</ul>

	</section>

	<section class="footer__section openingHours__section">

		<h2 class="footer-headline">Opening hours</h2>
		<p>We are <span class="bold" id="openStatus"></span></p>
		<p id="openMessage" class="d-none footer__p">You are welcome to come by, have a chat and a cup of coffee!</p>
		<p id="closedMessage" class="d-none footer__p">You can send us a message on facebook or come by later.</p>

		<table class="openingHours__table">
			<tr id="monday">
				<td>Monday:</td>
				<td>10 - 18</td>
			</tr>

			<tr id="tuesday">
				<td>Tuesday:</td>
				<td>11 - 19</td>
			</tr>

			<tr id="wednesday">
				<td>Wednesday:</td>
				<td>10 - 18</td>
			</tr>

			<tr id="thursday">
				<td>Thursday:</td>
				<td>10 - 18</td>
			</tr>

			<tr id="friday">
				<td>Friday:</td>
				<td>10 - 18</td>
			</tr>

			<tr id="saturday">
				<td>Saturday:</td>
				<td>Closed</td>
			</tr>

			<tr id="sunday">
				<td>Sunday:</td>
				<td>Closed</td>
			</tr>
		</table>

</section>

    <div class="language-bar-footer">
          <a href="index.php" hreflang="en"><img class="language-icon-footer" src="img/english-flag-icon.ico" alt="english-flag-icon"></a>
          <a href="index_dk.php" hreflang="da"><img class="language-icon-footer" src="img/danish-flag-icon.ico" alt="danish-flag-icon"></a>
    </div>
    <div class="copyright">
		<p>&copy; All rights reserved<br> Art of Ink, <?php echo $copyright ?></p>
	</div>

</footer>

</div> <!-- End of Wrapper -->

	<!-- Scripts -->
	<script src="js/date.js"></script>
	<script src="js/smoothScroll.js"></script>
	<script src="js/loader.js"></script>
	<script src="js/hamburger.js"></script>
	<script src="js/facebook_like.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2ED7FrptqUOzKtwuRS134pYzziGJTtQk&callback=initMap" async defer></script>
	<script src="js/maps.js"></script>
</body>
</html>
