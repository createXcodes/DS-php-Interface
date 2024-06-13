
<?php
$name = $_POST["namer "];           // <--- Value Of Your HTML DATA
$password = $_POST["passwordr"];
$email = $_POST["emailr"];
$number = $_POST["number"];
$otp = $_POST["otp"];
$age = $_POST["age1"];

$conn = mysqli_connect("localhost", "root", "", "signup") or die("Connection Failed"); // <--- MY SQL DATA 

$sql = "INSERT INTO  dbs(namer , passwordr ,emailr, number , age1) VALUES('{$name}','{$password}','{$email}','{$number}','{$age}') ";
$result = mysqli_query($conn, $sql) or die("Ouery Failed "); // <-- INSERT FUNCTION IN XAMMAP SERVER 

mysqli_close($conn);


?>


























