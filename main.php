<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
//fwefwefwefwefwefwefwefwef;
try {
    $user = "root";
    $password = "";
    $host = "localhost";
    $db = "user";
    $pdo = new PDO("mysql:host=$host;dbname=$db;" , $user , $password);
} catch(PDOException $e) {
    echo "Ошибка подключения с базой данных";
}
$maj = "SELECT * FROM orders WHERE 1";
$output = $pdo->query($maj);
echo '<table style="border: 1px solid black; padding: 10px; margin-left: 30px;">';
foreach($output as $row){
    echo '<tr style="border: 2px solid black; padding: 10px;" >';
    echo '<td style="border: 2px solid black; padding: 10px;">'.$row["NameBook"]."</td>";
    echo '<td style="border: 2px solid black; padding: 10px;">'.$row["AuthorBook"]."</td>";
    echo '<td style="border: 2px solid black; padding: 10px;">'.$row["DateOrder"]."</td>";
    echo '<td style="border: 2px solid black; padding: 10px;">'.$row["BookIzdan"]."</td>";
    echo "</tr>";
}
echo "</table>";
?>