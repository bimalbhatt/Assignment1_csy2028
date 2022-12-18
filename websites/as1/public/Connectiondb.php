<?php
// $host='localhost';
// $databaseusername='root';
// $databasepassword='';
// $dbname='csy2028as1';
// $pdo= new PDO("mysql:host=$host;dbname=$dbname",$databaseusername,$databasepassword);
$pdo = new PDO('mysql:dbname=csy2028as1;host=db', 'root', 'root',[PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION]);
?>