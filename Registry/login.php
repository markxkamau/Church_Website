<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <title>Login Page</title>

</head>

<body>
    <nav class="container mx-auto flex items-center justify-between flex-wrap py-3">
        <div class="flex items-center flex-no-shrink text-white mr-6">
            <h1 class="text-black text-2xl p-2 align-middle font-sans relative pl-8">
                <a href="../index.php" class="no-underline text-black">
                    <img class="w-7 h-7" src="../Images/Logo.jpg" alt="Church Logo">
                    Profile Login
                </a>
            </h1>
        </div>
    </nav>
    <div class="border-b"></div>

    <div class="pt-5 flex flex-col items-center justify-center">
        <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md bg-gray-100">
            <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">Login To Your Account</div>

            <div class="mt-10 ">
                <form action="../utils/loginpage.php" method="POST">
                    <?php print(isset($_GET['pass_err']) ? "<p style='color: red'>Invalid Details</p>" : '');   ?>
                    <div class="flex flex-col mb-6">
                        <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">E-Mail Address:</label>
                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                </svg>
                            </div>

                            <input id="email" type="email" name="email" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="E-Mail Address" required />
                        </div>
                    </div>
                    <div class="flex flex-col mb-6">
                        <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Password:</label>
                        <div class="relative">
                            <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <span>
                                    <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </span>
                            </div>

                            <input id="password" type="password" name="password" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Password" required />
                        </div>
                    </div>

                    <div class="flex items-center mb-6 -mt-4">
                        <div class="flex ml-auto">
                            <a href="../Registry/passwd.php" class="inline-flex items-center font-bold text-blue-500 hover:text-blue-700 text-xs text-center">Forgot Your Password?</a>
                        </div>
                    </div>

                    <div class="flex w-full">
                        <button name="submit" type="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-600 hover:bg-blue-700 rounded py-2 w-full transition duration-150 ease-in">
                            <span class="mr-2 uppercase">Login</span>
                            <span>
                                <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="flex justify-center items-center mt-6">
                <a href="./register.php" class="inline-flex items-center font-bold text-blue-500 hover:text-blue-700 text-xs text-center">
                    <span class="ml-2">You don't have an account?</span>
                </a>
            </div>
        </div>
    </div>

</body>

</html>