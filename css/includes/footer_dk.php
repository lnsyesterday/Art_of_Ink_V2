<?php 
$startYear = 2008;
$thisYear = date('Y');
if ($thisYear > $startYear) {
    $thisYear = date('y');
    $copyright = "$startYear&dash;$thisYear";
} else {
    $copyright = $startYear;
}
 ?>
<footer class="footer black" id="contact">
	<h1 class="footer-headline">Kontakt</h1>

	<section class="footer__section">
		<div class="addressWrapper white">
			<h2 class="footer__h">Telefon</h2>
			<p class="footer__p">
			<a href="tel:+4566119060" class="phoneLink"><img class="phoneIcon" src="./img/phone-icon.svg" alt="phone icon">+45 66 11 90 60</a>
			</p>
			<h2 class="footer__h">Adresse</h2>
			<address class="footer__p">Grønnegade 58, Aarhus, Denmark-8000</address>
		</div>
		
		<div class="googleMaps" id="locationMap"></div>
	</section>


	<section class="footer__section">
		<h2 class="footer-headline">Sociale medier</h2>
		
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

		<h2 class="footer-headline">Åbningstider</h2>
		<p>Vi er <span class="bold" id="openStatus"></span></p>
		<p id="openMessage" class="d-none footer__p">Du er velkommen til at komme forbi. Lad os snakke og have en kop kaffe!</p>
		<p id="closedMessage" class="d-none footer__p">Du kan sende os en besked på Facebook eller komme forbi senere.</p>

	<table class="openingHours__table">
		
		<tr id="monday">
			<td>Mandag:</td>
			<td>10 - 18</td>
		</tr>
		<tr id="tuesday">
			<td>Tirsdag:</td>
			<td>11 - 19</td>
		</tr>
		<tr id="wednesday">
			<td>Onsdag:</td>
			<td>10 - 18</td>
		</tr>
		<tr id="thursday">
			<td>Torsdag:</td>
			<td>10 - 18</td>
		</tr>
		<tr id="friday">
			<td>Fredag:</td>
			<td>10 - 18</td>
		</tr>
		<tr id="saturday">
			<td>Lørdag:</td>
			<td>Lukket</td>
		</tr>
		<tr id="sunday">
			<td>Sondag:</td>
			<td>Lukket</td>
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

</div><!-- End of Wrapper -->

	<script src="js/smoothScroll.js"></script>
	<script src="js/loader.js"></script>
	<script src="js/hamburger.js"></script>
	<script src="js/facebook_like.js"></script>
	<script src="js/date_dk.js"></script>
	<script src="js/maps.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2ED7FrptqUOzKtwuRS134pYzziGJTtQk&callback=initMap" async defer></script>

</body>
</html>
