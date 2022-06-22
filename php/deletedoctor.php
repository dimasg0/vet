<?php 
$id_doctor = $_POST['id'];

$conn = new mysqli("localhost", "root", "root", "bestpets");
if($conn->connect_error){
    die("Помилка: " . $conn->connect_error);
}

$a = date('d.m.Y H:i:s');
$timestamp = strtotime($a);


$sql = "DELETE FROM `doctors` where (`id_doctor` = '$id_doctor')";

if($conn->query($sql)){
    echo 'Дані видаленні, повертайтесь на потрубні вам сторінку: <br><br>';
    echo "<a href='/html/home.html'>" .'<- Головна'. "</a><br><br>";
    echo "<a href='/html/owner.php'>" .'<- Власник'. "</a><br><br>";
    echo "<a href='/html/animal.php'>" .'<- Трарина'. "</a><br><br>";
} 
else{
    echo "Помилка: " . $conn->error;
}
$conn->close();
?>