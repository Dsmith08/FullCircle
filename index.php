<!doctype html>
	<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="StyleIndex.css">
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
		<form action="conformationpage.php" method="post">
			<h1>Add your post:</h1>
			<p>Name:          </p><input name="Name" id="textboxName"/>
			<p>Available until (Ex. 5pm):          </p><input name="TimeFrame" id="textboxTime"/>
			<p>Email:          </p><input name="Email" id="textboxEmail"/>
			<p>Phone Number:          </p><input name="PhoneNo" id="textboxPhone"/>
			<p>Your offerings:          </p>
			<textarea name="Offerings" id="textboxOffer" cols="20" rows="10"></textarea>
			<input type="submit" />
		</form>
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
