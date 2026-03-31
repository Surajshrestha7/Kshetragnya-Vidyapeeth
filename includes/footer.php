<footer class="<?php if ($page == 'home' || $page == 'pre-primary') {
	echo " footer-section";
}
else {
	echo "footer-section footer-page";
}?>">
	<div class="container">
		<div class="row">
			<!-- logo part -->
			<div class="col-md-4 wow animate__animated animate__fadeInUp">
				<div class="footer-text">
					<img src="./img/logo.png" alt="">
					<p>Kshetragnya Vidyapeeth is dedicated to providing holistic education that blends modern learning
						with
						traditional values, fostering confident, responsible, and compassionate future leaders.</p>
				</div>
			</div>
			<!-- quick links -->
			<div class="col-md-2">
				<div class="footer-text wow animate__animated animate__fadeInUp">
					<h4>Quick Links</h4>
					<ul class="footer-link">
						<li class="<?php if ($page == 'about') {
	echo 'active';
}?>">
							<a href="./about" title="About Us">- About Us</a>
						</li>
						<li class="<?php if ($page == 'projects') {
	echo 'active';
}?>">
							<a href="./projects" title="Gallery">- Gallery</a>
						</li>
						<li class="<?php if ($page == 'events') {
	echo 'active';
}?>">
							<a href="./events" title="Events">- Events</a>
						</li>
						<li class="<?php if ($page == 'our-team') {
	echo 'active';
}?>">
							<a href="./our-team" title="Our Team">- Our Team</a>
						</li>
						<li class="<?php if ($page == 'faqs') {
	echo 'active';
}?>">
							<a href="./faqs" title="FAQs">- FAQs</a>
						</li>

					</ul>
				</div>
			</div>
			<!-- contact us -->
			<div class="col-md-3">
				<div class="footer-text small-footer footer-contact-info wow animate__animated animate__fadeInUp">
					<h4>Contact Us</h4>
					<ul>
						<li><span>Phone:</span>
							<?php echo $phone; ?> ,
							<?php echo $phone3; ?>
						</li>
						<li><span>Email:</span>
							<?php echo $email; ?>
						</li>
						<li><span>Location:</span>
							<?php echo $address; ?>
						</li>
					</ul>
				</div>
			</div>
			<!-- newsletter -->
			<div class="col-md-3">
				<div class="footer-text wow animate__animated animate__fadeInUp">
					<h4>Newsletter</h4>
					<p>Subscribe to our Newsletter right now to be updated.</p>
					<form method="post" role="form" action="./newsletter"> <input type="email" name="email"
							class="newsletter-form" placeholder="Enter your email" required>
						<button class="newsletter-btn" type="submit">Subscribe</button>
					</form>

				</div>
			</div>
		</div>

	</div>
</footer>




<!-- Copyright Start -->
<div class="copyright">
	<div class="container">
		<div class="copyright-content">
			<p>Copyright ©
				<?php echo date('Y'); ?> -
				<?php echo $title; ?>. <span>– All Rights Reserved</span>
			</p>
		</div>
	</div>
</div>
<!-- Copyright End -->
<!-- Footer End -->
<!-- Go to Top Start -->
<div id="back-top" style="">
	<a href="#top" aria-label="Back to top"><span><i class="fa fa-angle-double-up fa-bounce"
				aria-hidden="true"></i></span></a>
</div>
<!-- Go to Top End -->
</div>
<!-- Wrapper End -->
<!-- My Custom Scripts-->
<script src="./js/scripts.js"></script>
<?php if ($page == 'gallery') { ?>
<script>
	$(document).ready(function () {
		$("#gallery").unitegallery({
			gallery_theme: "tiles", // This is essential!
			grid_space_between_cols: 5,
			grid_space_between_rows: 5,
			tile_enable_border: false,
			tile_enable_shadow: false,
			grid_padding: 0,
			tile_width: 250,
			tile_height: 200,
			grid_num_rows: 20
		});
	});
</script>
<?php
}?>
</body>

</html>