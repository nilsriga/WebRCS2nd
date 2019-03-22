<?php

$servrname = "localhost"; //hostname vai ip adrese
$username = "root";
$password = "";
$dbname = "rcs_web";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);



// check connection

if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}


// class User extends Elequent
// {
//     protected $table = 'users';
// }

// $user = new User();
// $user->email = 'foo';
// $