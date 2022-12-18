<?php
include "head.php";
include "Connectiondb.php";
?>
<?php 

$results=$pdo -> query("SELECT * FROM `auction` WHERE title='".$_GET['$takeCATE']."' LIMIT 1");
	foreach($results as $value){
echo'<main>
<h1>auction Page</h1>
			<article class="product">

					<img src="product.png" alt="product name">
					<section class="details">
						<h2>'.$value['title'].'</h2>
						<h3>'.$value['auction_category'].'</h3>
						<p>Auction created by <a href="#">User.Name</a></p>
						<p class="price">Current bid:'.$value['auction_price'].'</p>
						<time>Time left: 8 hours 3 minutes</time>
						<form action="#" class="bid">
							<input type="text" name="bid" placeholder="Enter bid amount" />
							<input type="submit" value="Place bid" />
						</form>
					</section>
					<section class="description">
					<p>
					'.$value['description'].'
						</p>

					</section>
</main>';
	}



?>




<?php
include "foot.php";?>