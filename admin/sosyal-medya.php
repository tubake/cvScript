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
                if ($_GET["sm-guncelle"]=="bos") {
                	?>
            	    <div class="col-md-10">
			  		  <div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Boş alan bırakmayınız!</div>
			  	    </div>

                	<?php
                }elseif ($_GET["sm-guncelle"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
            
                }elseif ($_GET["sm-guncelle"]=="no") {
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

	            $query = $db->prepare("SELECT * FROM sosyalmedya");
	            $query->execute();
	            $cek = $query->fetch(PDO::FETCH_ASSOC);


	            ?>

                <!-- CONTENT -->
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Sosyal Medya Hesaplarım</div>  
		  			</div>
		  			<div class="content-box-large box-with-header">
		  				<div class="row">
		  					<form action="islem.php?sm_id=<?php echo $id; ?>" method="POST" class="form-horizontal" role="form">
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Linkedin</label>
							    <div class="col-sm-9">
							      <input type="text" name="sm_linkedin" class="form-control" value="<?php echo $cek["sm_linkedin"]; ?>" >
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">Instagram</label>
							    <div class="col-sm-9">
							      <input type="text" name="sm_instagram" class="form-control" value="<?php echo $cek["sm_instagram"]; ?>">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Twitter</label>
							    <div class="col-sm-9">
							      <input type="text" name="sm_twitter" class="form-control" value="<?php echo $cek["sm_twitter"]; ?>" >
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Youtube</label>
							    <div class="col-sm-9">
							      <input type="text" name="sm_youtube" class="form-control" value="<?php echo $cek["sm_youtube"]; ?>" >
							    </div>
							  </div>

							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label"> Pinterest</label>
							    <div class="col-sm-9">
							      <input type="text" name="sm_pinterest" class="form-control" value="<?php echo $cek["sm_pinterest"]; ?>" >
							    </div>
							  </div>

							  <hr>

							  <div class="col-md-11">
							  	<button class="btn btn-success pull-right" name="sosyal-medya">Güncelle</button>
							  	
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