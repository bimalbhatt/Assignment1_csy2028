<?php
include "head.php";?>
<?php
 echo'<main>
 <center>
<h1>ADMIN REGISTRATION FORM</h1></center>
<form action="AddAdmin.php" method="POST">
<label>Username</label> <input type="text" name="username"/>
    <label>Email</label> <input type="email" name="emailid"/>
    <label>Password</label> <input type="password" name="password"/>
   
    
    <input type="submit" value="Register" name="Adminregbutton" />

</form>
<center><a href="AdminLogin.php">Admin Login</a>||<a href="register.php">User Registration</a>||<a href="UserLogin.php">User Login</a></center>
</main>';
?>
<?php
session_start();
if(isset($_POST['Adminregbutton'])){
 $usernaame=$_POST['username'];
 $emailadd=$_POST['emailid'];
 $pass=$_POST['password'];
//  echo $pass;
if($usernaame==""){
    echo"<center><main>Your username field is empty</main></center>";
}
if($emailadd==""){
    echo"<center><main>Your email field is empty</main></center>";
}
if($pass==""){
    echo"<center><main>Your password field is empty</main></center>";
}
else{
    $userqueryyone=$pdo->prepare('SELECT * FROM admin WHERE email= :Email LIMIT 1');
    $crietria=[
        'Email'=>$emailadd
    ];
    $userqueryyone->execute($crietria);
    $emailque = $userqueryyone->fetch();
    if($emailque){
        // echo $emailque['email'];
        // echo $emailadd;
        if($emailque['email']===$emailadd){
            echo"<main><center>User already taken so try with new account</center></main>";
        }
       
        }
        else{ $userqueryy = $pdo->query("INSERT INTO admin( name, email, password) VALUES ('".$usernaame."','".$emailadd."','".$pass."')");
              echo"<main><center><h2>User is registered now you can sign in</center></main>";
    }
    
    }
}

?>

<?php
include "foot.php";?>