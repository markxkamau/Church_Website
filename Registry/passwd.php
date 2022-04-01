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
    <div class="min-h-screen flex flex-col items-center justify-center ">
        <div class="flex flex-col bg-white shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-3xl w-50 max-w-md bg-gray-100">
            <div class="text-center m-6">
                <h1 class="text-3xl font-semibold text-gray-700">Forgot your password?</h1>
                <p class="text-gray-500">Just enter your email address below and we'll send you a link to reset your password!</p>
            </div>
            <div class="mt-10">
                <form class="px-8 pt-6 pb-8 mb-4 bg-gray-100 rounded " action="../utils/passreset.php" method="POST">
                    <?php print(isset($_GET['email_err']) ? "<p style='color: red'>Email doesnot exist</p>" : '');   ?>
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
                    <div class="mb-6">
                        <button name="submit" type="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-600 hover:bg-blue-700 rounded py-2 w-full transition duration-150 ease-in">
                            <span class="mr-2 uppercase">Send reset link</span>
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