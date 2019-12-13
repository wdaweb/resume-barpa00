<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="contact">
        <?php
        include_once "../base.php";
        $contact = selectA("contact");
        foreach($contact as $row){
            echo"<p>".$contact[0]['tel'].'</p>';
            echo"<p>".$contact[0]['mail'].'</p>';
                }
        
        ?>
    </div>
</body>
</html>