<?php

$username = $_GET['username'];
$password = $_GET['password'];



$hashedpass = hash('sha512', $password);

//$userFile = "https://raw.githubusercontent.com/JiggleGames/database-test/main/user.txt"; //database
$userFile = "/mnt/c/Users/User/Desktop/JiggleGames/DB/users/$username/user.json"; //database
echo $userFile;
$lines = file($userFile);
$lines = file($userFile);
$storedpass = $lines[0];
echo $storedpass;

if ($hashedpass == $storedpass)
    header("Location: https://jigglegames.github.io/jigglegames/website.html");
else
    echo "incorrect username or password"
?>