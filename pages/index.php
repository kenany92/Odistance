<!-- Created by armel on 09/06/15.-->
<?php session_start();?>
<!DOCTYPE html>
<html ng-app="Menu">
<head>
<title>Odistance</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../css/search.css" type="text/css" />
	<link rel="stylesheet" href="../css/etalage.css">
	<link href="../css/owl.carousel.css" rel="stylesheet">
	<link href="../css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

	<script src="../js/jquery.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- start menu -->

<script type="text/javascript" src="../js/megamenu.js"></script>
<script type="text/javascript" src="../js/menu.js" ></script>
	<script type="text/javascript" src="../js/move-top.js"></script>
	<script type="text/javascript" src="../js/easing.js"></script>

<script src="../js/simpleCart.min.js"> </script>
<script src="../js/angular.min.js"> </script>
<script src="../js/angular-route.min.js"> </script>

	<script src="../js/owl.carousel.js"></script>
	<script src="../js/carousel.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},2000);
			});
		});
	</script>

</head>
<body> 
<!--header-->	
<div class="header" >

		<!---->

		<div class="header-top">
		<div class="container">
		<div class="head-top" style="margin-right: -180px;" >
			<div class="logo" style="position: absolute; top: 0px; left: 10px;">
				<a href="#/"><img src="../images/logo1.png" alt="" style="margin-top: 20px;" ></a>
			</div>
		<div class="top-nav">
			  <ul class="megamenu skyblue" ng-controller='articleMenu'>
				      <li class="active grid" ><a  name="fashion" href="#">Mode</a>
					    <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li ng-repeat='menu in firstFashionSubmenus' ng-class={{menu.availability}} >
											<a href={{menu.page}} class="art" name={{menu.name}}>{{menu.text}}</a></li>

									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li ng-repeat='menu in secondFashionSubmenus' ng-class={{menu.availability}}>
											<a href={{menu.page}} class="art" name={{menu.name}} >{{menu.text}}</a></li>

									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<h4 id="popular_fashion">Marques populaires</h4>
									<ul>
										<li ng-repeat='menu in popularBrandsFashionSubmenus' ng-class={{menu.availability}}>
											<a href={{menu.page}}>{{menu.name}}</a></li>

									</ul>
								</div>
							</div>
						  </div>
						</div>
					</li>
					<li><a   href="#/decor" name="furniture_decor">Mobilier & decor</a>
					 <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li ng-repeat='menu in firstFurnitureSubmenus' ng-class={{menu.availability}}>
											<a href={{menu.page}} class="art" name={{menu.name}} >{{menu.text}}</a></li>

									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li ng-repeat='menu in secondFurnitureSubmenus' ng-class={{menu.availability}}>
											<a href={{menu.page}} class="art" name={{menu.name}} >{{menu.text}}</a></li>

									</ul>
								</div>
							</div>
							<!--div class="col1">
							<iframe src="https://player.vimeo.com/video/16878818"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div-->
						  </div>
						</div></li>
				    <li class="grid"><a  id="test" href="#/mobile" name="mobiles_tablets">mobiles & tablettes</a>
					   <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li ng-repeat='menu in firstMobileSubmenus' ng-class={{menu.availability}}>
											<a href={{menu.page}} class="art" name={{menu.name}} >{{menu.text}}</a></li>
										
									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li ng-repeat='menu in secondMobileSubmenus' ng-class={{menu.availability}}>
											<a href={{menu.page}} class="art" name={{menu.name}} >{{menu.text}}</a></li>
										
									</ul>
								</div>
							</div>
							<!--div class="col1">
								<div class="col1">
								<iframe src="https://player.vimeo.com/video/8118831"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
							</div-->
						  </div>
						</div>
			    </li>
						 <li class="grid"><a  href="#/health" name="health_beauty">santé & beauté</a>

			    </li>
				<li><a  href="#/produits" name="gaming">tvs, jeux & cameras</a>
				  <div class="megapanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li ng-repeat='menu in firstGamingSubmenus' ng-class={{menu.availability}}>
											<a href={{menu.page}} class="art" name={{menu.name}} >{{menu.text}}</a></li>
									</ul>
								</div>
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li ng-repeat='menu in secondGamingSubmenus' ng-class={{menu.availability}}>
											<a href={{menu.page}} class="art" name={{menu.name}} >{{menu.text}}</a></li>
										
									</ul>
								</div>
							</div>
							<!--div class="col1">
								<div class="col1">
								<iframe src="https://player.vimeo.com/video/8118831"  webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
							</div-->
						  </div>
						</div></li>


			  </ul>
				</div>
					<div class="cart box_1">
						<a href="#/checkout">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> <span id="item">items</span>)</div>
							<img src="../images/cart.png" alt="" title="consultez le panier"/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty" ng-click="vider()"><img src="../images/cart-c.png"  alt="" title="videz le panier"></a></p>
						<div class="clearfix"> </div>
					</div>
		
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>

	<div class="top-header"  >
		<div class="container">
			<div class="top-head" style="width: 100%; margin-left: -70px;" >
				<div class="header-para">
					<ul class="social-in">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="ic"> </i></a></li>
						<li><a href="#"><i class="ic1"> </i></a></li>
						<li><a href="#"><img id="wattsapp" src="../images/wattsapp.png" /></a></li>
						<li><a href="#"><img id="insta" src="../images/instagram.png" /></a></li>

					</ul>
				</div>

				<ul class="header-in" ng-controller="topMenu">
					<li ><a ng-repeat="topmenu in topmenus" href={{topmenu.page}} name={{topmenu.name}} >{{topmenu.name}}</a></li>
				</ul>
				<div class="search-top">
					<div class="search">
						<form>
							<input type="text" name="search" value="search about something ?" >
							<input type="submit" value="" >
						</form>
					</div>
					<div id='result'></div>
					<div class="world">
						<ul >
							<li><a href="#"><span> </span></a> </li>
							<li><select class="in-drop" ng-controller="language" id="langue">
								<!--option-- ng-repeat="langue in langues" value={{langue.lang}} id={{langue.key}}>{{langue.lang}}</option-->
								<option id="fr" value="Français">Français</option>
								<option id="en" value="Anglais">Anglais</option>
								<option id="de" value="Allemand">Allemand</option>
								<option id="es" value="Espagnol">Espagnol</option>

							</select>
							</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--banner-->

<!-- routing-->
<div ng-view></div>
<!-- routing-->

	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left" >
				<a href="#/"><img src="../images/logo1.png" alt="" style="margin-left: -2px;" ></a>
				<p class="footer-class">© 2015 Odistance Tous Droits Reservés GAT CO LTD <br /><a href='http://www.adorsys.cm/' target='_blank' style='color: black'>Design by Adorsys S.A</a> </p>
			</div>
			<div class="col-md-2 footer-middle">
				<ul>
					<li><a class="first_footer_menu" name="about" href="#/error">à propos de nous</a> </li>
					<li><a class="first_footer_menu" name="contact" href="#/contact">contactez nous</a></li>
					<li><a class="first_footer_menu" name="store" href="#/produits" >nos magasins</a></li>
				</ul>
			</div>
			<div class="col-md-4 footer-left-in">
				<ul class="term">
					<li><a class="second_footer_menu" name="terms" href="#">termes et conditions</a> </li>
					<li><a class="second_footer_menu" name="enterprise" href="#">Odistance dans la presse</a></li>
					<li><a class="second_footer_menu" name="testi" href="#" >temoignages</a></li>
				</ul>
				<ul class="term">
					<li><a class="third_footer_menu" name="join" href="#">rejoignez-nous</a> </li>
					<li><a class="third_footer_menu" name="videos" href="#">videos Odistance</a></li>
					
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-right">
				<h5>NOUS SUPPORTONS</h5>
				<ul>
					<li><a href="#"><i> </i></a> </li>
					<li><a href="#"><i class="we"> </i></a></li>
					<li ><a href="#" ><i class="we-in"> </i></a></li>
					<li ><a href="#" ><i class="we-at"> </i></a></li>
					<li ><a href="#" ><i class="we-at-at"> </i></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

	</div>
    
<script type="text/javascript" src="../js/allmenus.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/jquery.i18n.properties.js"></script>
<script type="text/javascript" src="../js/internationalization.js"></script>
<script type="text/javascript" src="../js/search.js"></script>
</body>
</html>
