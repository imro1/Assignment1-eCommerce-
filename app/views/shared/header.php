<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $data ?></title>
</head>
<body>
	<div class="sidebar">
<ul>
	<li><a href='/Main/index'>Landing Page</a></li>
	<li><a href='/Main/about_us'>About Us</a></li>
	<li><a href='/Contact/index'>Contact Us</a></li>
	<li><a href='/Contact/read'>See the message we get</a></li>
</ul>
</div>
<style>
	
	ul {
		display:inline;
		margin: 0;
		padding: 0;
		width: 200px;
		background-color: #f1f1f1;
		border: 1px solid #555;
		}

		li a {
		display: block;
		color: #000;
		padding: 8px 16px;
		text-decoration: none;
		}

		li {
		text-align: center;
		border-bottom: 1px solid #555;
		}

		li:last-child {
		border-bottom: none;
		}

		li a.active {
		background-color: #04AA6D;
		color: white;
		}

		li a:hover:not(.active) {
		background-color: #555;
		color: white;
		}

		.main{
			padding-right: -100%;
			text-align: center;
		}
</style>
