<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<style>
body{
    margin: 0;
    padding: 0;
}
/* .header{
    position: relative;
    width: 100%;
    height: 800px;
} */
.headerleft{
    position: absolute;
    top: 0;
    left: 0;
    height: 100vh;
    width: 50%;
    background-color: rgb(88, 111, 189);
}
.headerright{
    position: absolute;
    top: 0;
    right: 0;
    height: 100vh;
    width: 50%;
    background-color: rgb(139, 139, 41);
    left: 50%;
}
.title{
    position: absolute;
    right:0;
    font-size:30px;
    margin-top: 30px;

}
.title2{
    /* width: 100%;
    height: 100px; */
    font-size:30px;
    position: absolute;
    left:5px;
    /* display: flex;
    justify-content:flex-start; */
    margin-top: 30px;
    margin-right: 10px;
    z-index: 1;
    background:#ccc;
    
}
.divimg{
    left: 50%;
    width: 450px;
    height: 500px;  
}
#img{ 
    width: 100vh;
    height: 100vh;
    max-width: 100%;
    max-height: 100%;
}
#leftwordone{
    font-size: 100px;
}
.content{
    position: absolute;
    top: 200px;
    left: 0;
    height: calc(100% - 200px);
    width: 100%;
    /* background-color: rgba(235, 235, 227, 0.2);  */
}
.rightcontent{
    position: absolute;
    top: 100px;
    right: 0;
    height: calc(100% - 100px);
    width: 100%;
    /* background-color: rgba(235, 235, 227, 0.2);  */
}
.doodle{
    position:relative;
    /* z-index:-1; */
    /* height:100%; */
} 

</style>
<body>
        <?php
            $doTwo = (!empty($_GET['doTwo']))?$_GET['doTwo']:'photo';
            $do = (!empty($_GET['do']))?$_GET['do']:'hello';            
        ?>
        <div>

        <div class="headerleft">
        <div id="doodle">
        <css-doodle grid="5">
                :doodle {
                    @grid:  5 / 100vmax;
                    grid-gap: 3vmax;
            
                }
                background: @pick(#FD7400, #1F8A70, #BEDB39, #FFE11A, #FD7400);
                opacity: @r(.9);
                border-radius:@repeat(2,@r(40%,60%));
                
                animation: test infinite @r(100s, 150s) linear;
                
                @keyframes test {
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
        </div>
        <div class="title">
            <a href="?do=information&doTwo=<?=$doTwo?>">information</a><br>
            <a href="?do=experience&doTwo=<?=$doTwo?>">experience</a>
            <a href="?do=hello"></a>
        </div>
        <div class="content">
        <?php
        $path = "./content/" . $do . ".php";
        if(file_exists($path)){
            include $path;
        }else{
            include "./content/hello.php";
        }
        ?>
        </div> 
           
                
        <div class="headerright">
            <div class="title2">
                <a href="?do=<?=$do?>&doTwo=autobiography">autobiography</a>
                <a href="?do=<?=$do?>&doTwo=collection">collection</a>
                <a href="?do=<?=$do?>&doTwo=contact">contact</a> 
                <a href="?do=photo"></a>

            </div>
            <div class="rightcontent">
                <?php
                
                $path2 = "./content/" . $doTwo . ".php";
                if(file_exists($path2)){
                    include $path2;
                }else{
                    include "./content/photo.php";
                }
                ?>

            </div>
            
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/css-doodle/0.6.1/css-doodle.min.js"></script>
</body>
</html>