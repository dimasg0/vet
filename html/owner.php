<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/animal.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/service_style.css'>
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
        <h1 style="text-align: center; font-size: 24px;"> Власники </h1>
        <br>
        <div class="padding-class" style="width: 100%;"></div>
        <table class="table">
            <thead>
                <tr>
                    <th> Номер </th>
                    <th> ФІО </th>
                    <th> Телефон </th>
                    <th> Адреса </th>
                    <th> Пошта </th>
                    <th> DEL </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = mysqli_connect("localhost", "root", "root", "bestpets");
                if (!$conn) {
                    die("Ошибка: " . mysqli_connect_error());
                }
                $sql = "SELECT * FROM `owners`";
                if ($result = mysqli_query($conn, $sql)) {

                    $rowsCount = mysqli_num_rows($result); // количество полученных строк

                    foreach ($result as $row) {
                        echo "<tr>";
                        echo " <form action='http://vet/html/owner_add.html' method='post'>";
                        echo "<td> <input name=id_owner value='$row[id_owner]' readonly></td>";
                        echo "<td>" . $row["fullname"] . "</td>";
                        echo "<td>" . $row["phone"] . "</td>";
                        echo "<td>" . $row["adress"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td> <button type='submit'> Видалити </button> </td>";
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

        <div class="button-add-menu">
            <div class="col-1">
                <form style="padding: 10px;" action="http://vet/html/owner_add.html" method="post">
                    <button class="col-1" type="submit" id="regis-btn"> Додати </button>
                </form>
            </div>

        </div>
    </section>

    <script src="app.js"></script>
</body>

</html>