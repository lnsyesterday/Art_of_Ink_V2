<?php $pageTitle = "Jonas Willy"; ?>

<?php require "includes/head.php" ?>

<?php require "includes/loader.php" ?>

<div id="wrapper" class="wrapper d-none">

<?php include "includes/header.php" ?>

	<main class="main--artists" id="artists">
		
		<div class="sidebarleft"></div>

		<article class="article--artists profile">
				<h1>Jonas Willy Brund-Andersen</h1>
				<div class="circle-container">
					<img src="img/jwilly.jpg" class="responsive-circle">
					<span class="circle-cover"></span>
					<a href="https://www.instagram.com/jonaswilly/" target="_blank"><img class="instagram-icon" src="img/instagram_icon.svg"></a>
				</div>
				<div class="profile--headline">
					<h2><q>No challenge too big, no tattoo too small.</q></h2>
					<p>Jonas Willy Brund-Andersen</p>
				</div>
				<p>Jonas started his career back in 2009 when HP took him in as an apprentice in his studio in Odense.</p>
				<p>It didn’t take long before it was decided that another shop would open in Aarhus, and Jonas moved from Odense to take care of the new shop.</p>
				<p>Today he is the co-owner of the Aarhus shop and has tattooed for almost 10 years. He tattoos in all styles and loves a good challenge – big or small, though he has always had a soft spot for traditional.</p>
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

								userId:6630985,
								accessToken:'6630985.a54185f.bc84369dddc041e684a26d99a4f8a1b6'
								});feed.run();
								</script>
							<div id='ody'></div>
						
					
				</div>
			
			</article>
	</main>

<?php include "includes/footer.php" ?>

