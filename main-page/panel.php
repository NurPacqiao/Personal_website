<?php
include("sesja.php");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="slide.css">
    <title>Panel użytkownika</title>

    <style>
       body{
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            flex-direction: column;
            width: auto;
            background-image: url(sergei-a--heLWtuAN3c-unsplash.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        p{
            color: black;
            font-size: 1.8rem;
        }

        .button{
            background-color: darkslategray;
            color: antiquewhite;
            border: 1px solid black;
            border-radius: 7px;
            width: 80px;
            height: 30px;
            font-size: 1.02rem;
        }

        .button:hover{
            opacity: .9;
            color: lightcoral;
            cursor: pointer;
            background-color: antiquewhite;
            transition: .26s;
        }

      

        section{
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            width: 700px;
            height: 800px;
            border: .1px solid black;
            border-radius: 15px;
            background-image: url(sergei-a--heLWtuAN3c-unsplash.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .demo{
            padding: 20px;
            margin: 20px;
        }
    </style>


</head>
<body>
    <section>
        <p>Witaj, <?php echo $_SESSION['username']; ?>!</p>
        <p>Jesteś w panelu użytkownika. </p>
        <p><a href="wyloguj.php"><button class="button">Wyloguj</button></a></p>

        <p class="demo">Demo Projekty</p>

        <div class="container">
        <div class="image-cube">
        <div class="front"></div>
        <div class="right"></div>
        <div class="back"></div>
        <div class="left"></div>
        </div>
        <div class="btns">
        <button id="prev"><</button>
        <button id="next">></button>
        </div>
    </div>
    </section>
  
    <script src="slide.js"></script>
</body>
</html>