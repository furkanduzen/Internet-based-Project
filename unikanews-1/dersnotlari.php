<?php
ob_start();
error_reporting(0);
session_start();
?>
<p hidden="hidden"><?php require_once("db_connection.php"); ?></p>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <script src="dersnotlari.js"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>UnikaNews | Ders Notları</title>
</head>


<body>
<header>
  <div class="bar">
    <div class="logo">
      <a href="index.php">
        <img class="logoresim" src="logo.png">
      </a>
    </div>
    <ul class="links">
      <li><a href="index.php">Son Dakika</a> </li>
      <li><a href="duyurular.php">Duyurular</a> </li>
      <li><a href="dersnotlari.php">Ders Notları</a> </li>
      <li><a href="iletisim.php">İletişim</a> </li> 
    </ul>
    <a href="LoginPage.php" class="action_btn">Admin Girişi</a>
 
    <div class="toggle_button">
      <i class="fa-solid fa-bars"></i>
    </div>
  </div>
  <div class="dropdown_menu">
    <li><a href="index.php">Son Dakika</a></li>
    <li><a href="duyurular.php">Duyurular</a></li>
    <li><a href="dersnotlari.php">Ders Notları</a></li>
    <li><a href="iletisim.php">İletişim</a></li>    
    <li ><a href="LoginPage.php" class="action_btn">Admin Girişi</a></li>
  </div>
</header>
<hr class="rainbow-hr">


<div class="iletişimbackground"></div>

<!--

<button class="yukarıçık">
  <img src="yukarıçık.png" alt="yukarıçık">
</button>

-->


<!--
<div class="dropdown">
  <input  type="text" class="text-box"
         placeholder="Dropdown Menu" readonly>
  <div class="option">

    <div onclick="show('HTML')">HTML</div>
    <div onclick="show('AAAA')">AAAA</div>
    <div onclick="show('BBBB')">BBBB</div>
    <div onclick="show('CCCC')">CCCC</div>
    <div onclick="show('DDDD')">DDDD</div>

  </div>

</div>

-->
<div class="container">
  <h2>Ders Seçimini Yap Ve Dosyayı İndir</h2>

  <form class="dersnotlarıform" action="#">
    <select name="" id="faculty">
      <option value="">Fakülte</option>
    </select>
    <select name="" id="department">
      <option value="">Bölüm</option>
    </select>
    <select name="" id="course">
      <option value="">Ders</option>
    </select>
    <button class="dersnotlarıbutton" id="downloadButton" disabled>İndir</button>
  </form>
</div>




<footer>
  <h2> UNIKANEWS</h2>
  <h5>ADMİN İLETİŞİM LİNKLERİ</h5>

  <div class="flex-container">
    <div class="flex-box">
      <h4>FURKAN DÜZEN</h4>

      <a href="https://www.linkedin.com/in/furkanduzen/" target="_blank" ><img src="linkedlnlogo.png" width="30" height="30"></a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://wa.me/5340414462" target="_blank"><img src="whatsapplogo.png" width="30" height="30"> </a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://twitter.com/frkn_dzn" target="_blank"><img src="twitterlogo.png" width="30" height="30"></a>
    </div>
    <div class="flex-box">
      <h4>ENES ÇANKAYA</h4>
      <a href="https://www.linkedin.com/in/enes-%C3%A7ankaya-0b533b215/" target="_blank" ><img src="linkedlnlogo.png" width="30" height="30"></a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://wa.me/5464254468" target="_blank"><img src="whatsapplogo.png" width="30" height="30"> </a> &nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://www.instagram.com/enescnkya" target="_blank"><img src="instalogo.png" width="30" height="30"></a>
    </div>
<div class="flex-box">
  <h4>OYTUN YELDAN</h4>
  <a href="https://www.linkedin.com/in/oytun-yeldan-388a16221" target="_blank" ><img src="linkedlnlogo.png" width="30" height="30"></a> &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://wa.me/5548503774" target="_blank"><img src="whatsapplogo.png" width="30" height="30"> </a> &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="https://instagram.com/yeldanoytun?igshid=NGExMmI2YTkyZg==" target="_blank"><img src="instalogo.png" width="30" height="30"></a>
</div>
  </div>
  <p>UnikaNews @2023</p>
</footer>
</body>


</html>

