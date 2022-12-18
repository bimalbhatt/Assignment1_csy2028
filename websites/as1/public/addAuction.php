<?php
include "head.php";
include "Connectiondb.php";
session_start();
?>

<nav>
<ul>
<li><a href="addAuction.php">Add Auction</a></li><br>
<li><a href="review.php">Add review</a></li><br>
<li><a href="DeleteAuction.php?auctionid=">Delete Auction</a></li><br>
</ul></nav>
<main>
 <center>
<h2>Welcome <?php echo $_SESSION['username']; ?></h2>
<h1>ADD AUCTION</h1></center>
<form action="addAuction.php" method="POST">
    <label>Product name::</label> <input type="text" name="productname"/>
    <label>Product Description::</label> <textarea  name="productdescription"></textarea>
    <label>Product price::</label> <input type="text" name="productprice" />
    <label>Date::</label><input type="Date" name="dateinput" />
    <label>Product category::</label>
  <select style="width:290px;" name="productcategory">
  <?php
  $results=$pdo -> query("SELECT auction_category FROM category");
  foreach($results as $values){
  echo'<option value="'.$values['auction_category'].'">'.$values['auction_category'].'</option>';
  }
    ?>
  </select>

    <input type="submit" value="ADD" name="bimal" />

</form>
<center><a href="UserRegistration.php">UserRegistration</a>||<a href="Admin.php">Admin</a></center>




</main>

<?php
if((isset($_POST['bimal']))){
    $productame=$_POST['productname'];
    $productdesc=$_POST['productdescription'];
    $productcat=$_POST['productcategory'];
    $productpri=$_POST['productprice'];
    $productdat=$_POST['dateinput'];
$result=$pdo -> query("INSERT INTO `auction`(`title`, `auction_category`, `description`,  `auction_date`,`auction_price`) VALUES ('".$productame."','".$productcat."','".$productdesc."','".$productdat."','".$productpri."')");


}
?>
<?php
include "foot.php";?>