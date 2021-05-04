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
                if ($_GET["okul-guncelle"]=="bos") {
                	?>
            	    <div class="col-md-10">
			  		  <div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Boş alan bırakmayınız!</div>
			  	    </div>

                	<?php
                }elseif ($_GET["okul-guncelle"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
            
                }elseif ($_GET["okul-guncelle"]=="no") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz gerçekleştirilirken bir hata oluştu!</div>
			  	    </div>
                	<?php
                }

                ?>
                <!-- END ALERT UYARI BÖLMESİ -->
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Okul Ekle</div>  
		  			</div>
		  			<div class="content-box-large box-with-header">
		  				<div class="row">
		  					<form action="islem.php" method="POST" class="form-horizontal" role="form">
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Okul Adı</label>
							    <div class="col-sm-9">
							      <input type="text" name="okul_adi" class="form-control" placeholder="Okul adını giriniz.">
							    </div>
							  </div>
							  
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Okul Durum</label>
							    <div class="col-sm-9">
							      <select name="okul_devam" class="form-control">
							      	<option value="1">Hala devam ediyor</option>
							      	<option value="0">Devam etmiyor</option>
							      </select>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Okul Açıklma</label>
							    <div class="col-sm-9">
							      <textarea class="form-control" name="okul_aciklama"  cols="30" rows="5" placeholder="Okul açıklamasını giriniz."></textarea>
							    </div>
							  </div>
							 
							 

							  <hr>

							  <div class="col-md-11">
							  	<button class="btn btn-success pull-right" name="okul-ekle">Ekle</button>
							  	
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