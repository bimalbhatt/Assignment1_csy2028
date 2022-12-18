<!DOCTYPE html>
<html>
	<head>
		<title>ibuy Auctions</title>
		<link rel="stylesheet" href="ibuy.css" />
	</head>

	<body>
		<header>
			<h1><span class="i">i</span><span class="b">b</span><span class="u">u</span><span class="y">y</span></h1>

			<form action="Search.php?search=" method="POST">
				<input type="text" name="searchtext" placeholder="Search for anything" />
				<input type="submit" name="submit" value="Search" />
			</form>
		</header>
		
		<nav>
			<li><a href="index.php?takeid=">Index Page</a>

<?php
include "Connectiondb.php";
$result=$pdo -> query("SELECT * FROM category");
foreach($result as $value){
echo'	<a class="categoryLink" href="adminCategory.php?takeid='.$value['auction_category'].'" <style margin-left: 100px;>'.$value['auction_category'].'||</a>';

}
?>
<a class="categoryLink" href="register.php">Login&Registration</a>
</ul>

</nav>

		<img src="banners/1.jpg" alt="Banner" />
	</body>
</html>