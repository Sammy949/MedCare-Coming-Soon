<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/style.css">
		<title>MedCare</title>

	</head>
<body>

<div class="scroll-up-btn">
	        <i class="fas fa-angle-up"></i>
	    </div>
<header>

<div class="container">

	<a href="../about.html" class="logo"><span>M</span>ed<span>C</span>are</a>

	<br><br>

	<nav class="nav">
		<ul>
			<li><a href="../index.html">Home</a></li>
			<li><a href="../about.html">About</a></li>
			<li><a href="../soon.html">MedTerms</a></li>
			<li><a href="../article.html">Articles</a></li>
			<li><a href="../soon.html">MedNews</a></li>
			<li><a href="../tips.html">Tips</a></li>
		</ul>
	</nav>
	<div class="fas fa-bars"></div>	

</div>
</header>
<br><br><br><br>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">MedCare</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<a href="../index.html" class="btn btn-primary">Go Back Home</a>
		<a href="stch.php" class="btn btn-success">Continue Search</a>
		<?php
			require 'conn.php';
			if(ISSET($_REQUEST['id'])){
				$query = mysqli_query($conn, "SELECT * FROM `blog` WHERE `blog_id` = '$_REQUEST[id]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
		?>
				<h3><?php echo $fetch['title']?></h3>
				<p><?php echo nl2br($fetch['content'])?></p>
		<?php
			}
		?>
		
	</div>


	<!-- footer section ends -->

	<!-- header section ends -->


	<!-- jquery cdn link -->
	<script src="js/jquery.min.js"></script>
	 
	<!-- aos js file cdn link -->
	<script src="js/aos.js"></script>

	<script src="js/owl.carousel.min.js"></script>

	<!-- custom js link -->
	<script src="js/main.js"></script>

	<script>
		AOS.init({
			duration:1000,
			delay:400
		})
	</script>

</body>
</html>