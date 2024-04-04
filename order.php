<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "order";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
$name=$_POST['name'];
$address=$_POST['Address'];
$phoneno=$_POST['number'];
$orderName=$_POST['forder'];
$count=$_POST['much'];

$sql="INSERT INTO ord(name,address,phoneno,orderName,count) value('$name','$address','$phoneno','$orderName','$count')";
if (mysqli_query($conn,$sql) === TRUE) {
  echo "<script>alert('Your Order successfull');window.location.href='resevesion.php';</script>";
} else {
  echo "Error:" . $sql."<br>".mysqli_error($conn);
}}
mysqli_close($conn);
?>

