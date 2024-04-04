<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "order";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
/*if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO contact(name,email,message) value('$name',$email,$message)";
if (mysqli_query($conn,$sql) === TRUE) {
  echo "<script>alert('Thank you');window.location.href='cont.php';</script>";
} else {
  echo "Error:" . $sql."<br>".mysqli_error($conn);
}}
mysqli_close($conn);
?>*/

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




