
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>履歷後台</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>履歷後台登入</h1>
<form action="login_api.php" method="POST">
    <table class="wrapper">
        <tr>
            <td>帳號: </td>
            <td>
                <input type="text" name="acc" id="acc">
            </td>
        </tr>
        <tr>
            <td>密碼: </td>
            <td>
                <input type="password" name="pw" id="pw">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="login">
            </td>
        </tr>
    </table>
</form>
<?php
    if(!empty($_GET["err"])){
        
        echo "<script>alert('bye');location.herf='index.php'</script>";
    }
?>
<script>

</script>
</body>
</html>