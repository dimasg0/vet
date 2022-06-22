<?php 
$inn = $_POST['inn'];
$fullname = $_POST['fullname'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$email = $_POST['email'];

$conn = new mysqli("localhost", "root", "root", "bestpets");
if($conn->connect_error){
    die("Помилка: " . $conn->connect_error);
}

$searchsql = "SELECT * FROM `owners`";
$res = false;
if($result = mysqli_query($conn, $searchsql)){
     
    $rowsCount = mysqli_num_rows($result); 

    foreach($result as $row){
        if($inn == $row['id_owner']){
            echo $a;
            echo "<h2> Такий клієнт вже існує </h2><br>";
            echo "<a href='/html/home.html'>" .'<- Головна'. "</a><br><br>";
            echo "<a href='/html/owner.php'>" .'<- Власник'. "</a><br><br>";
            echo "<a href='/html/animal.php'>" .'<- Тварина'. "</a><br><br>";
            break;
            $res = false;   
        }
    }

    mysqli_free_result($result);
} 

    $sql = "INSERT INTO `owners`(`id_owner`, `fullname`, `phone`, `adress`, `email`) VALUES 
    ('$inn', '$fullname', '$phone', '$adress', '$email')";
    
    if($conn->query($sql)){
        echo 'Дані додані, повертайтесь на потрубні вам сторінку: <br><br>';
        echo "<a href='/html/home.html'>" .'<- Головна'. "</a><br><br>";
        echo "<a href='/html/owner.php'>" .'<- Власник'. "</a><br><br>";
        echo "<a href='/html/animal.php'>" .'<- Тварина'. "</a><br><br>";
    } else{
        echo "Помилка: " . $conn->error;
    }
    $conn->close();

?>