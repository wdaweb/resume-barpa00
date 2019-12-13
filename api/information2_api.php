<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=resume11";
$pdo=new PDO($dsn,'root','');

$name=$_POST["name"];
$birthday=$_POST["birthday"];
$education=$_POST["education"];
$id=$_POST["id"];

$sql="update basic set `name`='$name',`birthday`='$birthday',`education`='$education' WHERE id='$id'";
$pdo->exec($sql);
echo "<script>alert('編輯完成')</script>";
echo $sql;
header("location:../pp.php");


?>