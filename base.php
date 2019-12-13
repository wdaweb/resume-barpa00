<?php

$dsn = "mysql:host=localhost;charset=utf8;dbname=resume11";
$pdo = new PDO($dsn,"root","");

function all($table){
    global $pdo;
    $sql="select * from $table ";
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}

function select( $table,$value){
    global $pdo;
    $sql = "select * from $table where `acc`='$value'"  ;
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}
function selectA( $table){
    global $pdo;
    $sql = "select * from $table "  ;
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

function selectById( $table, $id){
    global $pdo;
    $sql = "select * from $table where `id`='$id'";
   // echo $sql;
    return $pdo->query($sql)->fetch(PDO::FETCH_NUM);
}

function delete( $table, $id){
    global $pdo;
    $sql = "delete from $table where `id`=$id";
    return $pdo->exec($sql);
}

function insert( $table, $value){
    global $pdo;
    switch( $table){
        case "skill": 
            $sql = "insert into $table( `skill`) value('$value[0]')";
        break;
        case "work": 
            $sql = "insert into $table( `work`, `position`) value('$value[0]', '$value[1]')";
        break;
        case "license": 
            $sql = "insert into $table( `license`) value('$value[0]')";
        break;
    }
    return $pdo->exec($sql);
}

function edit( $table, $id, $data){
    global $pdo;
    $select = $table;
    switch( $select){
        case "skill": 
            $sql = "update $table set `skill`='$data[0]' ";
        break;
        case "work": 
            $sql = "update $table set `work`='$data[0]', `position`='$data[1]' ";
        break;
        case "license": 
            $sql = "update $table set `license`='$data[0]' ";
        break;
        case "information": 
            $sql = "update $table set `basic`='$data[0]' ";
        break;
        case "informationP":
            $sql = "UPDATE `information` SET `name`='$data[0]',`birthday`='$data[1]',`addr`='$data[2]',`Education`='$data[3]',`major`='$data[4]'";
        break;
    }
    $sql = $sql . "where `id`=$id";
    echo $sql;
    echo "<br>";
    echo $pdo->exec($sql);
}
?>