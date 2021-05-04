<!-- HEADER -->
<?php include 'header.php'; ?>


<div class="page-content">
	<div class="row">

	  <!-- SIDEBAR -->
	  <?php include 'sidebar.php'; ?>

	  <!-- END SIDEBAR -->

      <?php 
       $okul_id = $_GET["okul_id"];

       $query = $db->prepare("SELECT * FROM okullar WHERE okul_id=?");
       $query->execute(array($okul_id));
       $cek = $query->fetch(PDO::FETCH_ASSOC);
 
       ?>


	  
	  <div class="col-md-12 panel-primary">
			<div class="content-box-header panel-heading">
				<div class="panel-title ">Okul Düzenle</div>  
			</div>
			<div class="content-box-large box-with-header">
				<div class="row">
					<form action="islem.php?okul_id=<?php echo $cek["okul_id"]; ?>" method="POST" class="form-horizontal" role="form">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Okul Adı</label>
				    <div class="col-sm-9">
				      <input type="text" name="okul_adi" class="form-control" value="<?php echo $cek["okul_adi"];  ?>" >
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Okul Durum</label>
				    <div class="col-sm-9">
				      <select name="okul_devam" class="form-control">
				      	<option value="1" <?php echo $cek["okul_devam"]==1 ? "selected" : null; ?> >Hala devam ediyor</option>
				      	<option value="0" <?php echo $cek["okul_devam"]==0 ? "selected" : null; ?>>Devam etmiyor</option>
				      </select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Okul Açıklama</label>
				    <div class="col-sm-9">
				      <textarea class="form-control" name="okul_aciklama"  cols="30" rows="5" placeholder="Okul açıklamasını giriniz."><?php echo $cek["okul_aciklama"]; ?></textarea>
				    </div>
				  </div>
				 
				 
				  <hr>

				  <div class="col-md-11">
				  	<button class="btn btn-success pull-right" name="okul-duzenle">Güncelle</button>
				  	
				  </div>
				  
				  
				</form>
					
				</div>
				
		    </div>
	  </div>
	  	

	  	
	  
	</div>
</div>

<!-- FOOTER -->
<?php include 'footer.php'; ?>