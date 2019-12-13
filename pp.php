<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
    
</head>
<style>

body{
    margin: 0;
    padding: 0;
}
.doodle{
    position: fixed;
    z-index:-1;
    /* height:100%; */
}
.pp{
    position:absolute;
    top:0;
    left:20%;
    width:50%;
    padding:5rem;
    /* text-align: center; */

   
}
.cc{
    resize:none;
}
</style>
<body>
    <css-doodle grid="5"class="doodle">
    :doodle{
            @grid: 10 / 100vmax;
            grid-gap: 3vmax;
        }
        --bg: #0a0c27;
        background: linear-gradient(
        @rand(360deg),
        @var(--bg) 50%, transparent 50%
        );
        border-radius:@repeat(4,@r(40%,60%)); 

        animation: move infinite @r(100s,150s) linear;
        @keyframes move {
            0% {
                transform: translate3d(0, 0, 0);
            }
            50% {
                transform: translate3d(@r(-500%, 1000%), @r(-500%, 1000%), 0);
            }
            100% {
                transform: translate3d(0, 0, 0);
            }
        }
    </css-doodle>
    <div class="pp">
        <div>
    <h1>基本資料</h1>
    <form action="./api/information2_api.php" method="POST">
        <?php
            include_once "./base.php";
            $profile = selectA("basic");
            foreach ($profile as $row){
                echo"<input type='hidden' id='id' name='id' value='$row[id]'><br>";
                echo"姓名 : <input type='text' id='name' name='name' value='$row[name]'><br>";
                echo"生日 : <input type='text' id='birthday' name='birthday' value='$row[birthday]'><br>";
                echo"學歷 : <input type='text' id='education' name='education' value='$row[education]'><br>";
        }
        ?>
        <input type="submit" vaule="送出">
    </form>
        </div>
    <h1>聯絡方式</h1>
    <form action="./api/information_api.php" method="POST">
        <?php
            // $table="information";          
            include_once "./base.php";
            $contact = selectA("contact");
            foreach ($contact as $row){
            
                echo"<input type='hidden' id='id' name='id' value='$row[id]'><br>";
                echo"電話 : <input type='text' id='tel' name='tel' value='$row[tel]'><br>";
                echo"信箱 : <input type='text' id='mail' name='mail' value='$row[mail]'><br>";

            }
            
        ?>
        <input type="submit" vaule="送出">
    </form>
    <h1>工作經歷</h1>
    <form action="">
        <table id="tb">
            <input type="button" id="addItem" value="+">
             
        <?php
            include_once "base.php";
            $data = selectA("workex");
            foreach($data as $row){
                ?>
            <tr>
                <td>公司:</td>
                <td><input type="text" value="<?=$row['job']?>"></td>
            </tr>
            <tr>
                <td>期間:</td>
                <td><input type="text" value="<?=$row['period']?>"></td>
            </tr>
            <tr>
                <td>工作內容闡述:</td>
                <td><textarea name="content" id="jobtent" cols="30" rows="10" class="cc"><?=$row['content']?></textarea></td>
                <td>
                    <input type="button" class="edit" data-id="<?=$row['id']?>" value="更改">
                    <input type="button" class="del" data-id="<?=$row['id']?>" value="刪除">
                </td>
            </tr>
    </form>

        <?php
            }
        ?>
        </table>
        <script src='./jquery-3.4.1.min.js'></script>
        <script>
            $("#addItem").on("click", function(){
                console.log("ddjdjdjdjdj")
                let text = 
                `<tr><td>公司:</td>
                <td><input type="text" id="job"></td>
            </tr>
            <tr>
                <td>期間:</td>
                <td><input type="text" id="period"></td>
            </tr>
            <tr>
                <td>工作內容闡述:</td>
                <td><textarea name="content"  class="cc" id="jobtent" cols="30" rows="10"></textarea></td>
                <td>
                    <input type="button" class="edit" data-id="<?=$row['id']?>" value="更改">
                    <input type="button" class="del" data-id="<?=$row['id']?>" value="刪除">
                </td>
            </tr>`;
            $("#tb").append(text);
            $(".cancel").on("click",function(){
                query("pp");
            })

            })
        
        </script>




        <h1>自傳</h1>
            <table>
            <form action="autonbio_api.php">
            <tr><textarea class="cc" name="comment" rows="15" cols="80">自傳內容</textarea></tr>
            <div><input type="submit" value="send"></div>
            </table>
            </form>
        
    </div>
   
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/css-doodle/0.6.1/css-doodle.min.js"></script>


</html>