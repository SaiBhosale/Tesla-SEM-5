<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tesla - Model S Plaid</title>
    <link rel="stylesheet" href="../css/video.css"
</head>

<body>
<!--Navbar-->
<header id="navbar">
    <?php
    include '../inc/exp-nav.php';
    ?>
</header>

<!--Main Section With Video Playback & Gallery-->
<section>
    <div id="video">
        <video autoplay muted loop src="../renders/models.mp4"></video>
    </div>

    <div id="gallery">
        <?php
        include '../inc/gallery.php';
        ?>
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
