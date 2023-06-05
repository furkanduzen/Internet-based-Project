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
    <hr><h3><center>Yeni Haber Ekleme Ekranı:</center></h3><hr>
    <div class="panel-body">  
    <form action="Haber_kayit.php" method="POST" enctype="multipart/form-data"> 
                     <label><h4>Haber Ekleyen : </h4></label>
                        <input type="text"  name="names" value="<?php echo $_SESSION['userName'];?>" class="form-control input-lg" required />
                     <label><h4>Haber Tarih :  </h4></label>
                        <input type="text" name="mdate" value="<?php echo date('d.m.Y');?>" class="form-control input-lg" required/>
                     <label><h4>Haber Başlığı :  </h4></label>
                        <input type="text" name="msubject" class="form-control input-lg" required/>
                      <label><h4>Haber İçeriği : </h4></label>
                      
                        <textarea  name="mmessage" rows="8" class="form-control input-lg" required></textarea>
                        <hr>
                      <label><h4>Haber Fotosu : </h4></label>
                        <input type="file" name="docm" placeholder="Foto.jpg" class="form-control input-lg" required>
                                                   
                      
                        <hr />
        <button type="submit" class="btn btn-primary" name="btnEkle"
     onClick="return confirm('Haber eklenecek, emin misiniz?');">Haber Ekle</button>
        <button type="reset" class="btn btn-danger">İptal</button>
        <hr>
        
    </form>  
    </div>
    </div> 
    <div class="col-sm-3"></div>

</div>


</div>

</body>
</html>

<?php 
	if(isset($_POST['btnEkle']) ){
	
	$names=mysqli_real_escape_string($conn, $_POST['names']);
	$msubject=mysqli_real_escape_string($conn, $_POST['msubject']);
	$mmessage=mysqli_real_escape_string($conn, $_POST['mmessage']);
	$mdate=mysqli_real_escape_string($conn, $_POST['mdate']);
	
     
	
    function replace_tr($text) {
        $text = trim($text);
        $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
        $replace = array('c','c','g','g','i','i','o','o','s','s','u','u','_');
        $new_text = str_replace($search,$replace,$text);
        return $new_text;
     }
           // $yeniAd = replace_tr($yadi);

	// foto
		 $size = $_FILES['docm']['size'];              
	     $type = $_FILES['docm']['type'];
		 $docm = $_FILES['docm']['tmp_name'];
		 $docm_name = $_FILES['docm']['name'];            
		 	
		 $extension = explode('.', $docm_name);         
		 $extension = $extension[count($extension)-1];         
		
		$docm_name=$msubject."_".$docm_name;
		$dizin="../imageNews/".$docm_name;
       
   	    copy($docm, $dizin);

	$query_signUp=mysqli_query($conn, "INSERT INTO news(names,mphoto,msubject,mmessage,mdate,goster)
	VALUES ('$names','$docm_name','$msubject','$mmessage','$mdate','1')");
	
	
	
?>
	<script type="text/javascript">
          window.alert('Haber sisteme eklenmiştir.');
	</script>
    <meta http-equiv="refresh" content="0;URL=Giris.php">
<?php exit();}	?>

<?php mysqli_close($conn);?>			
<?php ob_end_flush(); }?>