<?php 
$id_animal = $_POST['id_animal'];
$title = $_POST['title'];
$date_st = $_POST['dates'];
$cost = $_POST['cost'];


$conn = new mysqli("localhost", "root", "root", "bestpets");
if($conn->connect_error){
    die("Помилка: " . $conn->connect_error);
}

$a = date('d.m.Y H:i:s');
$timestamp = strtotime($a);


$sql = "INSERT INTO `diagnostic`(`diagnosticID`, `title`, `date_start`, `id_animal`, `id_doctor`, `cost`) VALUES
 ('$timestamp','$title','$date_st','$id_animal', 1, '$cost')";

if($conn->query($sql)){
    echo 'Дані додані, повертайтесь на потрубні вам сторінку: <br><br>';
    echo "<a href='/html/home.html'>" .'<- Головна'. "</a><br><br>";
    echo "<a href='/html/owner.php'>" .'<- Власник'. "</a><br><br>";
    echo "<a href='/html/animal.php'>" .'<- Тварина'. "</a><br><br>";
} 
else{
    echo "Помилка: " . $conn->error;
}
$conn->close();
?>