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
                if ($_GET["proje-ekle"]=="bos") {
                	?>
            	    <div class="col-md-10">
			  		  <div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Boş alan bırakmayınız!</div>
			  	    </div>

                	<?php
                }elseif ($_GET["proje-ekle"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
            
                }elseif ($_GET["proje-ekle"]=="no") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz gerçekleştirilirken bir hata oluştu!</div>
			  	    </div>
                	<?php
                }elseif ($_GET["proje-guncelle"]=="bos") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Boş alan bırakmayınız!</div>
			  	    </div>

                	<?php
                }elseif ($_GET["proje-guncelle"]=="no") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz gerçekleştirilirken bir hata oluştu!</div>
			  	    </div>
                	<?php
                }elseif ($_GET["proje-guncelle"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
                }elseif ($_GET["proje-sil"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
                }elseif ($_GET["proje-sil"]=="no") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz gerçekleştirilirken bir hata oluştu!</div>
			  	    </div>
                	<?php
                }

                ?>
                <!-- END ALERT UYARI BÖLMESİ -->
              

                <!-- CONTENT -->
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Projelerim</div>
	  					<div class="panel-options">
								<a href="proje-ekle.php" data-rel="collapse" style="color: white" title="İş Ekle"><i class="glyphicon glyphicon-plus"></i></a>
								
						</div>  
		  			</div>
		  			<div class="content-box-large box-with-header">
		  				<div class="row">
			  				<table class="table">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>Proje Adı</th>
				                  <th>Proje Link</th>
				                  <th>Proje Açıklama</th>
				                  <th width="200">Projelerim</th>
				                </tr>
				              </thead>
				              <tbody>
	                            <?php 
	                            $query = $db ->prepare("SELECT * FROM projelerim ORDER BY proje_id DESC");
	                            $query->execute();
	                            $cek = $query->fetchALL(PDO::FETCH_ASSOC);
	                            $say = $query->rowCount();


	                            foreach ($cek as $row) {
	                            	?>
	                            	<tr>
					                  <td><?php echo $row["proje_id"]; ?></td>
					                  <td><?php echo $row["proje_adi"]; ?></td>
					                  <td><?php echo $row["proje_link"]; ?></td>
					                  <td><?php echo $row["proje_aciklama"]; ?></td>
					            
					                  <td>
					                  	<a href="proje-duzenle.php?proje_id=<?php echo $row["proje_id"]; ?>"><button class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit"></span>Düzenle</button>
					                  	</a>
					                  	<a href="islem.php?projesil_id=<?php echo $row["proje_id"] ?>"><button class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span>Sil</button>
					                  	</a>
					                  </td>
					                </tr>

	                            	<?php
	                            }

	                            ?>


				              </tbody>
				            </table>
		  					
		  				</div>
			  			
					</div>
		  		</div>
		  	</div>

		  	
		  </div>
		</div>
    </div>

<!-- FOOTER -->
<?php include 'footer.php'; ?>