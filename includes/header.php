<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="./img/favicon-16x16.png" type="image/x-icon">
	<link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
	<!-- Meta SEO -->
	<title>
		<?php echo $title; ?>
	</title>
	<meta name="author" content="Suraz Shrestha">
	<meta name="description" content="<?php echo $title; ?>">
	<meta name="keywords" content="<?php echo $title; ?>">
	<!-- Import CSS -->
	<link rel="stylesheet" href="./css/stylesUtilities.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
		rel="stylesheet">
	<!-- My css -->
	<link rel="stylesheet" href="./css/styles.css">

<body>
	<!-- Wrapper Start -->
	<div class="wrapper">
		<!-- Header Sections -->
		<header class="<?php if ($page == 'home' || $page == 'pre-primary') {
	echo " header";
}
else {
	echo "header header-page" ;
}?>">
			<div class="header-top">
				<div class="container">
					<ul>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 26 26">
								<path fill="#fff"
									d="M6 0a3 3 0 0 0-3 3v15a3 3 0 0 0 3 3v.406c0 .825-.203 1.51-.531 1.938C5.14 23.77 4.725 24 4 24s-1.14-.23-1.469-.656C2.203 22.917 2 22.23 2 21.406v-4.812a1 1 0 0 0-1.219-1a1 1 0 0 0-.781 1v4.812c0 1.164.295 2.28.969 3.157C1.643 25.438 2.735 26 4 26s2.357-.562 3.031-1.438S8 22.57 8 21.406V21a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3zm9 0a3 3 0 0 0-3 3v15a3 3 0 0 0 3 3h7c1.657 0 3.906-1.313 3.906-10.5S23.657 0 22 0zm.5 3h7a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5m0 6h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m-6 3h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m-6 3h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5" />
							</svg>
							<?php echo $phone; ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
								<path fill="#fff"
									d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.28-.28.67-.36 1.02-.25c1.12.37 2.32.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
							</svg>
							<?php echo $phone3; ?>

						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
								<path fill="#fff"
									d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 4l-8 5l-8-5V6l8 5l8-5z" />
							</svg>
							<?php echo $email; ?>
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
								<g fill="none">
									<path
										d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
									<path fill="#fff"
										d="M12 2a9 9 0 0 1 9 9c0 3.074-1.676 5.59-3.442 7.395a20.4 20.4 0 0 1-2.876 2.416l-.426.29l-.2.133l-.377.24l-.336.205l-.416.242a1.87 1.87 0 0 1-1.854 0l-.416-.242l-.52-.32l-.192-.125l-.41-.273a20.6 20.6 0 0 1-3.093-2.566C4.676 16.589 3 14.074 3 11a9 9 0 0 1 9-9m0 6a3 3 0 1 0 0 6a3 3 0 0 0 0-6" />
								</g>
							</svg>
							<?php echo $address; ?>
						</li>
						<li>
							<a href="" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
									<path fill="#fff"
										d="M14.2 2.875A4.625 4.625 0 0 0 9.575 7.5v2.575H7.1c-.124 0-.225.1-.225.225v3.4c0 .124.1.225.225.225h2.475V20.9c0 .124.1.225.225.225h3.4c.124 0 .225-.1.225-.225v-6.975h2.497c.103 0 .193-.07.218-.17l.85-3.4a.225.225 0 0 0-.218-.28h-3.347V7.5a.775.775 0 0 1 .775-.775h2.6c.124 0 .225-.1.225-.225V3.1c0-.124-.1-.225-.225-.225z" />
								</svg>
							</a>
							<a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
									viewBox="0 0 24 24">
									<path fill="#fff"
										d="M16.6 5.82s.51.5 0 0A4.28 4.28 0 0 1 15.54 3h-3.09v12.4a2.59 2.59 0 0 1-2.59 2.5c-1.42 0-2.6-1.16-2.6-2.6c0-1.72 1.66-3.01 3.37-2.48V9.66c-3.45-.46-6.47 2.22-6.47 5.64c0 3.33 2.76 5.7 5.69 5.7c3.14 0 5.69-2.55 5.69-5.7V9.01a7.35 7.35 0 0 0 4.3 1.38V7.3s-1.88.09-3.24-1.48" />
								</svg></a>

							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
									<path fill="#fff"
										d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2zm-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93zM6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37z" />
								</svg>
							</a>
						</li>
					</ul>
				</div>
			</div>

			<div id="header-bottom-wrapper">
				<div class="container header-bottom-inner">
					<div class="header-bottom" id="header-bottom">
						<div class="row">
							<div class="col-md-2">
								<div class="logo">
									<a href="./home" title="<?php echo $title; ?>">
										<img src="./img/logo.png" alt="<?php echo $title; ?>"
											title="<?php echo $title; ?>" class="img-responsive" loading="lazy">
									</a>
								</div>
							</div>
							<div class="col-md-10">
								<nav class="navbar">
									<ul class="navbar-nav">

										<li class="<?php if ($page == 'home') {
	echo 'active';
}?>">
											<a href="./home" title="Home">Home</a>
										</li>
										<li class="<?php if ($page == 'about') {
	echo 'active';
}?>">
											<a href="./about" title="About Us">About Us</a>
										</li>

										<li class="<?php if (in_array($page, ['gallery', 'blogs', 'events'])) {
	echo 'active';
}?>" style="position:relative;">
											<a href="#" title="Activities">Activities <i class="fa fa-caret-down"
													style="font-size:12px;"></i></a>
											<ul class="serv_dropdown_menu">
												<li class="<?php if ($page == 'gallery') {
	echo 'active';
}?>">
													<a href="./gallery" title="Gallery">Gallery</a>
												</li>
												<li class="<?php if ($page == 'blogs') {
	echo 'active';
}?>">
													<a href="./blogs" title="Blog">Blog</a>
												</li>
												<li class="<?php if ($page == 'events') {
	echo 'active';
}?>">
													<a href="./events" title="Events">Events</a>
												</li>
											</ul>
										</li>

										<li class="<?php if ($page == 'notice') {
	echo 'active';
}?>">
											<a href="./notice" title="Notice">Notice</a>
										</li>

										<li class="<?php if ($page == 'our team') {
	echo 'active';
}?>">
											<a href="./our-team" title="Our Team">Our Team</a>
										</li>

										<li class="<?php if ($page == 'faqs') {
	echo 'active';
}?>">
											<a href="./faqs" title="Faqs">Faqs</a>
										</li>
										<li class="<?php if ($page == 'pre-primary') {
	echo 'active';
}?>">
											<a href="./pre-primary" title="Pre Primary">Pre Primary</a>
										</li>

										<li class="<?php if ($page == 'contact') {
	echo 'active';
}?>">
											<a href="./contact" title="Contact Us">Contact Us</a>
										</li>
										<li class="<?php if ($page == 'apply-now') {
	echo 'active';
}?>">
											<a href="./apply-now" title="Free Consultation">
												<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
													viewBox="0 0 32 32">
													<path fill="#fff"
														d="M25.31 2.872L21.926.745a1.826 1.826 0 0 0-2.517.576l-1.335 2.124L24.55 7.51l1.334-2.122c.536-.855.28-1.98-.574-2.516M6.555 21.786l6.474 4.066L23.58 9.054l-6.476-4.067l-10.55 16.8zm-.99 5.166l-.142 3.82l3.38-1.788l3.14-1.658L5.695 23.4z" />
												</svg> &nbsp;
												Apply Now</a>
										</li>
									</ul>
								</nav>

							</div>

						</div>

					</div>
				</div>

		</header>
		<div id="header-bottom-spacer"></div>

		<!-- Navigatio for Mobile or Small Devices -->
		<div class="mobile_menu">
			<div class="menu_icon_box">
				<div class="tab_button">
					<a class="tab_button1" href="tel:<?php echo $phone; ?>" title="Click To Call"><i
							class="fa fa-phone"></i> Click To Call</a>
					<a class="tab_button2" href="sms:<?php echo $phone; ?>" title="Tap To Text"><i
							class="fa fa-comments"></i> Tap To Text</a>
				</div>
				<div class="menu_icon">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="sidebar">
				<div class="tab_section">
					<div class="mobile_slideLogo">
						<a href="./home" title="<?php echo $title; ?>">
							<img src="./img/logo.png" alt="<?php echo $title; ?>" title="<?php echo $title; ?>"
								class="img-responsive">
						</a>
					</div>
					<ul class="accordion">
						<li class="<?php if ($page == 'home') {
	echo 'active';
}?>">
							<a href="./home" title="Home">Home</a>
						</li>
						<li class="<?php if ($page == 'about') {
	echo 'active';
}?>">
							<a href="./about" title="About Us">About Us</a>
						</li>

						<li class="<?php if ($page == 'gallery') {
	echo 'active';
}?>">
							<a href="./gallery" title="Gallery">Gallery</a>
						</li>

						<li class="<?php if ($page == 'blogs') {
	echo 'active';
}?>">
							<a href="./blogs" title="Blogs">Blogs</a>
						</li>

						<li class="<?php if ($page == 'events') {
	echo 'active';
}?>">
							<a href="./events" title="Events">Events</a>
						</li>

						<li class="<?php if ($page == 'notice') {
	echo 'active';
}?>">
							<a href="./notice" title="Notice">Notice</a>
						</li>

						<li class="<?php if ($page == 'our team') {
	echo 'active';
}?>">
							<a href="./our-team" title="Our Team">Our Team</a>
						</li>

						<li class="<?php if ($page == 'faqs') {
	echo 'active';
}?>">
							<a href="./faqs" title="Faqs">Faqs</a>
						</li>

						<li class="<?php if ($page == 'contact') {
	echo 'active';
}?>">
							<a href="./contact" title="Contact Us">Contact Us</a>
						</li>
						<li class="<?php if ($page == 'apply-now') {
	echo 'active';
}?>">
							<a href="./apply-now" title="Free Consultation">
								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 32 32">
									<path fill="#fff"
										d="M25.31 2.872L21.926.745a1.826 1.826 0 0 0-2.517.576l-1.335 2.124L24.55 7.51l1.334-2.122c.536-.855.28-1.98-.574-2.516M6.555 21.786l6.474 4.066L23.58 9.054l-6.476-4.067l-10.55 16.8zm-.99 5.166l-.142 3.82l3.38-1.788l3.14-1.658L5.695 23.4z" />
								</svg> &nbsp;
								Apply Now</a>
						</li>
					</ul>
				</div>
			</div>
		</div>