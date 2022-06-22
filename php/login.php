<?php 
$login = $_POST['login'];
$password = $_POST['passwordlogin'];

$admin = "http://vet/html/admin.php";
$data_admin = file_get_contents($admin);

if(($login == "admin") and ($password == "admin")) {
    echo $data_admin;
} else {
        $conn = new mysqli("localhost", "root", "root", "bestpets");
        
        if($conn->connect_error){
            die("Помилка: " . $conn->connect_error);
        }
        
        $filename = "http://vet/html/erroepage.html";
        $home = "http://vet/html/home.html";
        
        $data = file_get_contents($filename);
        $datahome = file_get_contents($home);

        $sql = "SELECT * FROM `doctors`";
        $result = "";
        if($result = $conn->query($sql)){
            foreach($result as $row){
                $userid = $row["fullname"];
                
                if($userid == $login and $password == '123123'){
                    echo $datahome;
                        $result = 1;
                        break;
                } else {
                   $result = 2;
                }
            }

            if($result != 1){
                echo $data;
            }

        } else {
             echo "Помилка: " . $conn->error;
        
}
// echo "Помилка: перевірте правильність даних або підключення до серверу <br>";
// echo "<a href='/html/login.html'>" .'<- повернутись'. "</a>";


$conn->close();
}
?>