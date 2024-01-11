<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tesla - Made In Future</title>
    <link rel="stylesheet" href="../css/video.css">
    <link rel="website logo" href="../renders/logo.png">
   <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/homepage.css">
</head>
<body>

<!--Home Navbar-->
<div id="navbar">
    <?php
    include '../inc/home-nav.php'
    ?>
</div>

<div class="explore">
    <h1>INSPIRED BY FUTURE</h1>
    <a href="./explore.php">Explore Now</a>
</div>


<!--Video & Gallery-->
<section>
    <div id="video">

        <video src="../renders/intro.mp4" autoplay muted loop></video>
    </div>

    <div id=gallery class="gallery">
        <section class="text-gray-400 bg-gray-900 body-font">
            <div class="container px-5 py-24 mx-auto flex flex-wrap">
                <div class="flex w-full mb-20 flex-wrap">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font text-white lg:w-1/3 lg:mb-0 mb-4" style="text-decoration: #e31717">TESLA - MADE IN FUTURE</h1>
                    <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">The Future of Driving is Electric. Experience exhilarating instant torque and smooth, silent operation in our award-winning electric vehicles. Tesla cars offer best-in-class range, cutting-edge autonomous driving features, and free over-the-air software updates that continuously improve your driving experience.</p>
                </div>
                <div class="flex flex-wrap md:-m-2 -m-1">
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://source.unsplash.com/501x301/?Tesla">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://source.unsplash.com/502x302/?Tesla">
                        </div>
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://source.unsplash.com/503x303/?Tesla">
                        </div>
                    </div>
                    <div class="flex flex-wrap w-1/2">
                        <div class="md:p-2 p-1 w-full">
                            <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://source.unsplash.com/504x304/?Tesla">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://source.unsplash.com/505x305/?Tesla">
                        </div>
                        <div class="md:p-2 p-1 w-1/2">
                            <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://source.unsplash.com/506x306/?Tesla">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>


<footer id="footer">
    <?php
    include '../inc/footer.php'
    ?>
</footer>

</body>
</html>