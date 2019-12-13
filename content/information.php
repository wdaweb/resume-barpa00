<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="information">
        <?php
            include_once "./base.php";
            $information = selectA("basic");
            foreach($information as $row){
                echo"<p>姓名:".$information[0]['name']."</p>";
                echo"<p>生日:".$information[0]['birthday']."</p>";
                echo"<p>學歷:".$information[0]['education']."</p>";
            }
        ?>
    </div>
</body>
</html>