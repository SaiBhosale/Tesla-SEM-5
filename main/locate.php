<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tesla - Enquire Now</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/locate.css"/>
</head>

<body>
<!--Navbar-->
<header id="navbar">
    <?php
    include '../inc/exp-nav.php';
    ?>
</header>

<!--Main Section With Video Playback & Gallery-->
<section id="form" class="text-gray-400 bg-gray-900 body-font">
    <div id="form" class="absolute inset-0 bg-gray-900 static">
        <iframe title="map" width="100%" height="100%" style="filter: grayscale(0) contrast(1.2) opacity(0.5);" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%pune+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">

    </div>
</section>

<!--Footer-->
<footer id="footer">
    <?php
    include '../inc/footer.php'
    ?>
</footer>
</body>
</html>