<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/animal.css'>
</head>
<body style="max-width: 100%;">
    <header>
        <div class="menu">
            <div class="brand-name">
                <a href="/html/index.html">
                    <h2>&nbsp; Best pets </h2>
                </a>
            </div>

            <nav>
                <ul>
                <li><a href="http://vet/html/home.html"> Головна </a></li>
                  <li><a href="http://vet/html/animal.php"> Тварини </a></li>
                  <li><a href="http://vet/html/owner.php">Власники</a></li>
                  <li><a href="http://vet/html/reception.php"> Запис </a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section>
        <br>
        <h1 style="text-align: center; font-size: 24px;"> Лікарі </h1>
        <br>
        <div class="padding-class" style="width: 100%;"></div>
        <table class="table">
            <thead>
                <tr>
                    <th>№</th>
                    <th>ФіО</th>
                    <th>Телефон</th>
                    <th>Позиція</th>
                    <th>Категорія</th>
                    <th>Зміни</th>
                </tr>
            </thead>
            <tbody>
                <?php
$conn = mysqli_connect("localhost", "root", "root", "bestpets");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `doctors`";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result); // количество полученных строк

    foreach($result as $row){
        echo "<tr>";
         echo " <form action='http://vet/php/deletedoctor.php' method='post'>";
            echo "<td> <input name='id' value='$row[id_doctor]' readonly></td>";
            echo "<td>" . $row["fullname"] . "</td>";
            echo "<td>" . $row["phone"] . "</td>";
            echo "<td>" . $row["position"] . "</td>";
            echo "<td>" . $row["category"] . "</td>";
            echo "<td><button> Видалити </button> </td>";
         echo " </form>";
        echo "</tr>";
    }

    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
            </tbody>
        </table>

        <div class="button-add-menu">
        <form action="http://vet/html/add_doctor.html"> <button type="submit" id="regis-btn"> Додати </button></form>
        </div>
    </section>

    <script src="/js/test.js"></script>
</body>
</html>

