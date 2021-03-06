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
      <div>
        <div class="form-box">
            <form method="post" style="padding-left: 20px; padding-bottom: 30px;">
                <label for="login"><b>ІНН клієнта: </b></label><br>
                <input type="text" name="inn" id="inn" placeholder="ІНН клієнта">
                <button type="submit" id="regis-btn"> Пошук </button>
             </form>
        </div>
      </div>

    <!-- Сделать вывод записей на текущий день -->
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
    <script src="app.js"></script>
</body>
</html>

