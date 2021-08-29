<?php

$db = mysqli_connect("localhost","root","","notes");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>