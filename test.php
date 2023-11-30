<?php
if (isset($_POST['submit'])) {
    $name = $_POST['firstname'];
    $phone = $_POST['number'];
    $email = $_POST['email'];
    $adrs = $_POST['address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];


    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "education";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    $Insert = "INSERT INTO `coming_soon`(`Email`, `First Name`,  `Complate_Address`, `country`,
                                                     `State`, `city`, `zip_code`,  `phone Number`)
                     VALUES ('$email','$name','$adrs','$country','$state','$city',' $zip','$phone')";
    // INSERT INTO `coming_soon`(`Email`, `First Name`, `last Name`, `phone Number`)
    //  VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
    $res = mysqli_query($conn, $Insert);

    if ($res) {
        echo "<script>window.open('index.html','_self')</script>";
        echo '<script>alert("Thank You!!!")</script>'; 
    } else {
        echo "Failed";
    }
} else {
    echo "All field are required1111111111111111111.";
    die();
}
