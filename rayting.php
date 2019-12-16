<?php
$servername = "localhost";
$database = "h923416t_rememb";
$username = "h923416t_rememb";
$password = "24121999";
// Create connection
//session_start();
$conn = mysqli_connect($servername, $username, $password, $database);

$log = $_POST['login'];
// Check connection

if (!$conn) 
{
     die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT Games.Steps,Players.Login FROM Players, Games WHERE Games.ID_Player=Players.ID ORDER BY Steps ASC LIMIT 10";
//$query = "INSERT INTO Games (ID_Player, Steps) VALUES ((SELECT ID FROM Players WHERE Login='$log'), '$sc')";
$res = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));;
if($res)
{
    $rows = mysqli_num_rows($res); // количество полученных строк
     
    echo "Ходы      Игрок\n";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($res);
        //echo "<tr>";
             
            for ($j = 0 ; $j < 3 ; ++$j) 
            {
                echo "$row[$j]       ";
                 
            }
        echo "\n";
    }
    
     
    // очищаем результат
    mysqli_free_result($result);
}
//echo "$res";
mysqli_close($conn);
?>
