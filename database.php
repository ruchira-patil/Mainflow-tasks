<?php
// this php script is for connecting with database
// data has to be fetched from local server
 
// Username is root

$user = 'root';

$password = '1234';
 
// Database name is signup_register

$database = 'login_signup';
 
// Server is localhost with
// port number 3307

$servername='localhost:4306';

$conn = new mysqli($servername, $user,

                $password, $database);
 
// Checking for connections

if (!$conn){

    echo "Connection Unsuccessful!!!";
}
 
?>