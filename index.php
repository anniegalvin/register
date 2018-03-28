<?php
echo "# nwslibrary" >> README.md;
git init;
git add README.md;
git commit -m "first commit";
git remote add origin https://github.com/anniegalvin/nwslibrary.git;
git push -u origin master;

  session_start();

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Newstead Wood Library</title>
		<link href="styles.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<header>
			<nav>
				<h1>Newstead Wood Library</h1>
				<ul>
					<li><a>Home</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="tracking.html">Tracking</a>
						<ul>
							<li><a>Checked Out</a></li>
							<li><a>Read</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<div class="infobox">
			<!-- logged in user information -->
    		<?php  if (isset($_SESSION['username'])) : ?>
      			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      			<p> <a href="index.php?logout='1'" style="color: white;">Log out</a> </p>
    		<?php endif ?>
    	</div>
	</body>
</html>