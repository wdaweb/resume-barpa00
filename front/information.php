<?=
    include "../base.php";
    $profile = selectA("basic");
    foreach ($profile as $row){
        echo "<p>".$profile[0]['name'].'</p>';
        echo "<p>".$profile[0]['birthday'].'</p>';
        echo "<p>".$profile[0]['education'].'</p>';
    }
?>
