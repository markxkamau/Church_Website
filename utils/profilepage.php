<?php
require("../utils/functions.php");
require("../Config/db.php");

session_start();

$get_id = get_login_id($_SESSION['set_email'], $conn);

$get_membership = get_login_data($get_id, 'login_rank', $conn);

$get_email = get_login_data($get_id, 'login_email', $conn);

$get_name = get_data($get_id, 'user_fullName', $conn);

$get_gender = get_data($get_id, 'user_gender', $conn);

$get_contact = get_data($get_id, 'user_contact', $conn);

$get_dob = get_data($get_id, 'user_dob', $conn);

$get_date = get_data($get_id, 'user_registry_date', $conn);

$get_icon = getIcon($get_name);

$get_image = get_image_data($get_id,'image_url',$conn);

// session_destroy();
