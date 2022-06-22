<?php 
$id_animal = $_POST['id_animal'];

$conn = new mysqli("localhost", "root", "root", "bestpets");
if($conn->connect_error){
    die("Помилка: " . $conn->connect_error);
}

$a = date('d.m.Y H:i:s');
$timestamp = strtotime($a);


$sql = "DELETE FROM `diagnostic` where (`id_animal` = '$id_animal')";
$sql2 = "DELETE FROM `vactination` where (`id_animal` = '$id_animal')";
$sql3 = "DELETE FROM `animals` where (`id_animal` = '$id_animal')";

if($conn->query($sql)){
    if($conn->query($sql2)){
        if($conn->query($sql3)){
            echo 'Дані видаленні, повертайтесь на потрубні вам сторінку: <br><br>';
            echo "<a href='/html/home.html'>" .'<- Головна'. "</a><br><br>";
            echo "<a href='/html/owner.php'>" .'<- Власник'. "</a><br><br>";
            echo "<a href='/html/animal.php'>" .'<- Тварина'. "</a><br><br>";
        }
    }
} 
else{
    echo "Помилка: " . $conn->error;
}
$conn->close();
?>