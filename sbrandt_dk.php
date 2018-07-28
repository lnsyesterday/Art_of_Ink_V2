<?php $pageTitle = "Simon Brandt"; 
$languageBarEn = "sbrandt.php";
$languageBarDk = "sbrandt_dk.php";
?>

<?php require "includes/head.php" ?>

<?php require "includes/loader.php" ?>

<div id="wrapper" class="wrapper d-none">

<?php include "includes/header_dk.php" ?>

	<main class="main--artists" id="artists">
		<div class="sidebarleft"></div>
		<article class="article--artists profile">
		
				<h1>Simon Brandt</h1>
				<div class="circle-container">
					<img src="img/sbrandt.jpg" class="responsive-circle">
					<span class="circle-cover"></span>
					<a href="https://www.instagram.com/simonbrandt8k/" target="_blank"><img class="instagram-icon" src="img/instagram_icon.svg"></a>
			 	</div>
			 	<div class="profile--headline">
					<h2><q>My body is my journal, and my tattoos are my story.</q></h2>
					<p>Johnny Depp</p>
				</div>
				<p>Simon startede sin karriere i Århus, kort efter at shoppen åbnede i byen.
				</p>
				<p>Han har stået i lære hos HP, men har brugt det meget af hans hverdag i selvskab med Jonas og et bagland i graffiti miljøet, hvilket har afspejlet sig i hans tidligere arbejde. Han har sidenhen bevæget sig i sin helt egen retning, og specialiserer hovedsageligt i blackandgrey med fine streger, dotwork og sans for detaljer. Simon er i dag medejer af Århus-shoppen.</p>
		</article>
		<div class="white-bar"><h2>Mit arbejde</h2></div>
			<div class="sidebarright"></div>
			<article class="instabox">
				<div class='instagrid section' id='Instagram'>
					
						
								<script type='text/javascript'>

								var feed=new ody({get:"user",
									limit: 12, // Limit the number of posts shown

									resolution:"standard_resolution",
									template:'<li><a href="{{link}}" target="_blank" style="background-image:url({{image}});background-size: cover;"><img src="https://lh3.googleusercontent.com/-P-gOTAfNfZ4/V2RPSYvECxI/AAAAAAAABng/Efqy2Oxjqm4lrmDhT07PBtlgYRb_MlJ7QCCo/s576/questyerror.png"></img><div class="instagrid-z"><div class="instagrids"><span class="instagrid-outter">{{likes}} <i class="fa fa-heart"></i><br/>{{comments}} <i class="fa fa-comment"></i></span></div></div></a></li>',

								userId:2295006613,
								accessToken:'2295006613.2c081dc.967ed1e07aaa443ab4a4cbbd0d429190'
								});feed.run();
								</script>
							<div id='ody'></div>
						
					
				</div>
			
		</article>
	</main>

<?php include "includes/footer_dk.php" ?>
