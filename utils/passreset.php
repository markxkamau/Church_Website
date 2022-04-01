<?php

require("../utils/functions.php");
require("../Config/db.php");

if (isset($_POST['submit'])) {
    $email_input = $_POST["email"];
    $message = "Password for account has been reset";

    $sql3 = "SELECT * FROM  login WHERE login_email = '$email_input'";

    $query3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($query3) > 0) {

        $random = randomPassword();

        $new_password = password_hash($random, PASSWORD_DEFAULT);

        $sql = "UPDATE `login` 
                SET `login_password`= '$new_password'
                WHERE `login_email` = '$email_input'";

        if ($conn->query($sql) === TRUE) {
            // mail($email_input,$random,$message,$sender);
            echo $random;
        }
    } else {
        header("location: ../Registry/passwd.php?email_err");
    }
}
