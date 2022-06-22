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
        <h1 style="text-align: center; font-size: 24px;"> Тварини </h1>
        <br>

        <div class="padding-class" style="width: 100%;"></div>
        <table class="table">
            <thead>
                <tr>
                    <form action="">
                    <th>Номер</th>
                    <th>Власник</th>
                    <th>Кличка</th>
                    <th>Тип</th>
                    <th>Вид</th>
                    <th>Стать</th>
                    <th>Вага</th>
                    <th>Колір</th>
                    <th>Дата народження</th>
                    <th>Вік</th>
                    <th>DEL</th>
                    </form>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect("localhost", "root", "root", "bestpets");
                if (!$conn) {
                  die("Ошибка: " . mysqli_connect_error());
                }
                $sql = "SELECT id_animal, owners.fullname, a_name, a_type, a_breed, gender, `weight`, color, b_date  
                FROM `animals` JOIN `owners` using(id_owner)";

                if($result = mysqli_query($conn, $sql)){
                     
                    $rowsCount = mysqli_num_rows($result); // количество полученных строк
                
                    foreach($result as $row){
                        echo "<tr >";
                        echo " <form action='http://vet/html/testform.php' method='post'>";
                            echo "<td> <input name=id value='$row[id_animal]' readonly></td>";
                            echo "<td>" . $row["fullname"] . "</td>";
                            echo "<td>" . $row["a_name"] . "</td>";
                            echo "<td>" . $row["a_type"] . "</td>";
                            echo "<td>" . $row["a_breed"] . "</td>";
                            echo "<td>" . $row["gender"] . "</td>";
                            echo "<td>" . $row["weight"] . "</td>";
                            echo "<td>" . $row["color"] . "</td>";
                            echo "<td>" . $row["b_date"] . "</td>";

                            $birthday_timestamp = strtotime($row["b_date"]);
                            $age = date('Y:m') - date('Y:m', $birthday_timestamp);

                            if($age == 0) {
                                $nage = (date('m', $birthday_timestamp) - 12)*(-1);
                                $age = 12 - $nage . " м";
                            }

                            echo "<td>" . $age . "</td>";
                            echo "<td><button> Перейти </button> </td>";
                        echo "</tr>";
                        echo " </form>";
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
            <button id="regis-btn" class="animal-add" onclick="animalAdd()"> Повна анкета </button>
        </div>

        <div class="button-add-menu">
            <button id="regis-btn" class="animal-add" onclick="onlyanimalAdd()"> Тільки тварина </button>
        </div>
    </section>
    
    <script src="/js/test.js"></script>
</body>
</html>

