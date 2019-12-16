<?php
$servername = "localhost";
$database = "h923416t_rememb";
$username = "h923416t_rememb";
$password = "24121999";
// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

$log = $_POST['login'];
$sc = $_POST['score'];
// Check connection
if (!$conn) 
{
     die("Connection failed: " . mysqli_connect_error());
}
$query = "INSERT INTO Games (ID_Player, Steps) VALUES ((SELECT ID FROM Players WHERE Login='$log'), '$sc')";
$res = mysqli_query($conn, $query);
echo "OK";
mysqli_close($conn);
?>
