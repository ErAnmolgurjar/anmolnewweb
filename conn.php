<?php

$sname= "localhost";

$unmae= "root";

$password = "root";

$db_name = "login_data";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}