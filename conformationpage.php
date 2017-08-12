<!doctype html>
	<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="StyleConformation.css">
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
				echo "<strong>Your post was successfully submitted! Details below:";
				echo "<br  />";
        $postName = $_POST['Name'];
        echo "Name:    " . $postName;
				echo "<br  />";
				$postTime = $_POST['TimeFrame'];
        echo "Time available until:    " . $postTime;
				echo "<br  />";
				$postEmail = $_POST['Email'];
        echo "Email:    " . $postEmail;
				echo "<br  />";
				$postPhone = $_POST['PhoneNo'];
        echo "Phone Number:    " . $postPhone;
				echo "<br  />";
        $postOffer = $_POST['Offerings'];
        echo "Your offer:    " . $postOffer . "</strong><br />";

				$postData = array($postName, $postTime, $postEmail, $postPhone, $postOffer);
				$myfile = fopen("posts.csv", "a") or die("Unable to open file!");
				fputcsv($myfile, $postData);
				fclose($myfile);
				?>
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
