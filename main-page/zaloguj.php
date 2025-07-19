<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>


    <style>
        body{
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            flex-direction: column;
            width: auto;
            background-image: url(jonatan-pie-3l3RwQdHRHg-unsplash.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: repeat;
        }

        input{
            justify-content: center;
            align-items: center;
            text-align: center;
            border: .2px solid black;
            border-radius: 15px;
            width: 320px;
            height: 40px;
        }

        input::placeholder{
            font-size: 1.5rem;
        }

        input[type="text"]{
            font-size: 1.4rem;
        }

        h1{
            font-size: 2.5rem;
            color: white;
        }

        a{
            text-decoration: none;
            color: lightblue;
        }

        a:hover{
            opacity: .7;
        }

        p{
            color: white;
        }

        .submit{
            width: 120px;
            color: black;
            background-color: antiquewhite;
            font-size: 1.2rem;
            border: 1px solid black;
        }

        .submit:hover{
            opacity: .7;
            background-color: lightsalmon;
        }

        section{
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            display: flex;
            width: 700px;
            height: 800px;
            border: .1px solid black;
            border-radius: 15px;
            background-image: url(jonatan-pie-3l3RwQdHRHg-unsplash.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php
    require('db.php');
    session_start();
    if(isset($_POST['nazwa_uzytkownika'])){
        $username = stripslashes($_REQUEST['nazwa_uzytkownika']);
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['haslo']);
        $password = mysqli_real_escape_string($conn, $password);
        $pyt = " SELECT * FROM users WHERE username = '$username' AND password = '".md5($password)."' ";

        $odp = mysqli_query($conn, $pyt);
        $wiersze = mysqli_num_rows($odp);
        if ($wiersze == 1) {
            $_SESSION['username'] = $username;
            header("Location: panel.php");
        }
        else {
            echo "<h3>Błędna nazwa użytkownika lub hasło.</h3><br/>
            <p>Kliknij aby się <a href='zaloguj.php'>zalogować</a>.</p>";
        }
    }
    else {

    ?>
    <section>
        <form method="post" name="login">
            <h1>Logowanie</h1>
            <input type="text" name="nazwa_uzytkownika" placeholder="Nazwa użytkownika" autofocus="true" /><br><br>
            <input type="password" name="haslo" placeholder="Hasło" /><br><br>
            <input type="submit" value="Zaloguj" name="submit" class="submit"/>
            <p>Nie masz konta? <a href="rejestruj.php">Zarejestruj się</a></p>

        </form>
    </section>
    <?php
    }
    ?>
</body>
</html>