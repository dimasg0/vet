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
    <div class="add-info" style="float: left; width: 39%;">
      <div class="form-box">
        <form action="http://vet/php/reception.php" method="post" style="padding-left: 20px; padding-bottom: 30px;">
          <label for="login"><b>ПІБ клієнта: </b></label><br>
          <input type="text" name="fullname" id="login" placeholder="ПІБ клієнта">
          <br><br>

          <label for="login"><b>Номер телефону: </b></label><br>
          <input type="text" name="phone" onkeypress='validate(event)' id="login" placeholder="Номер телефону">
          <br><br>

          <label for="login"><b>Дата візиту: </b></label><br>
          <input type="date" name="date" id="login" placeholder="Дата візиту">
          <br><br>

          <label for="login"><b>Час: </b></label><br>
          <input type="time" name="time" id="login" placeholder="Час">
          <br><br>
          <button type="submit" id="regis-btn"> Додати запис </button>
        </form>
      </div>
    </div>

    <div class="select-info" style="float: right; width: 60%;">
      <br>
      <h1 style="text-align: center;"> Записи </h1>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th>Номер</th>
            <th>Дата</th>
            <th>Час</th>
            <th>ПІБ</th>
            <th>Телефон</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $conn = mysqli_connect("localhost", "root", "root", "bestpets");
          if (!$conn) {
            die("Ошибка: " . mysqli_connect_error());
          }
          $sql = "SELECT * from `reception` where date(`date_visit`) > date(now()) or date(`date_visit`) = date(now()) ORDER BY `date_visit` ASC";

          if ($result = mysqli_query($conn, $sql)) {

            $rowsCount = mysqli_num_rows($result);

            foreach ($result as $row) {
              echo "<tr>";
              echo "<td>" . $row["id"] . "</td>";
              echo "<td>" . $row["date_visit"] . "</td>";
              echo "<td>" . $row["time_visit"] . "</td>";
              echo "<td>" . $row["fullname"] . "</td>";
              echo "<td>" . $row["phone"] . "</td>";
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

  <footer>
    <div class="w-80">
      <div class="footer-box">
        <h2> Послуги </h2>
        <br>
        <a href="">Щеплення</a>
        <a href="">Діагностика</a>
        <a href="">Стаціонар</a>
        <a href="">Ендоскопія</a>
        <a href="">Грумінг</a>
      </div>

      <div class="footer-box">
        <h2>Локації</h2>
        <br>
        <a href="">Англія</a>
        <a href="">Італія</a>
        <a href="">Україна</a>
        <a href="">Польща</a>
        <a href="">Литва</a>
      </div>

      <div class="footer-box">
        <h2> Компанія </h2>
        <br>
        <a href="">Історія</a>
        <a href="">Філіали</a>
        <a href="">Про нас</a>
        <a href="">Притулок</a>
        <a href="">Контакти</a>
      </div>

      <div class="footer-box">
        <h2> Лікування </h2>
        <br>
        <a href="">Терапія</a>
        <a href="">Хірургія</a>
        <a href="">Травматологія</a>
        <a href="">Анестезіологія</a>
        <a href="">Стоматологія</a>
      </div>
    </div>
  </footer>
  <script src="/js/test.js"></script>
</body>

</html>