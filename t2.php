<?php
include_once "conn.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/t2.css"/>
    </head>
    <body>

        <!--كود شريط التنقل-->
        <nav class="navbar">
            <ul class="menu">
                <li><a id="a4" href="t2.php">خدماتنا</a></li>
                <li><a id="a3" href="t4.php">حساب جديد</a></li>
                <li><a id="a2" href="t3.php">تسجيل دخول</a></li>
                <li><a id="a1" href="index.php">الصفحة الرئيسية</a></li>
            </ul>
        </nav>

        <!--اكواد البطاقات*-->
        <section class="sec">
            <div class="products">
                <div class="card">
                    <div class="img"><img src="https://w7.pngwing.com/pngs/730/469/png-transparent-person-walking-with-luggage-bag-sign-travel-website-computer-icons-tourism-hotel-tourist-hand-silhouette-black-and-white.png" style="width: 125px; transform: translate(68%, 20%); border-style: solid;" ></div>
                    <div class="title">المسافر</div>
                    <div class="box">
                        <a href="t7.php"><input class="btn" type="submit" value="انقر"></a>
                    </div>
                </div>

                <div class="card">
                    <div class="img"><img src="https://e7.pngegg.com/pngimages/942/662/png-clipart-computer-icons-user-avatar-login-employee-heroes-head.png" style="width: 125px; transform: translate(68%, 20%); border-style: solid;"></div>
                    <div class="title">الموظف</div>
                    <div class="box">
                        <a href="t9.php"><input class="btn" type="submit" value="انقر"></a>
                    </div>
                </div>

                <div class="card">
                    <div class="img"><img src="https://img2.arabpng.com/20180622/ies/kisspng-technical-support-customer-service-computer-icons-call-png-5b2d73a4e3abc8.4342479715297053809326.jpg" style="width: 125px; transform: translate(68%, 20%); border-style: solid;"></div>
                    <div class="title">الدعم الفني</div>
                    <div class="box">
                        <a href="t8.php"><input class="btn" type="submit" value="انقر"></a>                    
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>