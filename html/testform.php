<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/animal.css'>
    <title>Profile</title>
</head>

<body>
    <header>
        <div class="menu">
            <div class="brand-name">
                <a href="/html/index.html">
                    <h2>&nbsp Best pets </h2>
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

    <?php
    $id_animal = $_POST["id"];

    $conn = mysqli_connect("localhost", "root", "root", "bestpets");
    if (!$conn) {
        die("Ошибка: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM `animals` where `id_animal` = $id_animal";
    if ($result = mysqli_query($conn, $sql)) {

        $rowsCount = mysqli_num_rows($result); // количество полученных строк

        foreach ($result as $row) {
            echo "<form action='http://vet/php/deleteanimal.php' method='post'>";
            echo "<div style='padding: 30px''>";
            echo "<input type='text' value='$row[id_animal]' name='id_animal' style='width: 5%; visibility: hidden;'>";
            echo "<h3> Кличка: " . $row["a_name"] . "</h3>";
            echo "<h3> Дата народження: " . $row["b_date"] . "</h3>";
            echo "<button id='regis-btn' type='submin'>Видалити</button>";
            echo "</div></form>";
        }

        mysqli_free_result($result);
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
    <section>
        <div class="add-info" style="float: left; width: 39%;">
            <div class="form-box">
                <h2 style="padding-left: 20px; padding-bottom: 20px;"> Діагностика </h2>
                <form action="http://vet/php/addiagnostic.php" method="post" style="padding-left: 20px; padding-bottom: 30px;">

                    <?php
                    $id_animal = $_POST["id"];

                    $conn = mysqli_connect("localhost", "root", "root", "bestpets");
                    if (!$conn) {
                        die("Ошибка: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM `animals` where `id_animal` = $id_animal";
                    if ($result = mysqli_query($conn, $sql)) {

                        $rowsCount = mysqli_num_rows($result); // количество полученных строк

                        foreach ($result as $row) {

                            echo "<label for='text'><b>Номер картки: </b></label><br>";
                            echo "<input type='text' name='id_animal' id='id_animal' value='$row[id_animal]' readonly>";
                            echo "<br>";
                        }

                        mysqli_free_result($result);
                    } else {
                        echo "Ошибка: " . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    ?>

                    <label for="text"><b>Опис: </b></label><br>
                    <input type="text" name="title" id="title" placeholder="Опис">
                    <br>

                    <label for="date"><b>Дата: </b></label><br>
                    <input type="date" name="dates" id="dates" placeholder="Дата">
                    <br>

                    <label for="text"><b>Ціна: </b></label><br>
                    <input type="tetx" name="cost" onkeypress='validate(event)' id="cost" placeholder="Ціна">
                    <br><br>
                    <button type="submit" id="regis-btn"> Додати запис </button>
                </form>
            </div>
        </div>

        <div class="add-info" style="float: right; width: 30%;">
            <div class="form-box">
                <h2 style="padding-left: 20px; padding-bottom: 20px;"> Щеплення </h2>
                <form action="http://vet/php/addvac.php" method="post" style="padding-left: 20px; padding-bottom: 30px;">

                    <?php
                    $id_animal = $_POST["id"];
                    $conn = mysqli_connect("localhost", "root", "root", "bestpets");

                    if (!$conn) {
                        die("Ошибка: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM `animals` where `id_animal` = $id_animal";
                    if ($result = mysqli_query($conn, $sql)) {

                        $rowsCount = mysqli_num_rows($result); // количество полученных строк

                        foreach ($result as $row) {

                            echo "<label for='text'><b>Номер картки: </b></label><br>";
                            echo "<input type='text' name='id_animal' id='id_animal' value='$row[id_animal]' readonly>";
                            echo "<br>";
                        }

                        mysqli_free_result($result);
                    } else {
                        echo "Ошибка: " . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    ?>
                    <label for="text"><b>Опис: </b></label><br>
                    <input type="text" name="title" id="title" placeholder="Опис">
                    <br>

                    <label for="date"><b>Дата проведення: </b></label><br>
                    <input type="date" name="date_start" id="date_start" placeholder="Дата">
                    <br>

                    <label for="date"><b>Дата закінчення терміну дії: </b></label><br>
                    <input type="date" name="date_end" id="date_end" placeholder="Дата">
                    <br>
                    <button type="submit" id="regis-btn"> Додати запис </button>
                </form>
            </div>
        </div>


        <div class="padding-class" style="width: 39%; margin-bottom: 20px; float: right;">
            <table class="table" style="margin-bottom: 20px">
                <thead>
                    <tr>
                        <form action="">
                            <th>Номер</th>
                            <th>Назва</th>
                            <th>Дата проведення</th>
                            <th>Закінчення</th>
                        </form>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id_animal = $_POST["id"];

                    $conn = mysqli_connect("localhost", "root", "root", "bestpets");
                    if (!$conn) {
                        die("Ошибка: " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM `vactination` where `id_animal` = $id_animal";

                    if ($result = mysqli_query($conn, $sql)) {

                        $rowsCount = mysqli_num_rows($result); // количество полученных строк

                        foreach ($result as $row) {
                            echo "<tr >";
                            echo "<td>" . $row["id_vac"] . "</td>";
                            echo "<td>" . $row["title"] . "</td>";
                            echo "<td>" . $row["date_start"] . "</td>";
                            echo "<td>" . $row["date_end"] . "</td>";
                            echo "</tr>";
                        }

                        mysqli_free_result($result);
                    } else {
                        echo "Ошибка: " . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>

        <div class="padding-class" style="width: 60%; margin-bottom: 20px; float: left;">
            <table class="table" style="margin-bottom: 20px">
                <thead>
                    <tr>
                        <form action="">
                            <th>Номер</th>
                            <th>Опис</th>
                            <th>Дата</th>
                            <th>Ціна</th>
                        </form>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $id_animal = $_POST["id"];

                    $conn = mysqli_connect("localhost", "root", "root", "bestpets");
                    if (!$conn) {
                        die("Ошибка: " . mysqli_connect_error());
                    }
                    $sql = "SELECT * FROM `diagnostic` where `id_animal` = $id_animal";

                    if ($result = mysqli_query($conn, $sql)) {

                        $rowsCount = mysqli_num_rows($result); // количество полученных строк

                        foreach ($result as $row) {
                            echo "<tr >";
                            echo "<td>" . $row["diagnosticID"] . "</td>";
                            echo "<td>" . $row["title"] . "</td>";
                            echo "<td>" . $row["date_start"] . "</td>";
                            echo "<td>" . $row["cost"] . "</td>";
                            echo "</tr>";
                        }

                        mysqli_free_result($result);
                    } else {
                        echo "Ошибка: " . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <script src="/js/test.js"></script>
</body>

</html>