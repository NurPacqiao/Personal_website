<?php
session_start();
if (isset($_POST['username'])) {
    header("Location: zaloguj.php");
    exit();
}