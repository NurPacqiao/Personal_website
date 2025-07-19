<?php
$nazwa_serwera = 'localhost';
$nazwa_uzytkownika_db = 's168671';
$haslo_db = 'my8kEU5sql';
$nazwa_bazy = 's168671';
$conn = mysqli_connect($nazwa_serwera, $nazwa_uzytkownika_db, $haslo_db, $nazwa_bazy);

if (!$conn) {
    die('Brak polaczenia: ' .mysqli_connect_error());
}