<?php
require("mysqli_connect.php");
if (isset($_POST["register"])) {
    $select = "select * from users";
    $result = mysqli_query($conn, $select);
    if ($result->num_rows >= 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["email"] === $_POST["email"]) {
                $hihiErr = "Email already exists !";
                break;
            } else {
                $sql = "insert into users(first_name, last_name, email, password, registration_date, user_level)
            value ('" . ($_POST["fname"]) . "', '" . ($_POST["lname"]) . "', '" . ($_POST["email"]) . "','" . ($_POST["pw"]) . "','" . date("Y-m-d") . "',1)";
                if (mysqli_query($conn, $sql) === true) {
                    header("Location: Thankyou.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
                break;
            }
        }
    }
}
