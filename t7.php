<?php
include_once "conn.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/t7.css"/>
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
                <div class="card" id="card3">
                    <img src="https://cdn.icon-icons.com/icons2/3859/PNG/512/confirm_checkmark_icon_238567.png" style="width: 125px; transform: translate(46%, 20%); border-style: solid;">
                    <div class="title" id="tit3"></div>
                    <div class="box">
                        <a href="z2.php"><input class="button" id="bt3" type="submit" value="تاكيد استلام الامتعة"></a>
                    </div>
                </div>

                <div class="card" id="card4">
                    <img src="https://static.thenounproject.com/png/3605136-200.png" style="width: 125px; transform: translate(46%, 20%); border-style: solid;">
                    <div class="title" id="tit4"></div>
                    <div class="box">
                        <a href="z1.php"><input class="button" id="bt4" type="submit" value="تقديم طلب لاستلام الامتعة"></a>
                    </div>
                </div>

                <div class="card" id="card5" id="tit5">
                    <img src="https://e7.pngegg.com/pngimages/467/178/png-clipart-computer-icons-user-icon-design-others-miscellaneous-logo.png" style="width: 125px; transform: translate(46%, 20%); border-style: solid;">
                    <div class="title"></div>
                    <div class="box">
                        <a href="t11.php"><input class="button" id="bt5" type="submit" value="اضافة تابع"></a>
                    </div>
                </div>

                
            </div>
        </section>

    </body>
</html>