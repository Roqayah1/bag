<?php
include_once "conn.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/t9.css"/>
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
                    <img src="https://cdn.icon-icons.com/icons2/3859/PNG/512/confirm_checkmark_icon_238567.png" style="width: 125px; transform: translate(46%, 20%); border-style: solid;">
                    <div class="title" id="tit1"></div>
                    <div class="box">
                        <a href="z7.php"><input class="button" id="bt1" type="submit" value="تاكيد تسليم الحقائب"></a>
                    </div>
                </div>

                <div class="card" id="card2">
                    <img src="https://img.freepik.com/free-icon/verified-database-symbol-interface_318-46653.jpg" style="width: 125px; transform: translate(46%, 20%); border-style: solid;">
                    <div class="title" id="tit2"></div>
                    <div class="box">
                        <input class="button" id="bt2" type="submit" value="الاطلاع على استمارة الطلب">
                    </div>
                </div>

            </div>
        </section>

    </body>
</html>