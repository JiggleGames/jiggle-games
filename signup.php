<?php

$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['password'];
$repeatpassword = $_GET['repeatpassword'];

if (file_exists)

$hashedpass = hash('sha512', $password);

//$userFile = "https://raw.githubusercontent.com/JiggleGames/database-test/main/user.txt"; //database
$userFile = "/mnt/c/Users/User/Desktop/JiggleGames/DB/users/$username/user.json"; //database
echo $userFile;
$lines = file($userFile);
$lines = file($userFile);
$storedpass = $lines[0];
echo $storedpass;

if ($hashedpass == $storedpass)
    header("Location: website.html");
else
    echo "incorrect username or password"
?>