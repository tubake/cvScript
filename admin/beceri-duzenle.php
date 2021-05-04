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
                if ($_GET["ayar-guncelle"]=="bos") {
                	?>
            	    <div class="col-md-10">
			  		  <div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Boş alan bırakmayınız!</div>
			  	    </div>

                	<?php
                }elseif ($_GET["ayar-guncelle"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
            
                }elseif ($_GET["ayar-guncelle"]=="no") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz gerçekleştirilirken bir hata oluştu!</div>
			  	    </div>
                	<?php
                }

                ?>
                <!-- END ALERT UYARI BÖLMESİ -->

                <?php 

                $beceri_id = $_GET["beceri_id"];
                $query = $db->prepare("SELECT * FROM becerilerim WHERE beceri_id=?");
                $query->execute(array($beceri_id));

                $ayarcek = $query->fetch(PDO::FETCH_ASSOC);

                ?>


                <!-- CONTENT -->
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Beceri Düzenle</div>  
		  			</div>
		  			<div class="content-box-large box-with-header">
		  				<div class="row">
		  					<form class="form-horizontal" action="islem.php?beceri_id=<?php echo $ayarcek["beceri_id"]; ?>" method="POST">

							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Beceri Adı</label>
							    <div class="col-sm-9">
							      <input type="text" name="beceri_adi" class="form-control" value="<?php echo $ayarcek["beceri_adi"]; ?>" required>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Beceri Yüzde(%)</label>
							    <div class="col-sm-9">
							      <input type="text" name="beceri_yuzde" class="form-control" value="<?php echo $ayarcek["beceri_yuzde"]; ?>">
							    </div>
							  </div>
							 

							  <hr>

							  <div class="col-md-11">
							  	<button class="btn btn-success pull-right" name="beceri-duzenle">Güncelle</button>
							  	
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