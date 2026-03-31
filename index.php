<?php
$page = "";
$page = (isset($_GET['id'])) ? $_GET['id'] : 'home';
if (!in_array($page, array('home', 'about', 'gallery', 'blogs', 'events', 'notice', 'our-team', 'faqs', 'contact', 'testimonials-ccc-send', 'pre-primary', 'apply-now-bahvdsahv-send', 'apply-now', 'contact-send-vgsvshv', 'join-us-send-message', 'newsletter'))) {
	include("404.php");
	exit;
}

$title = 'Kshetragnya Vidyapeeth';
$phone = '01-5300697';
$phone3 = '+977 9851195919';
$email = 'Kshetragnyaschool23@gmail.com';
$address = 'Bafal , Kathmandu-13';

include_once("includes/header.php");
include("$page.php");
include_once("includes/footer.php");
?>