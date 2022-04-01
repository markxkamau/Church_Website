<?php
require("../utils/profilepage.php");
$name = explode(" ", $get_name);
$fname = $name[0];
$lname = $name[1];

if (isset($_POST["submit"])) {

    $pass = $_POST["password1"];
    $confirm = $_POST["password2"];

    if ($pass != $confirm) {
        function_alert("Passwords do not match");
    } else {
        if (!password_strength($pass)) {
            function_alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');
        } else {
            $new_password = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "UPDATE `login` 
            SET `login_password`= '$new_password'
            WHERE `login_email` = '$get_email'";
            if ($conn->query($sql) === TRUE) {
                function_alert("Password Change Successful");
            } else {
                function_alert("Password Change Unsuccessful");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <title>Settings</title>
</head>

<body>
    <div>
        <nav class="container mx-auto flex items-center justify-between flex-wrap py-3">
            <div class="flex items-center flex-no-shrink text-white mr-6">
                <h1 class="text-black text-2xl p-2 align-middle font-sans relative pl-8">
                    <a href="../User/profile.php" class="no-underline text-black">
                        <img class="w-7 h-7" src="../Images/Logo.jpg" alt="Church Logo">
                        Profile Settings
                    </a>
                </h1>
            </div>
        </nav>
        <div class="border-b"></div>

        <div class="inputs w-full max-w-2xl p-6 mx-auto">
            <form class="mt-6 pt-4" method="POST">
                <div class='w-full md:w-full px-3 mb-6'>
                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2' for='grid-text-1'>email address</label>
                    <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='<?php echo $get_email ?>' readonly>
                </div>
                <div class='w-full md:w-full px-3 mb-6 '>
                    <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>new password</label>
                    <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='password1' name="password1" type='password' placeholder='Enter Password' required>
                    <br>
                    <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='password2' name="password2" type='password' placeholder='Confirm Password' required>
                    <br>
                    <button class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md " type="submit" name="submit" id="submit">change your password</button>
                </div>
            </form>
            <form class="mt-6 pt-4">
                <div class="personal w-full border-t border-gray-400 pt-4">
                    <h2 class="text-2xl text-gray-900">Personal info:</h2>
                    <div class="flex items-center justify-between mt-4">
                        <div class='w-full md:w-1/2 px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>first name</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text' placeholder="<?php echo $fname ?>" readonly>
                        </div>
                        <div class='w-full md:w-1/2 px-3 mb-6'>
                            <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>last name</label>
                            <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text' placeholder="<?php echo $lname ?>" readonly>
                        </div>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>user name</label>
                        <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner rounded-md py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' type='text' placeholder="<?php $login_user = strtolower(str_replace(' ', '', $get_name));
                                                                                                                                                                                                                                        echo $login_user ?>" readonly>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>pick your country</label>
                        <div class="flex-shrink w-full inline-block relative">
                            <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                <option>choose ...</option>
                                <option>USA</option>
                                <option>France</option>
                                <option>Spain</option>
                                <option>UK</option>
                            </select>
                            <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <label class='block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2'>fav language</label>
                        <div class="flex-shrink w-full inline-block relative">
                            <select class="block appearance-none text-gray-600 w-full bg-white border border-gray-400 shadow-inner px-4 py-2 pr-8 rounded">
                                <option>choose ...</option>
                                <option>English</option>
                                <option>France</option>
                                <option>Spanish</option>
                            </select>
                            <div class="pointer-events-none absolute top-0 mt-3  right-0 flex items-center px-2 text-gray-600">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button class="appearance-none bg-gray-200 text-gray-900 px-2 py-1 shadow-sm border border-gray-400 rounded-md mr-3" type="submit">save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>