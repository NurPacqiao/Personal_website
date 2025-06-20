<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja nowego użytkownika</title>


    
    <style>
       body{
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            flex-direction: column;
            width: auto;
            background-image: url(luca-micheli-ruWkmt3nU58-unsplash.jpg);
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
            background-color: darkgreen;
            transition: .26s;
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
            background-image: url(luca-micheli-ruWkmt3nU58-unsplash.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php
    require('db.php');
    if(isset($_REQUEST['nazwa_uzytkownika'])){
        $username = stripslashes($_REQUEST['nazwa_uzytkownika']);
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['haslo']);
        $password = mysqli_real_escape_string($conn, $password);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);

        $dodaj = "INSERT INTO users (username, password, email)
        VALUES ('$username', '".md5($password)."', '$email')";
        $wynik = mysqli_query($conn, $dodaj);
        if ($wynik) {
            echo "<h3>Zostałeś zarejestrowany.</h3>
            <p>Kliknij aby się <a href='zaloguj.php'>zalogować</a></p>";
        }
        else {
            echo "<h3>Wypełnij brakujące dane.</h3>
            <p>Kliknij aby się <a href='rejestruj.php'>zalogować ponownie</a></p>";
        }
    }
    else {
    ?>
    <section>
        <form action="" method="post">
            <h1>Rejestracja użytkownika</h1>
            <input type="text" name="nazwa_uzytkownika" placeholder="Nazwa użytkownika" required/><br><br>
            <input type="text" name="email" placeholder="Adres e-mail"><br><br>
            <input type="password" name="haslo" placeholder="Hasło"><br><br>
            <input type="submit" name="submit" value="Zarejestruj" class="submit"><br><br>
            <p>Masz już konta? <a href="zaloguj.php">Zaloguj się</a></p>
        </form>
    </section>
    <?php
    }
    ?>
</body>
</html>