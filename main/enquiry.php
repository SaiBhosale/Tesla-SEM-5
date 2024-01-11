<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tesla - Enquire Now</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/form.css"/>
</head>

<body>
<!--Navbar-->
<header id="navbar">
    <?php
    include '../inc/exp-nav.php';
    ?>
</header>

<!--Main Section With Video Playback & Gallery-->
<section id="form" class="text-gray-400 bg-gray-900 body-font static">
    <form method="POST" action="./enquiry.php" >
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-1/3 md:w-1/2 bg-gray-900 shadow-md rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
            <h2 class="text-white text-lg mb-1 font-medium title-font">Send Enquiry</h2>
            <p class="leading-relaxed mb-5">Enter You Details, We'll get back to you soon!!</p>
            <div class="relative mb-4">
                <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
                <input required type="text" id="name" name="name" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                <input required type="email" id="email" name="email" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <label for="model"><p>Choose a car:</p></label>
            <select required name="model" id="model" class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg"          >
                <option value="Model X">Model X</option>
                <option value="Model Y">Model Y</option>
                <option value="Model 3">Model 3</option>
                <option value="Model S Plaid">Model S Plaid</option>
                <option value="Roadster">Roadster</option>
                <option value="Cybertruck">Cybertruck</option>
            </select>
            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-400">Message</label>
                <textarea required id="message" name="message" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-red-500 focus:ring-2 focus:ring-red-900 h-40 text-base outline-none text-gray-100 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button onclick="emailSend(); reset(); return false;" type="submit" name="submit" value="submit" class="text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">Submit</button>
        </div>
    </div>
    </form>

    <script src="https://smtpjs.com/v3/smtp.js">
    </script>
    <script src="./email.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</section>

<!--Footer-->
<footer id="footer">
    <?php
    include '../inc/footer.php'
    ?>
</footer>
</body>
</html>

<!--Database sending to form-->
<?php
error_reporting(0);
$name = $_POST['name'];
$email = $_POST['email'];
$model = $_POST['model'];
$message = $_POST['message'];

//Database Connection

$conn = new mysqli('localhost','root','','adms_db');
if($conn->connect_error) {
    die('Connection Failed :' . $conn->connect_error);
}else{
        $stmt = $conn->prepare("insert into enquiry_list(name, email, model, message)values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$name, $email, $model, $message);
        $stmt->execute();
//        echo '<script>alert("Enquiry Sent Successfully, We will contact you shortly!")</script>';
        $stmt->close();
        $conn->close();
}
?>


