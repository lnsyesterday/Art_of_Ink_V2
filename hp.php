<?php $pageTitle = "HP"; 
$languageBarEn = "hp.php";
$languageBarDk = "hp_dk.php";
?>

<?php require "includes/head.php" ?>

<?php require "includes/loader.php" ?>

<div id="wrapper" class="wrapper d-none">

<?php include "includes/header.php" ?>

	<main class="main--artists" id="artists">
		
		<div class="sidebarleft"></div>

		<article class="article--artists profile">
				<h1>HP</h1>
				<div class="circle-container">
					<img src="img/hp-portrait.jpg" class="responsive-circle">
					<span class="circle-cover"></span>
					<a href="https://www.instagram.com/jonaswilly/" target="_blank"><img class="instagram-icon" src="img/instagram_icon.svg"></a>
				</div>
				<div class="profile--headline">
					<h2><q>Tattoos give us the inspiration to be ourselves.</q></h2>
					<p>Anthony T. Hincks</p>
				</div>
				<p>HP is the man behind the success. He started his career as an apprentice for Micheal Guldman, and has since then had his own shops in both Kolding and Odense.</p>
				<p>HP has tattooed for about 20 years, and has taught several talented artists during this period. HP is skillful in all styles, but has always had a certain eye for oriental art. He loves freehand work, and will gladly create big japanese pieces this way.</p>
		</article>
		<div class="white-bar"><h2>My works</h2></div>
			<div class="sidebarright"></div>
			<article class="instabox">
				<div class='instagrid section' id='Instagram'>
					
						
								<script type='text/javascript'>

								var feed=new ody({get:"user",
									limit: 12, // Limit the number of posts shown

									resolution:"standard_resolution",
									template:'<li><a href="{{link}}" target="_blank" style="background-image:url({{image}});background-size: cover;"><img src="https://lh3.googleusercontent.com/-P-gOTAfNfZ4/V2RPSYvECxI/AAAAAAAABng/Efqy2Oxjqm4lrmDhT07PBtlgYRb_MlJ7QCCo/s576/questyerror.png"></img><div class="instagrid-z"><div class="instagrids"><span class="instagrid-outter">{{likes}} <i class="fa fa-heart"></i><br/>{{comments}} <i class="fa fa-comment"></i></span></div></div></a></li>',

								userId:4197572454,
								accessToken:'4197572454.106c8cd.14949c47f6e54147ad57fda41dab265c'
								});feed.run();
								</script>
							<div id='ody'></div>
						
					
				</div>
			
			</article>
	</main>

<?php include "includes/footer.php" ?>

