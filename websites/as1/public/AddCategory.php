<?php
include "head.php";
include "Connectiondb.php";
?>
<?php

if((isset($_POST['addcat']))){
    $catname=$_POST['categoryinput'];


$result=$pdo -> query("INSERT INTO `category`( `auction_category`) VALUES ('".$catname."')");
echo "<script type='text/javascript'>alert('Category name has been added succesfully');</script>";
}
echo'
<nav>
<ul>
<li><a href="AddCategory.php">Add Category</a></li><br>
<li><a href="EditCategory.php">Edit Category</a></li><br>
<li><a href="DeleteCategory.php?catname=">Delete Category</a></li><br>
</ul></nav>
<main>
<center><h1>Add Category</h1></center>
<form action="AddCategory.php" method="POST">
<label>Category Name=</label><br>
<input type="text" name="categoryinput"><br>
<input type="submit" value="ADD" name="addcat"/>
</form>
</main>';
?>
<?php
include "foot.php";?>