<?php include '../config.php';

$ayarlar = $db->prepare("SELECT * FROM ayarlar");
$ayarlar->execute();
$ayarcek = $ayarlar->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $ayarcek["site_title"]; ?> Giriş Sayfası </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>ADMİN PANELİ</h6>
			                <form action="islem.php" method="POST">
				                <input class="form-control" name="admin_kadi" type="text" placeholder="Kullanıcı Adı">
				                <input class="form-control" name="admin_sifre" type="password" placeholder="Şifre">
				                <?php 
				                if ($_GET["giris"]=="bos") {
				                   ?>
				                   <div class="alert alert-warning">
				                     <span class="glyphicon glyphicon-warning-sign"></span>	
                                      Lütfen boş alan bırakmayınız!
				                   </div>
				                   <?php
				                }elseif ($_GET["giris"]=="no") {
				                	?>
				                	<div class="alert alert-danger">	
                                       <span class="glyphicon glyphicon-remove"></span>
                                       Kullanıcı adınızı veya şifrenizi yanlış girdiniz!
				                	</div>
				                	<?php
				                }	
				                ?>
				                <button class="btn btn-success" name="loggin">GİRİŞ YAP</button>
				            </form>           
			            </div>
			        </div>
			    </div>
			
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>