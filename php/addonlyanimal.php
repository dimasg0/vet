<?php 
$inn = $_POST['innowner'];
$a_name =  $_POST['a_name'];
$a_breed =  $_POST['a_breed'];
$a_type =  $_POST['a_type'];
$gender =  $_POST['gender'];
$weight =  $_POST['weight'];
$color =  $_POST['color'];
$b_date =  $_POST['b_date'];

$conn = new mysqli("localhost", "root", "root", "bestpets");
if($conn->connect_error){
    die("Помилка: " . $conn->connect_error);
}

$searchsql = "SELECT * FROM `owners`";
$res = false;
if($result = mysqli_query($conn, $searchsql)){
     
    $rowsCount = mysqli_num_rows($result); 

    foreach($result as $row){
        if($inn != $row['id_owner']){
            echo "Такаго клієнта не має";
            break;
            $res = false;   
        }
    }

    mysqli_free_result($result);
} 

    $a = date('d.m.Y H:i:s');
    $timestamp = strtotime($a);

    $sqlanimal = "INSERT INTO `animals`(`id_animal`, `a_name`, `a_breed`, `a_type`, `gender`, `weight`, `color`, `b_date`, `id_owner`) VALUES 
    ('$timestamp', '$a_name', '$a_breed', '$a_type', '$gender', '$weight', '$color', '$b_date', '$inn')";
    
    if($conn->query($sqlanimal)){
            echo 'Дані додані, повертайтесь на потрубні вам сторінку: <br><br>';
            echo "<a href='/html/home.html'>" .'<- Головна'. "</a><br><br>";
            echo "<a href='/html/owner.php'>" .'<- Власник'. "</a><br><br>";
            echo "<a href='/html/animal.php'>" .'<- Тварина'. "</a><br><br>";
    } 
    else{
    echo "<br> <h2> Помилка: " . $conn->error ."</h2>";
    }

    $conn->close();

?>