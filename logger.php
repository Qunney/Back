<?php
$servername = "localhost";
$database = "h923416t_rememb";
$username = "h923416t_rememb";
$password = "24121999";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
$log = $_POST['login'];
$pas = $_POST['pass'];
// Check connection
if (!$conn) 
{
     die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$sql = ("INSERT INTO Players (Login, Password) VALUES ('$log', '$pas')");

if (mysqli_query($conn, $sql)) 
{
      echo "Вы зарегистрированы! Можете войти в свой аккаунт :)";
} 
else 
{
      echo "Такой пользователь уже существует!";
}
mysqli_close($conn);
?>
