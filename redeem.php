<?php


$code = $_POST["firstname"];
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "education";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    echo "failed";
} else {
    // echo 'working..................';
    $sql = "SELECT * FROM coming_soon WHERE Coupon_code = '$code'";

    $result = mysqli_query($conn, $sql);
    // echo "$result";
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user) {
        echo "okay";
        $result2 = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result2);
        echo "data: " . implode(", ", $row);
        echo "<script>window.open('index.html','_self')</script>";

    } else {
        echo '<script>alert("Wrong")</script>'; 
        echo "<script>window.open('index.html','_self')</script>";
    }
}
