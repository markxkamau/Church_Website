<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>
    <title>Registry Page</title>
</head>

<body>
    <nav class="container mx-auto flex items-center justify-between flex-wrap py-3">
        <div class="flex items-center flex-no-shrink text-white mr-6">
            <h1 class="text-black text-2xl p-2 align-middle font-sans relative pl-8">
                <a href="../index.php" class="no-underline text-black">
                    <img class="w-7 h-7" src="../Images/Logo.jpg" alt="Church Logo">
                    Registration
                </a>
            </h1>
        </div>
    </nav>
    <div class="border-b"></div>

    <div class="min-h-screen flex flex-col items-center justify-center">
        <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-55 max-w-xl bg-gray-100">
            <h3 class="font-medium self-center text-xl sm:text-3xl text-gray-800">Create an Account</h3>
            <form class="px-8 pt-6 pb-8 mb-4 bg-gray-100 rounded" action="../utils/registerpage.php" method="POST">
                <div class="mb-4 md:flex md:justify-between ">
                    <div class="mb-4 md:mr-2 md:mb-0 ">
                        <label class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600" for="firstName">
                            First Name:
                        </label>
                        <input class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" name="firstName" type="text" placeholder="First Name" required >
                    </div>
                    <div class="md:ml-2">
                        <label class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600" for="lastName">
                            Last Name:
                        </label>
                        <input class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" name="lastName" type="text" placeholder="Last Name" required />
                    </div>
                </div>
                <div class="mb-4 md:flex md:justify-between">
                    <div class="mb-4 md:mr-2 md:mb-0">
                        <label class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600" for="dateofbirth">
                            DOB:
                        </label>
                        <input class="text-gray-600 text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" name="dob" type="date" placeholder="Date Of Birth" required />
                    </div>
                    <div class="md:ml-2">
                        <label class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600" for="contact">
                            Contact:
                        </label>

                        <input class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" name="contact" type="tel" placeholder="Phone Number" required />
                    </div>
                </div>
                <div class="mb-4">
                    <label class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600" for="email">
                        Email:
                    </label>
                    <input class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" name="email" type="email" placeholder="Email Address" required />
                    <?php print(isset($_GET['email_err']) ? "<p style='color: red'>Email already exists!</p>" : '');   ?>
                </div>
                <div class="mb-4 md:flex md:justify-between">
                    <div class="mb-4 md:mr-2 md:mb-0">
                        <label class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600" for="password">
                            Password:
                        </label>
                        <input class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" name="password" type="password" placeholder="Password" required />

                    </div>
                    <div class="md:ml-2">
                        <label class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600" for="c_password">
                            Confirm Password:
                        </label>
                        <input class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" name="c_password" type="password" placeholder="Password" required />
                        <?php print(isset($_GET['pass_err']) ? "<p style='color: red'>Passwords do not Match!</p>" : '');   ?>
                    </div>
                </div>
                <div class="mb-6 md:flex md:justify-between text-center overflow-hidden w-full">
                    <div class="title py-3 my-auto px-5 bg-blue-600 text-white text-sm font-semibold rounded-lg ">Rank</div>
                    <label class="flex radio p-2 cursor-pointer">
                        <input class="my-auto transform scale-125" type="radio" name="rank" value="Leader" />
                        <div class="title px-2 text-gray-600">Leader</div>
                    </label>

                    <label class="flex radio p-2 cursor-pointer">
                        <input class="my-auto transform scale-125" type="radio" name="rank" value="Member">
                        <div class="title px-2 text-gray-600">Member</div>
                    </label>
                </div>
                <div class="mb-6 md:flex md:justify-between text-center overflow-hidden w-full">
                    <div class="title py-3 my-auto px-5 bg-blue-600 text-white text-sm font-semibold rounded-lg ">Gender</div>
                    <label class="flex radio p-2 cursor-pointer">
                        <input class="my-auto transform scale-125" type="radio" name="gender" value="Male" />
                        <div class="title px-2 text-gray-600">Male</div>
                    </label>

                    <label class="flex radio p-2 cursor-pointer">
                        <input class="my-auto transform scale-125" type="radio" name="gender" value="Female">

                        <div class="title px-2 text-gray-600">Female</div>
                    </label>
                </div>
                <div class="mb-6 text-center">
                    <button class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-600 hover:bg-blue-700 rounded py-2 w-full transition duration-150 ease-in" type="submit" name="submit">
                        <span class="mr-2 uppercase">Register</span>
                        <span>
                            <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="text-center">
                    <a class="inline-flex items-center font-bold text-blue-500 hover:text-blue-700 text-xs text-center" href="./login.php">
                        Already have an account? Login!
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>