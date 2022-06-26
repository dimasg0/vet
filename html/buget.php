<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/animal.css'>
    <script src="/js/app.js"></script>
</head>

<body class="home-body">
    <header>
        <div class="menu">
            <div class="brand-name">
                <a href="index.html">
                    <h2> Best pets </h2>
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
        <div class="padding-class" style="padding: 5%;">
            <table class="table">
                <thead>
                    <tr>
                        <th>День</th>
                        <th>Місяць</th>
                        <th>Весь період</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = new mysqli("localhost", "root", "root", "bestpets");
                    if ($conn->connect_error) {
                        die("Помилка: " . $conn->connect_error);
                    }

                    $today = date('d.m.Y');

                    $sql = "SELECT sum(`cost`) from `diagnostic` where date(`date_start`) = date(now())"; // where date(`date_start`) = date(now())

                    $result2 = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));
                    if ($result2) {
                        $rows = mysqli_num_rows($result2);

                        for ($i = 0; $i < $rows; ++$i) {
                            $row = mysqli_fetch_row($result2);

                            for ($j = 0; $j < 1; ++$j) echo "<td> Загальна сума за $today: $row[0] грн </td>";
                        }
                    }

                    $today_month = date('m');

                    $month = "SELECT sum(`cost`) from `diagnostic` where month(`date_start`) = $today_month";

                    $result3 = mysqli_query($conn, $month) or die("Ошибка " . mysqli_error($conn));
                    if ($result3) {
                        $rows = mysqli_num_rows($result3);

                        for ($i = 0; $i < $rows; ++$i) {
                            $row = mysqli_fetch_row($result3);
                            for ($j = 0; $j < 1; ++$j) echo "<td> Загальна сума за місяць $row[0] грн </td> ";
                        }
                    }

                    $all = "SELECT sum(`cost`) from `diagnostic`";

                    $result4 = mysqli_query($conn, $all) or die("Ошибка " . mysqli_error($conn));
                    if ($result4) {
                        $rows = mysqli_num_rows($result4);

                        for ($i = 0; $i < $rows; ++$i) {
                            $row = mysqli_fetch_row($result4);
                            for ($j = 0; $j < 1; ++$j) echo "<td> Загальна сума за весь період: $row[0] грн </td>";
                        }
                    }
                    mysqli_close($conn);
                    ?>
                </tbody>

        </div>
    </section>

    <script src="/js/test.js"></script>
</body>

</html>