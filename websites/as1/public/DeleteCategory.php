<?php
include "head.php";?>
<?php
echo'
<nav>
<ul>
<li><a href="AddCategory.php">Add Category</a></li><br>
<li><a href="EditCategory.php">Edit Category</a></li><br>
<li><a href="DeleteCategory.php">Delete Category</a></li><br>
</ul></nav>
<main>
<h1>Delete Category</h1>
<table style="width:50%">
<tr>
<th>category id</th>
<th>Category Name</th>
<th>Edit</th>
</tr>';
   $resultone=$pdo -> query("SELECT `category_id`, `auction_category` FROM `category` ");
foreach($resultone as $valueone){
echo'
<tr>
<td>'.$valueone['category_id'].'</td>  
<td>'.$valueone['auction_category'].'</td>
<td>';echo'<a href="DeleteCategory.php?catname='.$valueone['auction_category'].'">delete</a></td>
</tr>';
}
$deletequery=$pdo -> query(" DELETE FROM category WHERE auction_category='".$_GET['catname']."'");
echo "<script type='text/javascript'>alert('Category name has been DELETED succesfully');</script>";
echo'</table>


</form>
</main>
';
?>
<?php
include "foot.php";?>