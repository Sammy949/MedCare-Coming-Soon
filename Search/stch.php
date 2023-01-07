<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" href="css/style.css">
		<title>MedCare</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
		<div class="col-md-1"></div>
		<div class="col-md-10">

		<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal">Add Content</button>
<br><br><br> -->

			<form class="form-inline" method="POST" action="stch.php">
				<div class="input-group col-md-12">
					<input type="text" class="form-control" placeholder="Search here..." name="keyword" required="required" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"/>
					<span class="input-group-btn">
						<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
			</form>
			<br />
			<?php include 'search.php'?>
		</div>
	</div>

	<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<form action="save_content.php" method="POST" enctype="multipart/form-data">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" name="title" required="required"/>
							</div>
							<div class="form-group">
								<label>Content</label>
								<textarea class="form-control" style="resize:none; height:250px;" name="content" required="required"></textarea>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
					</div>
				</div>
			</form>
		</div>
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


<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>


</body>
</html>