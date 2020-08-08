<?php
	// if already logged in, go to products page
	if(isset($_SESSION["email_id"])){
		header("location: products.php");
	}

	require "./includes/common.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<?php
			require './includes/header.php';
		?>
		<div id="banner-image">
			<div class="container">
				<div id="banner_content">
					<h1>We sell lifestyle</h1>
					<p>Flat 40% OFF</p>
					<a href="products.php">
						<button class="btn btn-danger btn-lg active">Shop Now</button>
					</a>
				</div>
			</div>
		</div>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>