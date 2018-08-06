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

		<div class="sea">
			<input class="form-control" type="text" placeholder="Search by Battlerite username..." readonly>
		</div>
		<div class="region">
			<select class="custom-select custom-select-sm">
				<option selected>  </option>
				<option value="1">SA</option>
				<option value="2">NA</option>
				<option value="3">EU</option>
			</select>
		</div>
		<div class="btnsea">
			<button type="button" class="btn btn-warning">Search</button>
		</div>

	<footer class="foobar">
		<nav class="navbar">
			<p>	&#169; 2018 battlerite-gate.com</p>
		</nav>
	</footer>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b67a1d14b5b6065"></script>
</body>
</html>