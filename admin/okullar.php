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
                if ($_GET["okul-ekle"]=="bos") {
                	?>
            	    <div class="col-md-10">
			  		  <div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Boş alan bırakmayınız!</div>
			  	    </div>

                	<?php
                }elseif ($_GET["okul-ekle"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
            
                }elseif ($_GET["okul-ekle"]=="no") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz gerçekleştirilirken bir hata oluştu!</div>
			  	    </div>
                	<?php
                }elseif ($_GET["okul-guncelle"]=="bos") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Boş alan bırakmayınız!</div>
			  	    </div>

                	<?php
                }elseif ($_GET["okul-guncelle"]=="no") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz gerçekleştirilirken bir hata oluştu!</div>
			  	    </div>
                	<?php
                }elseif ($_GET["okul-guncelle"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
                }elseif ($_GET["okul-sil"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
                }elseif ($_GET["okul-sil"]=="no") {
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

                $query = $db->prepare("SELECT * FROM okullar ORDER BY okul_id DESC");
                $query->execute();
                $cek = $query->fetch(PDO::FETCH_ASSOC);

                 ?>


                <!-- CONTENT -->
		  		<div class="col-md-12 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Okullarım</div>
	  					<div class="panel-options">
								<a href="okul-ekle.php" data-rel="collapse" style="color: white" title="Okul Ekle"><i class="glyphicon glyphicon-plus"></i></a>		
						</div>  
		  			</div>
		  			<div class="content-box-large box-with-header">
		  				<div class="row">
			  				<table class="table">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>Okul Adı</th>
				                  <th>Okul Açıklama</th>
				                  <th>Okul Durum</th>
				                  <th width="200">Okullarım</th>
				                </tr>
				              </thead>
				              <tbody>
	                            <?php 
	                            $query = $db ->prepare("SELECT * FROM okullar ORDER BY okul_id ");
	                            $query->execute();
	                            $cek = $query->fetchALL(PDO::FETCH_ASSOC);
	                            $say = $query->rowCount();


	                            foreach ($cek as $row) {
	                            	?>
	                            	<tr>
					                  <td><?php echo $row["okul_id"]; ?> </td>
					                  <td><?php echo $row["okul_adi"]; ?></td>
					                  <td><?php echo $row["okul_aciklama"]; ?></td>
					                  <td>
					                  	<?php 
					                  	if ($row["okul_devam"]==1) {
					                  		?>
					                  		<span class="glyphicon glyphicon-check"></span>
					                  		<?php
					                  	}else{
					                  		?>
					                  		<span class="glyphicon glyphicon-remove"></span>
					                  		<?php
					                  	}


					                  	 ?>
					                  	
					                  </td>
					                  <td>
					                  	<a href="okul-duzenle.php?okul_id=<?php echo $row["okul_id"]; ?>"><button class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit"></span>Düzenle</button></a>
					                  	<a href="islem.php?okulsil_id=<?php echo $row["okul_id"] ?>"><button class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span>Sil</button></a>
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