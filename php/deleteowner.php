<?php 
$conn = new mysqli("localhost", "root", "root", "bestpets");
if($conn->connect_error){
    die("Помилка: " . $conn->connect_error);
}
$inn = $_POST['id_owner'];

$sql = "DELETE from `owners` WHERE (`id_owner` = '$inn')";

if($conn->query($sql)){
    echo 'Дані видаленні, повертайтесь на потрубні вам сторінку: <br><br>';
    echo "<a href='/html/home.html'>" .'<- Головна'. "</a><br><br>";
    echo "<a href='/html/owner.php'>" .'<- Власник'. "</a><br><br>";
    echo "<a href='/html/animal.php'>" .'<- Тварина'. "</a><br><br>";
} else{
    echo "Помилка: " . $conn->error;
}
$conn->close();
?>