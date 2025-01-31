<?php
$hide =true;

$p = "index.php";
if(isset($_GET['p'])){
	$p = $_GET['p'];
	switch($p){
		case "about":{
			$about1 = "About/aboutheader.php";
			$about2 = "About/histrory.php";
			$hide =false;
			break;
		}
		case "services":{
			$service1 = "Service/header.php";
			$service2 = "Service/service.php";
			$hide =false;
			break;
		}
		case "contact":{
			$contact1 = "contact/header.php";
			$contact2 = "contact/contact.php";
			$contact3 = "contact/map.php";
			$hide =false;
			break;
		}
		case "product":{
			$product1 = "product/header.php";
			$product2 = "product/product.php";
			$hide =false;
			break;
		}
	}
}
?>
<!DOCTYPE HTML>
<html>
	<?php include ("input/head.php");?>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<!--header-->	
	<?php include ("input/header.php");?>
	<!--end header-->
	
	<!--aside-->
	<?php if($hide) include ("input/aside.php");?>
	<?php 
		if(!empty($p=="about")) {
			include ("$about1");
		}
		elseif($p=="services"){
			include ("$service1");
		} 
		elseif($p=="contact"){
			include ("$contact1");
		} 
		elseif($p=="product"){
			include ("$product1");
		} 
	?>

	<?php 	//if(!empty($about1)){ include ("$about1");}
			//if(!empty($service1)){ include ("$service1");} 
			//if(!empty($contact1)){ include ("$contact1");} ?> 

	<!-- end aside-->

	<!--service-->
	<?php if($hide) include ("input/service.php");?>
	<?php 
		if(!empty($p=="about")) {
			include ("$about2");
		}
		elseif($p=="services"){
			include ("$service2");
		} 
		elseif($p=="contact"){
			include ("$contact2");
		} 
		elseif($p=="product"){
			include ("$product2");
		} 
	?>

	<?php 	//if(!empty($about2)){ include ("$about2");} 
			//if(!empty($service1)){ include ("$service2");} 
			//if(!empty($contact1)){ include ("$contact2");} ?>

	<!--end service-->

	<!--product-->
	<?php if($hide) include ("input/product.php");?>
	<?php if(!empty($contact3)){ include ("$contact3");} ?>
	<!--end product-->
	
	<!--testimony-->
	<?php if($hide) include ("input/testimony.php");?>
	<!--end testimony-->
	
	<!--counter-->
	<?php if($hide) include ("input/counter.php");?>
	<!--end counter-->

	<!--started-->
	<?php include ("input/started.php");?>
	<!--end started-->

	<!--footer-->
	<?php include ("input/footer.php");?>
	<!--end footer-->
	
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

