<div id="fb-root"></div>

	<header class="header">
		<div onclick = "void(0)" id="menu-icon" class="menu-icon menu">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div id="sidebar" class="sidebar">
			<a href="index_dk.php"><img class="sidebar__img" src="img/logo.png" alt="logo"></a>

			<div class="language-bar">
          		<a href="<?php echo $languageBarEn; ?>" hreflang="en"><img class="language-icon" src="img/english-flag-icon.ico" alt="english-flag-icon"></a>
          		<a href="<?php echo $languageBarDk; ?>" hreflang="da"><img class="language-icon" src="img/danish-flag-icon.ico" alt="danish-flag-icon"></a>
    		</div>

			<ul class="sidebar__menu">
				<li><a href="index_dk.php">Hjem</a></li>
				<li><a href="about_dk.php">Om os</a></li>
				<button class="dropdown-btn"><a href="artists_dk.php">Kunstnere</a><br><i class="fas fa-caret-down"></i></button>
					<ul class="dropdown">
						<li><a href="jwilly_dk.php">Jonas</a></li>
						<li><a href="sbrandt_dk.php">Simon</a></li>
						<li><a href="krieder_dk.php">Kamilla</a></li>
					</ul>
			</ul>

			<div class="fb-like" data-href="https://www.facebook.com/aoiaarhus/" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
			
			<ul class="sidebar__socialmedia">
				<li class="socialmedia__li"><a href="https://www.facebook.com/aoiaarhus/" target="_blank" class="socialmedia__a"><img src="./img/facebook_icon.svg" alt="facebook icon"></a></li>
				<li class="socialmedia__li"><a href="https://www.instagram.com/artofink_dk/" target="_blank" class="socialmedia__a"><img src="./img/instagram_icon.svg" alt="instagram icon"></a></li>
			</ul>
		</div>

	</header>
	