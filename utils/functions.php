<?php
// Query
function myQuery($conn, $sql)
{
    $result =  mysqli_query($conn, $sql);
    return $result;
}

function getIcon($name)
{
    $url = "https://ui-avatars.com/api/";
    $icon = " $url $name";
    return $icon;
}

function get_login_data($login_id, $content, $conn)
{
    $info = "select $content from login where login_id = $login_id";
    $query = myQuery($conn, $info);
    $result = mysqli_fetch_assoc($query);
    $data = $result["$content"];
    return $data;
}

function get_data($login_id, $content, $conn)
{
    $info = "select $content from users where user_login_id = $login_id";
    $query = myQuery($conn, $info);
    $result = mysqli_fetch_assoc($query);
    $data = $result["$content"];
    return $data;
}

function get_image_data($user_id, $content, $conn)
{
    $info = "select $content from image where image_user_id = $user_id";
    $query = myQuery($conn, $info);
    $result = mysqli_fetch_assoc($query);
    $data = $result["$content"];
    return $data;
}

function get_login_id($email, $conn)
{
    $sql = "SELECT `login_id` FROM `login` WHERE `login_email` = '$email'";
    $query = myQuery($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $data = $result["login_id"];
    return $data;
}
function get_password($email, $conn)
{
    $sql = "select login_password from login where login_email = '$email'";
    $query = myQuery($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $login_password = $result["login_password"];
    return $login_password;
}

function get_rank($email, $conn)
{
    $sql = "select login_rank from login where login_email = '$email'";
    $query = myQuery($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    $login_rank = $result["login_rank"];
    return $login_rank;
}
function randomPassword()
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function function_alert($message)
{

    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

function password_strength($password)
{
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        return false;
    } else {
        return true;
    }
}
