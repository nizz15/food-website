<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "order";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Message sent successfully..sThank you');window.location.href='contact.php';</script>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>




