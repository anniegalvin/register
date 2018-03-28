<html>
	<head>
		<title>Newstead Wood Library</title>
		<link href="styles.css" rel="stylesheet">
	</head>
	<body>
		<header>
			<nav>
				<h1>Newstead Wood Library</h1>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a>Search</a></li>
					<li><a href="tracking.html">Tracking</a>
						<ul>
							<li><a>Checked Out</a></li>
							<li><a>Read</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<div class="searchbar">
			<input type="text" placeholder="Search for books">
		</div>
		<div class="input-group">
  		<button type="submit" class="btn" name="searchbar">Search</button>
		</div>
		<div class="from">
			<form action="search1.php" method="post">
				<input type="text" name="search"/>
				<button>search</button>
			</form>
		</div>
		<div class="infobox">
					<!-- logged in user information -->
		    		<?php  if (isset($_SESSION['username'])) : ?>
		      			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		      			<p> <a href="index.php?logout='1'" style="color: white;">Log out</a> </p>
		    		<?php endif ?>
    	</div>
	</body>
</html>