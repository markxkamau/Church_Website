CREATE TABLE IF NOT EXISTS `login` (
    `login_id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `login_email` varchar(50) DEFAULT NULL,
    `login_username` varchar(50) DEFAULT NULL,
    `login_password` text,
    `login_rank` varchar(50) DEFAULT "ChurchMember"
);

CREATE TABLE IF NOT EXISTS `users` (
    `user_id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `user_fullName` varchar(50) DEFAULT NULL,
    `user_contact` text DEFAULT NULL,
    `user_gender` text DEFAULT NULL,
    `user_dob` date,
    `user_registry_date` date,
    `user_login_id` int(11) DEFAULT NULL,
    FOREIGN KEY (`user_login_id`) REFERENCES `login` (`login_id`)
);

CREATE TABLE IF NOT EXISTS `image`(
    image_id integer NOT NULL AUTO_INCREMENT,
    image_url text NOT NULL,
    image_upload_time timestamp NOT NULL,
    image_user_id integer NOT NULL,
    PRIMARY KEY (image_id),
    FOREIGN KEY (image_user_id) REFERENCES users (user_id)
);