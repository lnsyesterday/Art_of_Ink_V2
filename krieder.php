<?php $pageTitle = "Kamilla Rieder"; 
$languageBarEn = "krieder.php";
$languageBarDk = "krieder_dk.php";
?>

<?php require "includes/head.php" ?>

<?php require "includes/loader.php" ?>

<div id="wrapper" class="wrapper d-none">

<?php include "includes/header.php" ?>

	<main class="main--artists" id="artists">
		<div class="sidebarleft"></div>
			<article class="article--artists profile">
				<h1>Kamilla Rieder</h1>
				<div class="circle-container">
					<img src="img/krieder.jpg" class="responsive-circle">
					<span class="circle-cover"></span>
					<a href="https://www.instagram.com/kamilla.ri/" target="_blank"><img class="instagram-icon" src="img/instagram_icon.svg"></a>
				</div>
				<div class="profile--headline">
					<h2><q>Wear your heart on your skin in this life.</q></h2>
					<p>Sylvia Plath</p>
				</div>

				<p>Kamilla is the youngest member of the group and is currently the only woman in the shop.</p>
				<p>She came in as an apprentice in the Aarhus shop, and can be found there daily. 
				Kamilla has a fine line and does well with smaller tattoos, but enjoys doing a bit of everything. When drawing she leans towards a darker style, and is always ready to do pieces that ventures into the dark art style.
				</p>
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

								userId:296365342,
								accessToken:'296365342.685f82c.881d3d27ee2c4ad1aaef83e17259776a'
								});feed.run();
								</script>
							<div id='ody'></div>
						
					
				</div>
			
			</article>
	</main>

<?php include "includes/footer.php" ?>