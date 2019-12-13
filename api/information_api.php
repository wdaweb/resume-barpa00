<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=resume11";
$pdo=new PDO($dsn,'root','');

$tel=$_POST["tel"];
$mail=$_POST["mail"];
$id=$_POST["id"];


$sql="update contact set `tel`='$tel',`mail`='$mail' WHERE id='$id'";
$pdo->exec($sql);
echo "<script>alert('編輯完成')</script>";
header("refresh:0;url=../pp.php");
?>