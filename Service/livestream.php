<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <title>Church Stream</title>
</head>

<body>
    <header class="w-full font-sans">
        <nav class="container mx-auto flex items-center justify-between flex-wrap py-3">
            <div class="flex items-center flex-no-shrink text-white mr-6">
                <h1 class="text-black text-2xl p-2 align-middle font-sans relative pl-8">
                    <a href="index.php" class="no-underline text-black">
                        <img class="w-7 h-7" src="../Images/Logo.jpg" alt="Church Logo">
                        St. Marks Church Mukui <?php //English || Kikuyu || School
                                                ?>Live Stream
                    </a>
                </h1>
            </div>
        </nav>
    </header>
    <!-- component -->
    <div class="border-t-2 border-grey-lighter">
        <h1 class="text-3xl md:text-5xl text-yellow-500 text-center mt-20 leading-relaxed md:leading-snug">Youtube Live Stream </h1>
        <h2 class="text-center">You don't have to go to church. Worship the lord at home together with your fellow church members<br>
            <p class="text-blue-500">#containcovid19<br>#preventspreadofcorona</p>
        </h2>

        <div class="flex w-full h-screen justify-center pt-12 pb-36">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/rlKJStemM2c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</body>

</html>