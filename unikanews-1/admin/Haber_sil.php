<?php
ob_start();
error_reporting(0);
session_start(); 
?>
<p hidden="hidden"><?php require_once("db_connection.php"); ?></p>
<?php 

				$kuladi=$_SESSION['userName'];
				
				$sess_kul=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE username='$kuladi'"));
			if ((empty($kuladi)) or (!isset($kuladi)))
			   {mysqli_close($conn); echo '<meta http-equiv="refresh" content="0;URL=index.php">';
			    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>UnikaNews</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron">
  <div class="container">
  <h1>UNIKANEWS</h1>      
  <p>SON DAKİKA HABERLERİ Üniversite Ve Karabük</p>
  </div>
</div>

<div class="container">

<div class="btn-group btn-group-justified">
  <a href="Giris.php" class="btn btn-primary">Haber Listele</a>
  <a href="Haber_kayit.php" class="btn btn-primary">Haber Ekle</a>
  <a href="Haber_sil.php" class="btn btn-primary">Haber Sil</a>
  
  <a href="logOut.php" class="btn btn-danger">Çıkış Yap</a>
</div>
<hr>
<div class="col-sm-3"></div>
<div class="panel panel-default col-sm-6">
    <hr><h3><center>Haber Silme Ekranı:</center></h3><hr>
    <div class="panel-body">  
    <form action="Haber_sil.php" method="POST"> 
                     <label><h4>SİLİNECEK Haber ID giriniz : </h4></label>
                        <input type="text"  name="urun_Id" class="form-control input-lg" required />
                     
                        <hr />
        
        <button type="submit" class="btn btn-danger" name="sil">Haberi Sil</button>
        <hr>
        
    </form>  
    </div>
    </div> 
    <div class="col-sm-3"></div>

</div>


</div>

</body>
</html>

  <!-- ürün sil -->
<?php 
	if(isset($_POST['sil'])){
	
		  $silId=$_POST['urun_Id'];
		  
	$sorgu_sil=mysqli_query($conn, "DELETE FROM news WHERE id='$silId'");
   
?>
<script type="text/javascript">
window.alert('Haber bilgileri siteden kaldırılmıştır..');
</script>
<meta http-equiv="refresh" content="0;URL=Giris.php">
<?php exit(); }?>

<?php mysqli_close($conn);?>
<?php ob_end_flush();} ?>