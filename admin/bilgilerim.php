<!-- HEADER -->
<?php include 'header.php'; ?>


    <div class="page-content">
    	<div class="row">

		  <!-- SIDEBAR -->
		  <?php include 'sidebar.php'; ?>

		  <!-- END SIDEBAR -->

		  <div class="col-md-10">

		  	<div class="row">
                <!-- ALERT UYARI BÖLMESİ -->
                <?php 
                if ($_GET["bilgi-guncelle"]=="bos") {
                	?>
            	    <div class="col-md-10">
			  		  <div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Boş alan bırakmayınız!</div>
			  	    </div>

                	<?php
                }elseif ($_GET["bilgi-guncelle"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
            
                }elseif ($_GET["bilgi-guncelle"]=="no") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz gerçekleştirilirken bir hata oluştu!</div>
			  	    </div>
                	<?php
                }

                ?>
                <!-- END ALERT UYARI BÖLMESİ -->
                
                <?php

                $id = 1;

                $query = $db->prepare("SELECT * FROM  bilgilerim");
                $query->execute();
                $cek = $query->fetch(PDO::FETCH_ASSOC);

                 ?>


                <!-- CONTENT -->
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Bilgilerim</div>  
		  			</div>
		  			<div class="content-box-large box-with-header">
		  				<div class="row">
		  					<form class="form-horizontal" action="islem.php?bilgi_id=<?php echo $id; ?>" method="POST">
                            
	                          <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Fotoğraf </label>
							    <div class="col-sm-9">
							      <img width="200px" src=" <?php echo $cek["bilgi_foto"]; ?>"  alt="<?php echo $cek["bilgi_foto"]; ?> ">
							    </div>
							  </div>

							 <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Fotoğraf Linki</label>
							    <div class="col-sm-9">
							      <input type="text" name="bilgi_foto" class="form-control" value="<?php echo $cek["bilgi_foto"]; ?>" >
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">İsim</label>
							    <div class="col-sm-9">
							      <input type="text" name="bilgi_isim" class="form-control" value="<?php echo $cek["bilgi_isim"]; ?>">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Meslek</label>
							    <div class="col-sm-9">
							      <input type="text" name="bilgi_meslek" class="form-control" value="<?php echo $cek["bilgi_meslek"]; ?>" >
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">İkamet</label>
							    <div class="col-sm-9">
							      <input type="text" name="bilgi_ikamet" class="form-control" value="<?php echo $cek["bilgi_ikamet"]; ?>" >
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">Mail</label>
							    <div class="col-sm-9">
							      <input type="text" name="bilgi_mail" class="form-control" value="<?php echo $cek["bilgi_mail"]; ?>" >
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">Telefon</label>
							    <div class="col-sm-9">
							      <input type="text" name="bilgi_telefon" class="form-control" value="<?php echo $cek["bilgi_telefon"]; ?>" >
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">Skype</label>
							    <div class="col-sm-9">
							      <input type="text" name="bilgi_skype" class="form-control" value="<?php echo $cek["bilgi_skype"]; ?>" >
							    </div>
							  </div>

							  <hr>

							  <div class="col-md-11">
							  	<button class="btn btn-success pull-right" name="bilgilerim">Güncelle</button>
							  	
							  </div>
							
							</form>
		  					
		  				</div>
			  			
					</div>
		  		</div>
		  	</div>

		  	
		  </div>
		</div>
    </div>

<!-- FOOTER -->
<?php include 'footer.php'; ?>