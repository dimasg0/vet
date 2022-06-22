<?php 
$name = $_POST['fullname'];
$mobile = $_POST['phone'];
$date_visit = $_POST['date'];
$time_visit = $_POST['time'];


$conn = new mysqli("localhost", "root", "root", "bestpets");
if($conn->connect_error){
    die("Помилка: " . $conn->connect_error);
}

$a = date('d.m.Y H:i:s');
$timestamp = strtotime($a);


$sql = "INSERT INTO `reception`(`id`, `fullname`, `phone`, `date_visit`, `time_visit`) VALUES
 ('$timestamp','$name','$mobile','$date_visit','$time_visit')";

if($conn->query($sql)){
    echo 'Дані додані, повертайтесь на потрубні вам сторінку: <br><br>';
    echo "<a href='/html/home.html'>" .'<- Головна'. "</a><br><br>";
    echo "<a href='/html/owner.php'>" .'<- Власник'. "</a><br><br>";
    echo "<a href='/html/animal.php'>" .'<- Трарина'. "</a><br><br>";
    echo "<a href='/html/reception.php'>" .'<- Запис'. "</a><br><br>";
} 
else{
    echo "Помилка: " . $conn->error;
}
$conn->close();
?>