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
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>UnikaNews | Son Dakika</title>
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

<div class="iletişimbackground2"></div>
<hr class="rainbow-hr" >





<div class="blog-section">
  <div class="section-content blog">
    <div class="title">
      <div id="ww_244932583dd89" v='1.3' loc='id' a='{"t": "responsive","lang":"tr","sl_lpl":1,"ids":["wl5777"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#FFFFFF00","cl_font":"rgb(214,214,214)","cl_cloud":"#d4d4d4","cl_persp":"#2196F3","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722","sl_tof":"3","cl_odd":"#00000000"}'><a href="https://weatherwidget.org/tr/" id="ww_244932583dd89_u" target="_blank">Hava durumu widget</a></div><script async src="https://app1.weatherwidget.org/js/?id=ww_244932583dd89"></script>
      <br>
      <br>
      <h2>SON DAKİKA HABERLERİ</h2>
      <p>Üniversite Ve Karabük </p>
      <br>
      <br>
    </div>




    <div class="cards">

    <?php    
                    $yorum=mysqli_query($conn, "SELECT * FROM news  ORDER BY id ASC LIMIT 6");
 	                while($sor_team=mysqli_fetch_array($yorum)){ 
                                    
            ?>
      <div class="card">
        <div class="image-section">
          <img src="imageNews/<?php echo $sor_team['mphoto']; ?>">
        </div>
        <div class="article">
          <h4><?php echo $sor_team['msubject']; ?></h4>
          <p>
          <?php echo $sor_team['mmessage']; ?>
          </p>
        </div>


        <div class="posted-date">
          <p><?php echo $sor_team['mdate']; ?></p>
        </div>
      </div>
  <?php } ?>


    </div>
  </div>
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
