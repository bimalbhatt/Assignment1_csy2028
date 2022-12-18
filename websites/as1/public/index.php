<?php
include "head.php";
include "Connectiondb.php";
// session_start();
?>

<main>

<?php

$result=$pdo -> query("SELECT * FROM `auction` ORDER BY auction_id DESC LIMIT 10");
foreach($result as $value){
// $result=$pdo -> query("SELECT `title`, `auction_category`, `description`, `auction_price` FROM `auction`");
	// echo $value['Product_name'],$value['Product_category'],$value['Product_description'],$value['product_price'];
echo'<main>
			<ul class="productList">
				<li>
					<img src="product.png" alt="product name">
					<article>
						<h2> '.$value['title'].'</h2>
						<h3>'.$value['auction_category'].'</h3>
						<p>'.$value['description'].'</p>

						<p class="price">Current bid: '.$value['auction_price'].'</p>
						<a href="product.php?$takeCATE='.$value['title'].'" class="more auctionLink">More &gt;&gt;</a>
					</article>
				</li>
</main>';
}


?>
<?php
include "foot.php";?>