<?php
include "head.php";
include "Connectiondb.php";
?>
<?php 
$takeCATE=$_GET['takeid'];  
if(isset($takeCATE)){
$result=$pdo -> query("SELECT * FROM auction where auction_category='$takeCATE'");
foreach($result as $value){
    
    // $result2=$pdo -> query("SELECT * FROM category WHERE category=".$value['category_name']."");
     
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
}




?>
<?php
include "foot.php";
?>