<?php
include_once "base.php";


$acc=$_POST['acc'];
$pw=$_POST['pw'];

// if(empty($_GET['acc'])){
//     header("location:index.php");
// }


$sql="SELECT * from login where `acc`='$acc'";
echo $sql;
$data = $pdo->query($sql)->fetch();



if(!empty($_POST['acc']) && $_POST["pw"] == $data['pw']){
    print_r($data);    
     header("location:pp.php");
}
else{
    header("location:index.php?err=1");
}

//header

?>