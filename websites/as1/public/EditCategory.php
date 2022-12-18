<?php
include "head.php";
include "Connectiondb.php";
?>
<?php

echo'
<nav>
<ul>
<li><a href="AddCategory.php">Add Category</a></li><br>
<li><a href="EditCategory.php?takeid=">Edit Category</a></li><br>
<li><a href="DeleteCategory.php?catname=">Delete Category</a></li><br>
</ul></nav>
<main>
<h1>Edit Category</h1>
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
<td>';echo'<a href="EditCategory.php?editcatid='.$valueone['category_id'].'">edit</a></td>
</tr>';

}
// $thisid=$_GET['editcattext'];
 
echo'</table>
<form action="EditCategory.php?editcatid=" method="POST">
<label>Edit Category:</label>
<input type="text" name="edittext" value="">
<input type="submit" name="editcatbtn" >
</form>
</main>
';
// echo $thisid;

if(isset($_POST['editcatbtn'])){ 
    $editervalue=$_POST['edittext']; 
    echo $editervalue;
    echo $getid;
    //  $updatequery=$pdo -> query("UPDATE category SET Product_category='$editervalue' WHERE Product_id='".$_GET['editcatid']."'");
    // if($updatequery){
    //     echo"successfully";
    // }
}
// echo $editervalue;
//     echo $thisid;
//       $resulttwo=$pdo -> query("UPDATE category SET Product_category='.$editervalue.' WHERE Product_category='.$thisid.'");
// if(isset($_POST['editcatbtn'])){
//     $editervalue=$_POST['editcattext'];
//     if(isset($_GET['takeid'])){
//          echo $editervalue;
//     //   $resulttwo=$pdo -> query("UPDATE category SET Product_category='".$editervalue."' WHERE Product_category='".$valueone['Product_category']."'");
    
//     //   if($resulttwo){
//     //         echo"successfull";
//     //     }else
//     //     {
//     //         echo"failed";
//     //     }
//     }
// }
    



?>

 <?php
include "foot.php";?>