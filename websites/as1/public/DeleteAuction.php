<?php
include "head.php";
include "Connectiondb.php";
?>
<?php
echo'
<nav>
<ul>
<li><a href="AddAuction.php">Add Auction</a></li><br>
<li><a href="review.php">Add review</a></li><br>
<li><a href="DeleteAuction.php">Delete Auction</a></li><br>
</ul></nav>
<main>
<h1>DELETE AUCTION</h1>
<table style="width:50%">
<tr>
<th>auction id</th>
<th>Tile</th>
<th>Category</th>
<th>Description</th>
<th>Date</th>
<th>Prize</th>
<th>Delete</th>
</tr>';
$resultone=$pdo -> query("SELECT * FROM auction");
foreach($resultone as $valueone){
echo'
<tr>
<td>'.$valueone['auction_id'].'</td>  
<td>'.$valueone['title'].'</td> 
<td>'.$valueone['auction_category'].'</td> 
<td>'.$valueone['description'].'</td> 
<td>'.$valueone['auction_date'].'</td> 
<td>'.$valueone['auction_price'].'</td>
<td>';echo'<a href="DeleteAuction.php?auctionid='.$valueone['auction_id'].'">delete</a></td>
</tr>';
}
$deletequery=$pdo -> query(" DELETE FROM auction WHERE auction_id='".$_GET['auctionid']."'");
echo "<script type='text/javascript'>alert('Auction has been DELETED succesfully');</script>";
echo'</table>


</form>
</main>
';
?>

<?php


?>
<?php
include "foot.php";?>