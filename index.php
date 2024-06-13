
<?php
$name = $_POST["fname"];
$password1 = $_POST["password"];
$email1 = $_POST["email"];


$conn = mysqli_connect("localhost", "root", "", "login") or die("Connection Failed");

$sql = "INSERT INTO   dbl(fname , password ,email) VALUES('{$name}','{$password1}','{$email1}') ";
$result = mysqli_query($conn, $sql) or die("Ouery Failed ");

mysqli_close($conn);


?>




<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style1.css">
<script src="style1.js"></script>

<body>
    <div>
        <video src="welcomevideo.mp4" autoplay loop muted  width="500px " height="500px"></video>
    </div>
</body>

</html>