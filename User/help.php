<?php
require("../utils/profilepage.php");
$name = explode(" ", $get_name);
$fname = $name[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.3.5/dist/alpine.min.js" defer></script>

    <title>Help</title>
</head>

<body>

    <nav class="container mx-auto flex items-center justify-between flex-wrap py-3">
        <div class="flex items-center flex-no-shrink text-white mr-6">
            <h1 class="text-black text-2xl p-2 align-middle font-sans relative pl-8">
                <a href="../User/profile.php" class="no-underline text-black">
                    <img class="w-7 h-7" src="../Images/Logo.jpg" alt="Church Logo">
                    Help Center
                </a>
            </h1>
        </div>
    </nav>
    <div class="border-b"></div>

    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        <div class="main-title my-8">
            <h1 class="font-bold text-2xl text-center">How can we help <?php echo $fname;?>?</h1>
        </div>

        <div x-data class="main-search mb-8 rounded-lg shadow-lg px-6 py-3 w-full flex items-center space-x-6 border border-gray-200 border-opacity-75">
            <button class=" focus:outline-none" @click="$refs.search.focus()">
                <svg class="w-6 h-6 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </button>
            <input x-ref="search" type="text" placeholder="Describe your issue" class="text-base w-full bg-transparent focus:outline-none">
        </div>

        <div class="main-question mb-8 flex flex-col divide-y text-gray-800 text-base">
            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Popular articles</h4>
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Fix problems & request removals</h4>
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Browse the web</h4>
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                </div>
            </div>

            <div class="item px-6 py-6" x-data="{isOpen : false}">
                <a href="#" class="flex items-center justify-between" @click.prevent="isOpen = true">
                    <h4 :class="{'text-blue-600 font-bold' : isOpen == true}">Search on your phone or tablet</h4>
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>
                <div x-show="isOpen" @click.away="isOpen = false" class="mt-3" :class="{'text-gray-600' : isOpen == true}">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat, ex. Expedita sunt enim, vel amet cumque nulla illum harum. Similique!
                </div>
            </div>
        </div>


</body>

</html>