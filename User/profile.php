<?php
require("../utils/profilepage.php");
$name = explode(" ", $get_name);

$fname = $name[0];
if (sizeof($name) > 2) {
    $lname = $name[2];
} else {
    $lname = $name[1];
}
$display = "../Upload/uploads/" . $get_image;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <title>Profile page</title>
</head>

<body>
    <div>
        <header class="w-full font-sans">
            <nav class="container mx-auto flex items-center justify-between flex-wrap py-3">
                <div class="flex items-center flex-no-shrink text-white mr-6">
                    <h1 class="text-black text-2xl p-2 align-middle font-sans relative pl-8">
                        <a href="../index.php" class="no-underline text-black">
                            <img class="w-7 h-7" src="../Images/Logo.jpg" alt="Church Logo">
                            Church Profile
                        </a>
                    </h1>
                </div>
                <div @click.away="open = false" class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="rounded flex flex-row items-center space-x-2 w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent hover:bg-gray-200 md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                        <span><?php echo $get_name  ?></span>
                        <img class="inline h-6 rounded-full" src="<?php if (!$get_image) {
                                                                        echo $get_icon;
                                                                    } else {
                                                                        echo $display;
                                                                    } ?>" alt="">
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                        <div class="py-2 bg-white text-blue-600 text-sm rounded-sm border border-main-color shadow-sm">
                            <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./settings.php">Settings</a>
                            <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./help.php">Help</a>
                            <div class="border-b"></div>
                            <a class="block px-4 py-2 mt-2 text-sm bg-white md:mt-0 focus:text-gray-900 hover:bg-indigo-100 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="./logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="border-b"></div>
        </header>

        <div class="container mx-auto my-5 p-5">
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full md:w-3/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="bg-white p-3 border-t-4 border-blue-600">
                        <div class="image  relative border border-gray-500">
                            <?php print(isset($_GET['post_err']) ? "<p style='color: red'>Sorry, there was an error uploading your file</p>" : '');   ?>
                            <?php print(isset($_GET['image_err']) ? "<p style='color: red'>Can't handle the image type selected, pick another image</p>" : '');   ?>

                            <img class="h-auto w-full mx-auto" src="<?php if (!$get_image) {
                                                                        echo $get_icon;
                                                                    } else {
                                                                        echo $display;
                                                                    } ?>" alt="">
                            <form id="form" action="../Upload/upload.php" enctype="multipart/form-data" method="POST">
                                <div id="chooseUser" class="cursor-pointer bg-gray-50 h-12 w-12 absolute -bottom-2 -right-2 rounded-full border border-gray-500 flex items-center justify-center">
                                    <i class="fa-solid fa-user"></i>
                                    <input hidden type="file" name="profilePic" id="profilePic">
                                    <?php
                                    session_start();
                                    $_SESSION["user_id"] = $get_id;
                                    ?>
                                </div>
                            </form>

                        </div>
                        <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">
                            <?php echo $get_name;  ?>
                        </h1>
                        <h3 class="text-gray-600 font-lg text-semibold leading-6">
                            <?php echo $get_membership; ?>
                        </h3>
                        <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit.
                            Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                        <ul class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                            <li class="flex items-center py-3">
                                <span>Status</span>
                                <span class="ml-auto"><span class="bg-blue-600 py-1 px-2 rounded text-white text-sm">Active</span></span>
                            </li>
                            <li class="flex items-center py-3">
                                <span>Member since</span>
                                <span class="ml-auto">
                                    <?php echo $get_date; ?>
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Right Side -->
                <div class="w-full md:w-9/12 mx-2 h-64">
                    <!-- About Section -->
                    <div class="bg-white p-3 shadow-sm rounded-sm">
                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                            <span clas="text-blue-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span class="tracking-wide">About</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid md:grid-cols-2 text-sm">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">First Name</div>
                                    <div class="px-4 py-2">
                                        <?php echo $fname; ?>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Last Name</div>
                                    <div class="px-4 py-2">
                                        <?php echo $lname; ?>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Gender</div>
                                    <div class="px-4 py-2">
                                        <?php echo $get_gender; ?>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Contact No.</div>
                                    <div class="px-4 py-2">
                                        <?php echo $get_contact; ?>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Email.</div>
                                    <div class="px-4 py-2">
                                        <a class="text-blue-800" href="mailto: <?php echo $get_email; ?>"> <?php echo $get_email; ?></a>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Birthday</div>
                                    <div class="px-4 py-2">
                                        <?php echo $get_dob; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- End of profile tab -->
                </div>
            </div>
        </div>
    </div>

    <script>
        const profilePic = document.querySelector("#profilePic")
        const chooseUser = document.querySelector("#chooseUser")
        const form = document.querySelector("#form")


        chooseUser.addEventListener("click", () => {
            profilePic.click()
        })

        profilePic.addEventListener("change", () => {
            console.log("It changed!: ", profilePic.value)
            form.submit()

        })
    </script>
</body>

</html>