<?php
try {
    require("mysqli_connect.php");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connection succesfully !";
} catch (Exception $e) {
    echo "Caught exeption: " . $e->getMessage() . "/n";
}
