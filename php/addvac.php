<?php 
$id_animal = $_POST['id_animal'];
$title = $_POST['title'];
$date_start = $_POST['date_start'];
$end = $_POST['date_end'];

$conn = new mysqli("localhost", "root", "root", "bestpets");
if($conn->connect_error){
    die("Помилка: " . $conn->connect_error);
}

$a = date('d.m.Y H:i:s');
$timestamp = strtotime($a);

$sql = "INSERT INTO `vactination`(`id_vac`, `title`, `date_start`, `date_end`, `id_animal`) VALUES
 ('$timestamp','$title', '$date_start', '$end', '$id_animal')";

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