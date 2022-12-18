<?php
include "head.php";
include "connectiondb.php";
?>
<main>
 <center>
<h1>USER LOGIN PAGE</h1></center>
<form action="UserLogin.php" method="POST">
    <label>Email</label> <input type="email" name="emailid"/>
    <label>Password</label> <input type="password" name="password" />
   
    
    <input type="submit" value="Login" name="Loginbtn"/>

</form>
<center><a href="register.php">UserRegistration</a>||<a href="Admin.php">Admin</a></center>
</main>
<?php
//session_start();
if(isset($_POST['Loginbtn'])){
 $emailadd=$_POST['emailid'];
 $pass=$_POST['password'];
 if($emailadd==""){
    echo"<center><main>Your email field is empty</main></center>";
}
if($pass==""){
    echo"<center><main>Your password field is empty</main></center>";
}
else{
    $userqueryytwo=$pdo->prepare("SELECT * FROM user WHERE email= :Email  LIMIT 1");
    $crietria=[
        'Email'=>$emailadd
        
    ];
    $userqueryytwo->execute($crietria);
    $emailqu = $userqueryytwo->fetch();
    if($emailqu){
        // echo $emailqu['email'];
        // echo $emailqu['password'];
        if($emailqu['email']===$emailadd && $emailqu['password']===$pass){
            $usernaa=$emailqu['name'];
              $_SESSION['username']=$usernaa;
              header("Location:DeleteAuction.php");
         }
         else{
            echo 'header_remove';
         }
    }
}
}
?>
<?php
include "foot.php";?>