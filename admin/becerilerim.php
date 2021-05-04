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
                if ($_GET["beceri-ekle"]=="bos") {
                	?>
            	    <div class="col-md-10">
			  		  <div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Boş alan bırakmayınız!</div>
			  	    </div>

                	<?php
                }elseif ($_GET["beceri-ekle"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
            
                }elseif ($_GET["beceri-ekle"]=="no") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz gerçekleştirilirken bir hata oluştu!</div>
			  	    </div>
                	<?php
                }elseif ($_GET["beceri-guncelle"]=="bos") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-warning"><span class="glyphicon glyphicon-remove"></span>Boş alan bırakmayınız!</div>
			  	    </div>

                	<?php
                }elseif ($_GET["beceri-guncelle"]=="no") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span>İşleminiz gerçekleştirilirken bir hata oluştu!</div>
			  	    </div>
                	<?php
                }elseif ($_GET["beceri-guncelle"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
                }elseif ($_GET["beceri-sil"]=="yes") {
                	?>
                	<div class="col-md-10">
			  		  <div class="alert alert-success"><span class="glyphicon glyphicon-check"></span>İşleminiz başarıyla gerçekleştirildi.</div>
			  	    </div>
                	<?php
                }elseif ($_GET["beceri-sil"]=="no") {
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
	  					<div class="panel-title ">Becerilerim</div>
	  					<div class="panel-options">
								<a href="beceri-ekle.php" data-rel="collapse" style="color: white" title="Beceri Ekle"><i class="glyphicon glyphicon-plus"></i></a>
								
						</div>  
		  			</div>
		  			<div class="content-box-large box-with-header">
		  				<div class="row">
			  				<table class="table">
				              <thead>
				                <tr>
				                  <th>#</th>
				                  <th>Beceri Adı</th>
				                  <th>Beceri Yüzde</th>
				                  <th width="200">İşlemler</th>
				                </tr>
				              </thead>
				              <tbody>
	                            <?php 
	                            $query = $db ->prepare("SELECT * FROM becerilerim ORDER BY beceri_id DESC");
	                            $query->execute();
	                            $cek = $query->fetchALL(PDO::FETCH_ASSOC);
	                            $say = $query->rowCount();


	                            foreach ($cek as $row) {
	                            	?>
	                            	<tr>
					                  <td><?php echo $row["beceri_id"]; ?> </td>
					                  <td><?php echo $row["beceri_adi"]; ?></td>
					                  <td><?php echo $row["beceri_yuzde"]; ?></td>
					                  <td>
					                  	<a href="beceri-duzenle.php?beceri_id=<?php echo $row["beceri_id"]; ?>"><button class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-edit"></span>Düzenle</button></a>
					                  	<a href="islem.php?becerisil_id=<?php echo $row["beceri_id"] ?>"><button class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span>Sil</button></a>
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