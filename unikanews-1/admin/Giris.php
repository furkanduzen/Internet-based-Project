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
<!-- Advanced Tables -->
<div class="panel panel-primary">

<div class="panel-heading">
    <?php
  
   $sor_sayi=mysqli_query($conn, "SELECT * FROM news");
 
   $sayi=mysqli_num_rows($sor_sayi);
    ?>
    TOPLAM HABER BİLGİSİ: [ <?php echo $sayi; ?> ]
</div>
<div class="panel-body">

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead class="small">
                <tr>
                    <th width="5%">*</th>
                   
                    <th width="10%">Haber Kayıt ID</th> 
                    <th width="25%">Haber</th>
                    <th width="20%">Tarih</th>
                
                    <th width="10%">Başlık</th>
                    <th width="30%">İçerik</th>
                    

                </tr>
            </thead>
            <tbody class="small">
                <!--  veritabanı bilgileri -->
                <?php 
 $no=0;
 $yorum_u=mysqli_query($conn, "SELECT * FROM news");

while($sorgu=mysqli_fetch_array($yorum_u)){ 
$no=$no+1;
?>

                <tr class="gradeX">
                   
                        <td><?php echo $no;?></td>
                        <td><?php echo $sorgu['id']; ?></td>
                        <td><img src="../imageNews/<?php echo $sorgu['mphoto']?>"
                        class="img-rounded" alt="" width="200px" height="150px"></td>
                        <td><?php echo $sorgu['mdate'] ?></td>
                        <td><?php echo $sorgu['msubject']; ?></td>   
                        <td><?php echo $sorgu['mmessage']; ?></td>
                        
 
        
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>

</div>
<!--End Advanced Tables -->

</div>

</body>
</html>


<?php mysqli_close($conn);?>
<?php ob_end_flush();} ?>
