<?php
require("../Config/db.php");
require("../utils/functions.php");

if (isset($_POST['submit'])) {

    $email = strtolower($_POST['email']);
    $plaintext_passsword = $_POST['password'];

    $db_pass = get_password($email, $conn);

    $verify = password_verify($plaintext_passsword, $db_pass);

    if ($verify) {
        session_start();

        $_SESSION['set_email'] = $email;
        header("Location: ../User/profile.php");

        // session_destroy();
    } else {
        header("Location: ../Registry/login.php?pass_err");
    }
}
