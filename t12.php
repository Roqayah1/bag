<?php
include_once "conn.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/t12.css"/>
    </head>
    <body>

        <!--كود شريط التنقل-->
        <nav class="navbar">
            <ul class="menu">
                <li><a id="a4" href="t5.php">خدماتنا</a></li>
            </ul>
        </nav>

        <!--اكواد تسجيل الدخول-->
<div class="container" id="container">
	<div class="form-container sign-up-container">
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
            <input type="password" placeholder="كلمة المرور الجديدة" />
            <input type="password" placeholder="اعادة كلمة المرور" />
            <input class="button" type="submit" value="ارسال">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h2><b>لا تقلق</b></h2>
				<h2><b>نحن هنا لنساعدك</b></h2>
			</div>
		</div>
	</div>
</div>

    </body>
</html>