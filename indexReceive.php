<!doctype html>
	<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="StyleReceive.css">
		<meta charset="UTF-8">
		<title>Test</title>
	</head>
	<body>
		<ul class="nav">
			<li>
				<a href="http://imgur.com/jNJ5bEO" id="picture"><img src="http://i.imgur.com/jNJ5bEO.jpg" title="source: imgur.com" /></a>
			</li>
			<li>
				<a href="index.php">Donate!</a>
			</li>
			<li>
				<a href="indexReceive.php">Current Offerings</a>
			</li>
			<li>
				<div class='searchBar'>
					<input class='search' type="text" placeholder="search...">
					<input class='button' type="button" value="search">
				</div>
			</li>
		</ul>
		<?php
		$file = fopen("posts.csv","r");
		$tableHeaders = fgetcsv($file);
		echo "<table>";
		foreach ($tableHeaders as $header) {
			echo "<th>" . $header . "</th>";
		}
		$availableDonations = fgetcsv($file);
		while(! feof($file)) {
			echo "<tr>";
			foreach ($availableDonations as $item) {
				echo "<td>" . $item . "</td>";
			}
			echo "</tr>";
			$availableDonations = fgetcsv($file);
		};
		echo "</table>";
		fclose($file);
		?>
		<br />
		<br />
		<br />
		<footer>
			<div class="wrapper">
				<nav>
					<ul class="fnav">
						</li>
						<li>
								<a href="#">Home</a>
						</li>
						<li>
								<a href="#">Donor</a>
						</li>
						<li>
								<a href="#">Reciver</a>
						</li>
						<li>
								<a href="#">Contact</a>
						</li>
					</ul>
				</nav>
			</div>
		</footer>
	</body>
	</html>
