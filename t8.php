<?php
include_once "conn.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/t8.css"/>
    </head>
    <body>

        <!--كود شريط التنقل-->
        <nav class="navbar">
            <ul class="menu">
                <li><a id="a4" href="t2.php">خدماتنا</a></li>
            </ul>
        </nav>

        <!--اكواد البطاقات*-->
        <section class="sec">
            <div class="products">
                <div class="card" id="card1">
                    <img src="https://cdn-icons-png.flaticon.com/512/81/81523.png" style="width: 125px; transform: translate(46%, 20%); border-style: solid;">
                    <div class="title" id="tit1"></div>
                    <div class="box">
                        <a href="z3.php"><input class="button" id="bt1" type="submit" value="خدمة العملاء"></a>
                    </div>
                </div>

                <div class="card" id="card2">
                    <img src="https://cdn.icon-icons.com/icons2/1806/PNG/512/iconfinder-contat-us-1call-4211833_115049.png" style="width: 125px; transform: translate(46%, 20%); border-style: solid;">
                    <div class="title" id="tit2"></div>
                    <div class="box">
                        <a href="z6.php"><input class="button" id="bt2" type="submit" value="الاتصال"></a>
                    </div>
                </div>

                <div class="card" id="card3">
                    <img src="https://cdn-icons-png.freepik.com/512/4403/4403441.png" style="width: 125px; transform: translate(46%, 20%); border-style: solid;">
                    <div class="title" id="tit3"></div>
                    <div class="box">
                        <a href="t6.php"><input class="button" id="bt3" type="submit" value="الاسئلة"></a>
                    </div>
                </div>

            </div>
        </section>

    </body>
</html>