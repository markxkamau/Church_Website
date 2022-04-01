<?php
require("../Config/db.php");
require("../utils/functions.php");

if (isset($_POST['submit'])) {
    
    // Get the form details
    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $username = "$fname $lname";
    $gender = $_POST["gender"];
    $email = strtolower($_POST["email"]);
    $dob = $_POST["dob"];
    $date = date("Y-m-d");
    $contact = $_POST["contact"];
    $rank = $_POST["rank"];
    $password = $_POST["password"];
    $passwd = $_POST["c_password"];


    // Check if passwords match
    if ($password != $passwd) {
        header('location: ../Registry/register.php?pass_err');
    } else {
        // Hash the password
        $hash = password_hash($password, PASSWORD_DEFAULT);
        echo $hash;

        // check if user already exists
        $sql3 = "SELECT * FROM  login WHERE login_email = '$email'";

        $query3 = mysqli_query($conn, $sql3);

        if (mysqli_num_rows($query3) > 0) {
            header('location: ../Registry/register.php?email_err');
        } else {
            // Save to DB
            $login_user = str_replace(' ', '', $username);
            $login_rank = "Church".$rank;
            $sql = "INSERT INTO `login` (login_email, login_password, login_username, login_rank) 
            VALUES ('$email', '$hash', '$login_user','$login_rank')";

            $query = mysqli_query($conn, $sql);

            if ($query) {
                $login_id = $conn->insert_id;

                $sql2 = "INSERT INTO `users` (user_fullName, user_contact, user_gender, user_dob, user_registry_date, user_login_id) 
                VALUES ('$username', '$contact', '$gender', '$dob',  '$date', '$login_id')";


                $query2 = mysqli_query($conn, $sql2);

                if ($query2) {
                    header('location: ../Registry/login.php?login_detail');
                } else {
                    echo "inserting into users failed!";
                }
            } else {
                echo "Query did not run";
            }
        }
    }
}
