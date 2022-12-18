<?php
include "head.php";
include "connectiondb.php";
?>
<?php
$error_php=array();
 echo'<main>
 <center>
<h1>USER REGISTRATION FORM</h1></center>
<form action="register.php" method="POST">
<label>Username</label> <input type="text" name="username" />
    <label>Email</label> <input type="email" / name="emailid">
    <label>Password</label> <input type="password" name="password"/>
   
    
    <input type="submit" value="Submit" name="Userregbutton" />

</form>
<center><a href="UserLogin.php">UserLogin</a>||<a href="Admin.php">Admin</a></center>
</main>';
?>
<?php
//session_start();
if(isset($_POST['Userregbutton'])){
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
    $userqueryyone=$pdo->prepare('SELECT * FROM user WHERE email= :Email LIMIT 1');
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
        else{ $userqueryy = $pdo->query("INSERT INTO user( name, email, password) VALUES ('".$usernaame."','".$emailadd."','".$pass."')");
              echo"<main><center><h2>User is registered now you can sign in</center></main>";
    }
    
    }
}

?>

<?php
include "foot.php";?>