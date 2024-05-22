<?php
include_once "conn.php";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/t4.css"/>
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

       <!--اكواد تسجيل الدخول-->
<div class="container" id="container">
	<div class="form-container sign-up-container">
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>حساب جديد</h1>
			<input type="text" placeholder="الاسم الاول" /> 
            <input type="email" placeholder="البريد الإلكتروني" />
			<input type="password" placeholder="كلمة المرور" required/>
            <input class="button" type="submit" value="ارسال">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h2><b>متتبع الامتعة</b></h2>
				<h2><b>يرحب بك</b></h2>
			</div>
		</div>
	</div>
</div>

    </body>
</html>