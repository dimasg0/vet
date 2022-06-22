<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/css/style.css'>
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
                    <li><a href="animal.html"> Тварини </a></li>
                    <li><a href="owner.html"> Власники </a></li>
                    <li><a href="profile.html"> Профіль </a></li>
                    <li><a href="option.html"> Налаштування </a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section>
        <div class="home-menu" style="margin-left: 10%;">  
            <div class="card">
                <img src="/img/premium-icon-medical-doctor-2999395.png" alt="" style="width:50%; padding-top: 10px;">
    
                <h1>Лікарі</h1>
              
                <form action="http://vet/html/doctors.php"> 
                    <p><button id="go-to-doctor">Перейти</button></p>
                </form>
            </div>

            <div class="card">
                <img src="/img/premium-icon-reports-3568714.png" alt="" style="width:50%; padding-top: 10px;">
                <h1>Запис</h1>
               
                <p><button id="go-to-report" onclick="goToReport()">Перейти</button></p>
            </div>
              
            <div class="card">
                  <img src="/img/premium-icon-money-management-4844625.png" alt="" style="width:50%; padding-top: 10px;">

                  <h1>Бюджет</h1>
        
                  <p><button id="go-to-buget" onclick="goToBuget()">Перейти</button></p>
            </div>
        </div>
</section>
<script src="/js/test.js"></script>
</body>
</html>