<?php
$id = $_POST['id'];

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta charset='utf-8'>";
echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'>";
echo "<title>Page Title</title>";
echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
echo "<link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'>";
echo "<link rel='stylesheet' type='text/css' media='screen' href='/css/animal.css'>";
echo "</head>";
echo "<body style='max-width: 100%;'>";
echo "<header>";
echo "   <div>";

$conn = mysqli_connect("localhost", "root", "root", "bestpets");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT `a_name` from `animals` where `id_animal` = $id";

if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result); 

    foreach($result as $row){
        echo "<h3> Тварина: </3> " . $row["a_name"]. "<h3> Номер: </3> " . $id;
    }

    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);

echo "</div>";

echo "<legend>";
echo " <div class='container'>";
echo "  <form action='http://vet/php/addanimal.php' method='post'>  ";
    echo "  <input type='text'>";
    echo "  <input type='date'>";
    echo "  <select name='cost' id='cost'>";

    $conn = mysqli_connect("localhost", "root", "root", "bestpets");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM `doctors`";
    if($result = mysqli_query($conn, $sql)){
         
        $rowsCount = mysqli_num_rows($result); // количество полученных строк
    
        foreach($result as $row){
            echo "<option>". $row["fullname"] ."</option>";
        }
    
        mysqli_free_result($result);
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);

    echo " </select>";
    echo " <input type='text'>";
    echo " <button id='regis-btn'> Додати</button>";
echo "  </form>";
echo " </div>";
echo "</legend>";

echo "</header>";
echo "</body>";
echo "</html>";
