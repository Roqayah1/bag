<?php
include_once "conn.php";
?>

<html>
  <head>
  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/z1.css"/>
  </head>
<body>

    <!--كود شريط التنقل-->
    <nav class="navbar">
        <ul class="menu">
            <li><a id="a4" href="t7.php">خدماتنا</a></li>
        </ul>
    </nav>

  <div class="container">
    <div class="control-group">
        <h2>لون الحقيبة</h2>
        <br>
        <div class="select">
          <select>
            <option>الألوان الأساسية</option>
            <option>الأحمر</option>
            <option>الأصفر</option>
            <option>الأزرق</option>
            <option>الأسود</option>
            <option>الأبيض</option>
          </select>
          <div class="select__arrow"></div>
        </div>
        <div class="select">
          <select>
            <option>الألوان الدافئة</option>
            <option>البرتقالي</option>
            <option>الزهري</option>
            <option>السماوي</option>
          </select>
          <div class="select__arrow"></div>
        </div>
        <div class="select">
          <select>
            <option>الألوان الباردة</option>
            <option>الأخضر</option>
            <option>التركواز</option>
            <option>البنفسجي</option>
            <option>الأصفر</option>
          </select>
          <br><br>
          <input class="button" type="submit" value="ارسال">
          <div class="select__arrow"></div>
        </div>
    </div>
    <div class="control-group">
      <h2>حجم الحقيبة</h2>
      <br><br>
      <label class="control control--radio"> (S) صغيرة 
        <input type="radio" name="radio"/>
        <div class="control__indicator"></div>
      </label>
      <label class="control control--radio"> (M) وسط 
        <input type="radio" name="radio"/>
        <div class="control__indicator"></div>
      </label>
      <label class="control control--radio"> (L) كبيرة
        <input type="radio" name="radio"/>
        <div class="control__indicator"></div>
      </label>
      <label>
      <input class="button1" type="submit" value="ارسال">
    </label>
    </div>
      <div class="control-group">
        <h1>تقديم طلب لأستلام الحقيبة</h1>
        <br>
    <label>
      <input placeholder="اسم المستخدم" class="input1" name="text" type="text" />
      <br><br>
      <label>
          <input placeholder="رقم الهاتف" class="input2" name="text" type="tel" />
          <br><br>
      </label>
      <label>
     <input placeholder="رقم الحقيبة" class="input4" name="text" type="text"  />
     <br>
     <input class="button2" type="submit" value="ارسال">
      </label>
    </div>
  </div>
</body>
</html>