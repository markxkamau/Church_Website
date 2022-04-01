<?php
require("../Config/db.php");
require("../utils/functions.php");

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["profilePic"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
session_start();

if (isset($_FILES["profilePic"])) {
    $check = getimagesize($_FILES["profilePic"]["tmp_name"]);
    $url = $_FILES["profilePic"]["name"];
    $now = date("Y-m-d H:i:s");
    $user_id = $_SESSION["user_id"];

    if ($check !== false) {
        // check if image already exist in the database
        $check_recurrence = get_image_data($user_id, 'image_user_id', $conn);
        if ($check_recurrence) {
            //update section
            $sql = "UPDATE `image` 
                    SET `image_url`='$url',`image_upload_time`='$now' 
                    WHERE `image_user_id` = $user_id";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header("location: ../User/profile.php");
            } else {
                header("location: ../User/profile.php?updated");
            }
        } else {
            //insert new data
            $sql = "INSERT INTO `image`(`image_url`, `image_upload_time`, `image_user_id`) 
                    VALUES ('$url','$now','$user_id')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header("location: ../User/profile.php");
            } else {
                header("location: ../User/profile.php?updated");
            }
        }
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
}

// Check file size
if ($_FILES["profilePic"]["size"] > 500000) {
    $uploadOk = 0;
}

// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    header("location: ../User/profile.php?image_err");
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("location: ../User/profile.php?already_exists");
} else {
    if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $target_file)) {
        header("location: ../User/profile.php");
    } else {
        header("location: ../User/profile.php?post_err");
    }
}
