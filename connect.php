<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$database   = "questions";
if(!mysql_connect($servername, $username,  $password))
{
    exit('Error: could not establish database connection');
}
if(!mysql_select_db($database)
{
    exit('Error: could not select the database');
}
?>