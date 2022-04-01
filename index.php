<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <title>Home Page</title>
</head>

<body>
    <div>
        <!--  header -->
        <header class="w-full font-sans">
            <nav class="container mx-auto flex items-center justify-between flex-wrap py-3">
                <div class="flex items-center flex-no-shrink text-white mr-6">
                    <h1 class="text-black text-2xl p-2 align-middle font-sans relative pl-8">
                        <a href="index.php" class="no-underline text-black">
                            <img class="w-7 h-7" src="./Images/Logo.jpg" alt="Church Logo">
                            St. Marks Church Mukui Parish
                        </a>
                    </h1>
                </div>
                <div class="w-full block text-right flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="lg:flex-grow">

                        <a href="./Service/index.php" class="block mt-4 lg:inline-block lg:mt-0 text-grey-dark hover:text-grey-darker no-underline mr-6">
                            Service
                        </a>
                        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-grey-dark hover:text-grey-darker no-underline mr-6">
                            Community
                        </a>
                        <a href="./About/index.php" class="block mt-4 lg:inline-block lg:mt-0 text-grey-dark hover:text-grey-darker no-underline mr-6">
                            About Us
                        </a>
                        <a href="./Registry/login.php" class="block mt-4 lg:inline-block lg:mt-0 text-grey-dark hover:text-grey-darker no-underline mr-6">
                            Login
                        </a>
                    </div>
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search">
                        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                            <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </button>
                    </div>

                </div>
            </nav>
        </header>
        <!-- main -->
        <main class="w-full">
            <div class="border-t-2 border-grey-lighter">
                <div class="container mx-auto py-6">
                    <div class="flex mt-6">
                        <div class="w-1/2 bg-grey">
                            <div class="w-96 mx-auto" style="scroll-snap-type: x mandatory;">
                                <img src="https://images.unsplash.com/photo-1628788835388-415ee2fa9576?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=384&q=80" alt="Church's Image">
                            </div>
                        </div>
                        <div class="w-1/2 font-serif">
                            <h1 class="text-5xl font-black-darker font-black">Let Us Worship The lord</h1>
                            <p class="text-grey-darker py-4 text-lg leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium consequatur cumque ea error esse, est id illo nemo nostrum obcaecati odio pariatur perferendis porro quo quos ut velit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t-2 border-grey-lighter bg-grey-lighter">
                <div class="container mx-auto py-6 text-center">
                    <div class="mb-6">
                        <h2 class="font-black-darker font-serif text-4xl pt-6">You're in good company</h2>
                        <p class="text-grey-darker mb-2 font-sans p-4">Millions of people around the world have already accepted the lord into their lives accepting the company around them and whatever they bring.<br>
                            Let us praise and worship the lord together as a family </p>
                        <button class="py-4 px-8 mt-2 text-sm font-black border border-purple-dark hover:border-purple-darkest text-purple-darker bg-white uppercase rounded font-mono"><a href="https://duckduckgo.com" target="_blank" rel="noopener noreferrer"> discover why</a></button>
                    </div>
                    <div class="container mx-auto py-6 border-t-2">
                        <h2 class="font-black-darker font-serif text-3xl pt-6">St. Marks Church Mukui Church Leaders</h2>
                        <!-- <hr> -->
                        <div class="flex mt-6 ">
                            <div class="w-1/2 bg-grey ">
                                <h3 class="w-96 font-black-darker font-black ">Bishop</h3>
                                <div class="w-96 mx-auto">
                                    <img class="h-32 w-32 bg-white p-2 rounded-full " src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg" alt="Bishop's Photo" />
                                </div>
                            </div>
                            <div class="w-1/2 font-serif">
                                <p class="text-grey-darker py-4 text-lg leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium consequatur cumque ea error esse, est id illo nemo nostrum obcaecati odio pariatur perferendis porro quo quos ut velit.</p>
                            </div>
                        </div>
                        <div class="flex mt-6">
                            <div class="w-1/2 font-serif">
                                <p class="text-grey-darker py-4 text-lg leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium consequatur cumque ea error esse, est id illo nemo nostrum obcaecati odio pariatur perferendis porro quo quos ut velit.</p>

                            </div>
                            <div class="w-1/2 bg-grey">
                                <h3 class="w-96 font-black-darker font-black">Vicar</h3>
                                <div class="w-96 mx-auto">
                                    <img class="h-32 w-32 bg-white p-2 rounded-full " src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg" alt="Vicar's Photo" />
                                </div>
                            </div>

                        </div>
                        <div class="flex mt-6">
                            <div class="w-1/2 bg-grey">
                                <h3 class="w-96 font-black-darker font-black">People's Rep</h3>
                                <div class="w-96 mx-auto">
                                    <img class="h-32 w-32 bg-white p-2 rounded-full " src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg" alt="People's Rep Photo" />
                                </div>
                            </div>
                            <div class="w-1/2 font-serif">
                                <p class="text-grey-darker py-4 text-lg leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus accusantium consequatur cumque ea error esse, est id illo nemo nostrum obcaecati odio pariatur perferendis porro quo quos ut velit.</p>
                            </div>
                        </div>

                    </div>

                    <div class="flex pt-6 font-serif text-grey-darker">
                        <div class="w-1/3 p-6 border-r-2 border-grey-light">
                            <h1 class="text-2xl mt-6 mb-6">Church Image</h1>
                        </div>
                        <div class="w-1/3 p-6 border-r-2 border-grey-light">
                            <h1 class="text-2xl mt-6 mb-6">Church Image</h1>
                        </div>
                        <div class="w-1/3 p-6">
                            <h1 class="text-2xl mt-6 mb-6">Church Image</h1>
                        </div>
                    </div>
                    <div class="flex border-t-2 font-serif border-grey-light text-grey-darker text-grey-darker">
                        <div class="w-1/3 p-6 border-r-2 border-grey-light">
                            <h1 class="text-2xl mt-6 mb-6">Church Image</h1>
                        </div>
                        <div class="w-1/3 p-6 border-r-2 border-grey-light">
                            <h1 class="text-2xl mt-6 mb-6">Church Image</h1>
                        </div>
                        <div class="w-1/3 p-6">
                            <h1 class="text-2xl mt-6 mb-6">Church Image</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white border-t-2 border-grey-lighter">
                <div class="container mx-auto py-6 my-6">
                    <div class="flex">
                        <div class="w-1/4">
                            <a href="./index.php">
                                <img class="w-12 h-12" src="./Images/Logo.jpg" alt="Church Logo">
                            </a>
                        </div>

                        <div class="flex-grow">
                            <div class="flex font-sans text-xs pl-6">
                                <div class="w-1/4">
                                    <h4 class="uppercase py-4 text-grey-darker">Mukui Ministry</h4>
                                    <ul class="list-reset text-grey-dark">
                                        <li class="py-2">About Us</li>
                                        <li class="py-2">Press</li>
                                    </ul>
                                </div>

                                <div class="w-1/4">
                                    <h4 class="uppercase py-4 text-grey-darker">resources</h4>
                                    <ul class="list-reset text-grey-dark">
                                        <li class="py-2">Events</li>
                                        <li class="py-2">Church Tents</li>
                                        <li class="py-2">Church Seats</li>
                                        <li class="py-2">Church Public Address</li>
                                    </ul>
                                </div>
                                <div class="w-1/4">
                                    <h4 class="uppercase py-4 text-grey-darker">extras</h4>
                                    <ul class="list-reset font-sans text-grey-dark">
                                        <li class="py-2">Help Center</li>
                                        <li class="py-2">Church Shop</li>
                                        <li class="py-2">Church Fund</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- footer -->
        <footer class="w-full border-t-2 border-grey-lighter bg-grey-lighter py-6">
            <div class="container mx-auto">
                <div class="flex">
                    <div class="w-1/2 font-sans text-grey-darkest font-black text-sm">
                        <ul class="flex flex-row list-reset">
                            <li class="p-2">Status</li>
                            <li class="p-2">Privacy & Terms</li>
                            <li class="p-2">Contact Us</li>
                        </ul>
                    </div>
                    <div class="w-1/2">
                        <ul class="flex flex-row-reverse list-reset">
                            <li class="p-2"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 32 32" width="20" height="20" aria-label="YouTube" class="c-nav--footer__svgicon svg-replaced" shape-rendering="geometricPrecision">
                                    <path d="M31.67 9.18s-.312-2.354-1.27-3.39c-1.218-1.358-2.58-1.366-3.206-1.443C22.717 4 16.002 4 16.002 4h-.015s-6.715 0-11.19.347c-.626.077-1.988.085-3.206 1.443C.635 6.826.32 9.18.32 9.18S0 11.94 0 14.7v2.59c0 2.762.32 5.522.32 5.522s.312 2.352 1.27 3.386c1.22 1.358 2.816 1.317 3.528 1.46 2.56.26 10.877.342 10.877.342s6.722-.012 11.2-.355c.624-.08 1.987-.088 3.204-1.446.956-1.036 1.27-3.388 1.27-3.388s.32-2.76.32-5.523V14.7c0-2.76-.32-5.522-.32-5.522z"></path>
                                    <path fill="#FFF" d="M12 10v12l10-6"></path>
                                </svg></li>
                            <li class="p-2"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="126.445 2.281 589 589" aria-label="Facebook" class="c-nav--footer__svgicon svg-replaced" shape-rendering="geometricPrecision">
                                    <path d="M516.704 92.677h-65.24c-38.714 0-81.776 16.283-81.776 72.402.19 19.553 0 38.28 0 59.356H324.9v71.27h46.174v205.178h84.847v-206.53h56.003l5.067-70.118h-62.53s.14-31.19 0-40.25c0-22.176 23.075-20.906 24.463-20.906 10.98 0 32.332.032 37.813 0V92.677h-.032z"></path>
                                </svg></li>
                            <li class="p-2"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 32 32" width="20" height="20" aria-label="Twitter" class="c-nav--footer__svgicon svg-replaced" shape-rendering="geometricPrecision">
                                    <path d="M31.993 6.077c-1.177.523-2.44.876-3.77 1.033 1.355-.812 2.396-2.098 2.887-3.63-1.27.75-2.673 1.3-4.168 1.592C25.744 3.797 24.038 3 22.15 3c-3.626 0-6.563 2.938-6.563 6.563 0 .514.057 1.016.17 1.496C10.3 10.783 5.464 8.17 2.227 4.2c-.565.97-.89 2.098-.89 3.3 0 2.28 1.16 4.287 2.92 5.465-1.076-.035-2.088-.33-2.973-.82v.08c0 3.182 2.26 5.835 5.264 6.438-.55.15-1.13.23-1.73.23-.423 0-.833-.04-1.233-.117.834 2.606 3.26 4.504 6.13 4.558-2.245 1.76-5.075 2.81-8.15 2.81-.53 0-1.053-.03-1.566-.09C2.905 27.914 6.355 29 10.062 29c12.072 0 18.675-10 18.675-18.675 0-.284-.008-.568-.02-.85 1.283-.925 2.395-2.08 3.276-3.398z"></path>
                                </svg></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>