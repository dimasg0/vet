<?php 
$id = $_POST['inn'];
$name = $_POST['fullname'];
$mobile = $_POST['phone'];
$position = $_POST['position'];
$category = $_POST['category'];

$conn = new mysqli("localhost", "root", "root", "bestpets");
if($conn->connect_error){
    die("Помилка: " . $conn->connect_error);
}

$sql = "INSERT INTO `doctors`(`id_doctor`, `fullname`, `phone`, `position`, `category`) VALUES
 ('$id','$name','$mobile','$position','$category')";

if($conn->query($sql)){
    echo 'Дані додані, повертайтесь на потрубні вам сторінку: <br><br>';
    echo "<a href='/html/home.html'>" .'<- Головна'. "</a><br><br>";
    echo "<a href='/html/owner.php'>" .'<- Власник'. "</a><br><br>";
    echo "<a href='/html/animal.php'>" .'<- Трарина'. "</a><br><br>";
} 
else{
    echo "Помилка: " . $conn->error;
}
$conn->close();
?>