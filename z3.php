<?php
include_once "conn.php";
?>

<html>
  <head>
  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/z3.css"/>
    </head>
<body>

    <!--كود شريط التنقل-->
    <nav class="navbar">
        <ul class="menu">
            <li><a id="a4" href="t8.php">خدماتنا</a></li>
        </ul>
    </nav>

    <div class="chat-card">
        <div class="chat-header">
            <img src="m.png"><br>
         <div class="h2">خدمة العملاء</div>
        </div>
        <div class="chat-body">
          <div class="message incoming">
            <p>كم تستغرق عملية خروج الحقيبة الى السير؟</p>
          </div>
          <br><br>
          <div class="message outgoing">
       <p> .مرحبا ,تشتغرق 5دقائق اذا اكدت حضورك عند جهاز السير </p>
    </div>
          <br><br>
          <div class="message incoming">
            <p>كيف ييمكنني معرفة وقت خروج الحقيبة؟</p>
          </div>
          <br><br>
          <div class="message outgoing">
       <p>.من خلال تتبع وضع الطلب</p>
          </div>
          <br><br>
          <div class="message incoming">
            <p>ماذا يحصل عند عدم استلام الحقيبة؟ </p>
          </div>
          <br><br>
          <div class="message outgoing">
             <p> .يجب عليك تبليغ المطار بذلك للبداء بالاجراءات الازمة       </p> 
            </div>
          <br><br><br><br><br>
        </div>
        <div class="chat-footer">
          <input placeholder="أكتب رسالتك هنا" type="text">
          <button>أرسال</button>
        </div>
      </div>
      
</body>
</html>