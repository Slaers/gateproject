<!DOCTYPE html>
<html>
<?php
	$title="Battlegate";
 ?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width, initial-scale=1.0" />
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
	<header>
		<nav class="navbar navbar-dark bg-dark">
			<div class="logo">
				<a href="index.html"><img class="imglogo" src="img/logo3.png"></a>
				<a href="index.html" class="btnlogo">BATTLERITE<span class="btndec">GATE</span></a>
			</div>
			<div>
				<ul>
					<li><a href="" class="btnlink">STREAMS</a></li>
					<li><a href="" class="btnlink">LEADERBOARDS</a></li>
					<li><a href="" class="btnlink">CONTACT</a></li>
				</ul>
			</div>
			<div class="btnsteam">
				<button type="button" class="btn btn-warning">Login Steam</button>
			</div>	
		</nav>
	</header>
	
	<section>
		<form>
	  		<div class="row">
	    		<div class="col">
	      			<input type="text" class="form-control" placeholder="Search by Battlerite username">
	    		</div>
			</div>
		</form>
			<button type="button" class="btn btn-warning">Search</button>
	</section>	
</body>
</html>