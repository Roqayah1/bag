<?php
include_once "conn.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/t5.css"/>
    </head>
    <body>

        <!--كود شريط التنقل-->
        <nav class="navbar">
            <ul class="menu">
                <li><a id="a4" href="t7.php">خدماتنا</a></li>
            </ul>
        </nav>

        <!--اكواد تسجيل الدخول-->
<div class="container" id="container">
	<div class="form-container sign-up-container">
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
            <h1>اجراءات الاستلام</h1>
            <input type="text" placeholder="رقم التذكرة" />
            <img src="p.jpg" style="width: 125px; transform: translate(2%, 5%); border-style: solid;">
            <input id="bb" class="button" type="submit" value="تم الاستلام">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
                <img src="https://png.pngtree.com/png-vector/20220710/ourmid/pngtree-air-ticket-vector-illustration-png-image_5828828.png" style="width: 100%; height: 50%;">
                <h2>تاكيد استلام الامتعة</h2>
			</div>
		</div>
	</div>
</div>

    </body>
</html>