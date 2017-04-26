<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Nasze Kierunki</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li><a href="index.php"><img src="images/logo.png" height="18"/>San Travels</a></li>
								<li class="current"><a href="kierunki.php">NASZE KIERUNKI</a></li>
								<li><a href="bilety.php">BILETY LOTNICZE</a></li>
                                <li><a href="kontakt.php">KONTAKT</a></li>
                                <li><a href="mojekonto.php">
                                        <?php if ($_SESSION['login']) {
                                            echo 'User: ' . $_SESSION['login'];
                                        } else {
                                            echo 'MOJE KONTO';
                                        } ?></a></li>
                            </ul>

						</nav>
						<div class="clear"></div>
					</div>
				</div>

			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
				<div class="banners">
					<div class="grid_4">
						<div class="banner">
							<img src="images/page2_img1.jpg" alt="">
							<div class="label">
                                <a href="bilety.php">WIĘCEJ</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/page2_img2.jpg" alt="">
							<div class="label">
                                <a href="bilety.php">WIĘCEJ</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/page2_img3.jpg" alt="">
							<div class="label">
                                <a href="bilety.php">WIĘCEJ</a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/page2_img4.jpg" alt="">
							<div class="label">
                                <a href="bilety.php">WIĘCEJ</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/page2_img5.jpg" alt="">
							<div class="label">
                                <a href="bilety.php">WIĘCEJ</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/page2_img6.jpg" alt="">
							<div class="label">
                                <a href="bilety.php">WIĘCEJ</a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/page2_img7.jpg" alt="">
							<div class="label">
                                <a href="bilety.php">WIĘCEJ</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/page2_img8.jpg" alt="">
							<div class="label">
								<a href="bilety.php">WIĘCEJ</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						San Travels 2017 | Designed by Ivan Shyrai, Bohdan Zubar, Piotr Piechota
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>