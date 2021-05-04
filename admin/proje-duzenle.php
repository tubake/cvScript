<!-- HEADER -->
<?php include 'header.php'; ?>


<div class="page-content">
	<div class="row">

	  <!-- SIDEBAR -->
	  <?php include 'sidebar.php'; ?>

	  <!-- END SIDEBAR -->

      <?php 
       $proje_id = $_GET["proje_id"];

       $query = $db->prepare("SELECT * FROM projelerim WHERE proje_id=?");
       $query->execute(array($proje_id));
       $cek = $query->fetch(PDO::FETCH_ASSOC);
 
       ?>


	  
	  <div class="col-md-12 panel-primary">
			<div class="content-box-header panel-heading">
				<div class="panel-title ">Proje Düzenle</div>  
			</div>
			<div class="content-box-large box-with-header">
				<div class="row">
					<form action="islem.php?proje_id=<?php echo $cek["proje_id"]; ?>" method="POST" class="form-horizontal" role="form">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">İş Adı</label>
				    <div class="col-sm-9">
				      <input type="text" name="proje_adi" class="form-control" value="<?php echo $cek["proje_adi"];  ?>" >
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">İş Link</label>
				    <div class="col-sm-9">
				      <input type="text" name="proje_link" class="form-control" value="<?php echo $cek["proje_link"];  ?>" placeholder="İş linkini giriniz.">
				    </div>
				  </div>
				 
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Proje Açıklama</label>
				    <div class="col-sm-9">
				      <textarea class="form-control" name="proje_aciklama"  cols="30" rows="5" placeholder="Proje açıklamasını giriniz.">
				      	<?php echo $cek["proje_aciklama"]; ?>
				      </textarea>
				    </div>
				  </div>
				 
				 
				  <hr>

				  <div class="col-md-11">
				  	<button class="btn btn-success pull-right" name="proje-duzenle">Güncelle</button>
				  	
				  </div>
				  
				  
				</form>
					
				</div>
				
		    </div>
	  </div>
	  	

	  	
	  
	</div>
</div>

<!-- FOOTER -->
<?php include 'footer.php'; ?>