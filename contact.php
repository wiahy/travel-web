<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/TMForm.js"></script>
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
								<li><a href="index.html">ABOUT</a></li>
								<li><a href="index-1.html">HOT TOURS</a></li>
								<li><a href="index-2.html">SPECIAL OFFERS</a></li>
								<li><a class="drop" href="#">TRAVEL INFO</a>
						            <ul>
						              <li><a href="transportasi.php">TRANSPORTASI</a></li>
						              <li><a href="pariwisata.php">PARIWISATA</a></li>
						              <li><a href="gallery.php">GALLERY</a></li>
						              <li><a href="info_penting.php">INFO PENTING</a></li>
						              <li><a href="agenda_kota.php">AGENDA KOTA</a></li>
						              <li><a href="komunitas.php"></a></li>
						            </ul>
						        </li>
						        <li class="current"><a href="contact.php">CONTACT US</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
				<div class="grid_5">
					<h3>CONTACT INFO</h3>
					<div class="map">
						<p>South Sulawesi provides a variety of tours for you to enjoy <span class="col1"><a href="https://www.google.com/search?q=wisata+sulawesi+selatan&safe=strict&rlz=1C1GCEA_enID925ID925&sxsrf=ALeKk022Yjx_9F2md-ehG4T6QCeg4L4GPA:1625024621400&source=lnms&tbm=isch&sa=X&ved=2ahUKEwi15ry6uL7xAhUReisKHeOiCKkQ_AUoAnoECAEQBA&biw=1366&bih=695" rel="nofollow">Travel Sulawesi Selatan</a></span>. Freebies go without it.</p>
						<p>If you have any questions about customizing the selected tourist spot, ask <span class="col1">
						<div class="clear"></div>
						<figure class="">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4071138.1533848504!2d117.19445757920963!3d-4.817919946453721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d0cfa80fd6bbe8b%3A0x1030bfbcaf71af0!2sSulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1625024420087!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</figure>
						<address>
							<dl>
								<dt>province name:. <br>
									Sulawesi Selatan,<br>
									Makassar.
								</dt>
								<dd><span>Telephone:</span>+62 85240362592</dd>
								<dd>Gmail: <a href="#" class="col1">saharuddin.putraaalu@gmail.com</a></dd>
								<dd>Gmail: <a href="#" class="col1">st.rabiathul.ad'wiah@gmail.com</a></dd>
							</dl>
						</address>
					</div>
				</div>
				<div class="grid_6 prefix_1">
					<h3>GET IN TOUCH</h3>
					<form id="form">
						<div class="success_wrapper">
							<div class="success-message">Contact form submitted</div>
						</div>
						<label class="name">
							<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid name.</span>
						</label>
						<label class="email">
							<input type="text" placeholder="Email:" data-constraints="@Required @Email" />
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid email.</span>
						</label>
						<label class="country">
							<input type="text" placeholder="Country:" data-constraints="@Required @JustLetters"/>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*This is not a valid phone.</span>
						</label>
						<label class="message">
							<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
							<span class="empty-message">*This field is required.</span>
							<span class="error-message">*The message is too short.</span>
						</label>
						<div>
							<div class="clear"></div>
							<div class="btns">
								<a href="#" data-type="reset" class="btn">Clear</a>
								<a href="#" data-type="submit" class="btn">Submit</a>
							</div>
						</div>
					</form>
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
						Your Trip (c) 2020 | <a href="#">Sahruddin & ST.Rabiathul Ad'wiah</a> | Website by <a href="saharuddin.putraallu@gmail.com/ST.Rabiathul@gmail.com " rel="nofollow">Saharuddin & Rabiathul.com</a>
					</div>
				</div>
			</div>
		</footer>
		<script>
		$(function (){
			$('#bookingForm').bookingForm({
				ownerEmail: '#'
			});
		})
		</script>
	</body>
</html>