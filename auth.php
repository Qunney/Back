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
session_start();
$query = "SELECT Login FROM Players WHERE Login='$log' AND Password='$pas'";
if ($res = mysqli_query($conn, $query)) 
{
    if (mysqli_num_rows($res)>0)
    {
      $_SESSION['name'] = $log;
      echo $_SESSION['name'];
    } 
    else 
    {
    echo "Пользователь не найден :(";
    }
}
mysqli_close($conn);
?>
