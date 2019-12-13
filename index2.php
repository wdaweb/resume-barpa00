<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="./jquery-3.4.1.min.js"></script>
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


.title{

    font-size:30px;
    position: absolute;
    left:5px;

    margin-top: 30px;
    margin-left: 100px;
    z-index: 1;
    
    
}
a{
    text-decoration: none;
    color: rgb(243, 209, 158);
}


.content{
    position: absolute;
    top: 210px;
    left: 445px;
    height: 500px;
    width: 500px;
    /* background-color: rgba(0, 0, 0, 0.5); */
}

.doodle{
    position:relative;
    /* z-index:-1; */
    height:100vh;
} 
p{
    line-height: 12px;
    padding-left:50px;
}

</style>
<body>
    <div class="title">
        <div>
            <a href="#" onclick="loadpage('./front/information.php')">information</a>
        </div>
        <div>
            <a id="myData" href="#" onclick="loadpage('./front/experience.php')">experience</a>
        </div>
        <div>
            <a id="skill" href="#" onclick="loadpage('./front/autobiography.php')">autobiography</a>
        </div>
        <div>
            <a id="workExperience" href="#" onclick="loadpage('./front/collection.php')">collection</a>
        </div>
        <div>
            <a id="workExperience" href="#" onclick="loadpage('./front/contact.php')">contact</a>
        </div>
        
        
    </div>
    <div class="content">
    
    </div>
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
           

    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/css-doodle/0.6.1/css-doodle.min.js"></script>
</body>
</html>
<script>
    loadpage("./front/hello.php");

    function loadpage(page){
      $(".content").load(page)
    }
//   $("#pic").on("click",function(){
//     $("#inputRayp").css("display","inline");
//     $("body").css("overflow","hidden");
//   })
//   $("#cance3").on("click",function(){
//     $("#inputRayp").css("display","none");
//     $("body").css("overflow","auto");
//   })
 </script>