
<!-- HEADER -->
<?php include 'header.php'; ?>


    <div class="page-content">
    	<div class="row">

		  <!-- SIDEBAR -->
		  <?php include 'sidebar.php'; ?>

		  <!-- END SIDEBAR -->

		  <!-- İŞLEM SONRASI ALERTLER -->

		    <div class="col-md-10">
	            
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

	        </div>
                
             <!-- END İŞLEM SONRASI  ALERT -->

                <!-- CONTENT-->

		  		<div class="col-md-10 panel-primary">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Genel Ayarlar</div>  
		  			</div>
		  			<div class="content-box-large box-with-header">
		  				<div class="row">
		  					<form action="islem.php?site_id=<?php echo $id; ?>" method="POST" class="form-horizontal" role="form">
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Site Title</label>
							    <div class="col-sm-9">
							      <input type="text" name="site_title" class="form-control" value="<?php echo $ayarcek["site_title"]; ?>" >
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputPassword3" class="col-sm-2 control-label">Site URL</label>
							    <div class="col-sm-9">
							      <input type="text" name="site_url" class="form-control" value="<?php echo $ayarcek["site_url"]; ?>">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Site Description</label>
							    <div class="col-sm-9">
							      <input type="text" name="site_desc" class="form-control" value="<?php echo $ayarcek["site_desc"]; ?>" >
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Site Keywords</label>
							    <div class="col-sm-9">
							      <input type="text" name="site_keyw" class="form-control" value="<?php echo $ayarcek["site_keyw"]; ?>" >
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Site Footer</label>
							    <div class="col-sm-9">
							      <input type="text" name="site_footer" class="form-control" value="<?php echo $ayarcek["site_footer"]; ?>" required>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail3" class="col-sm-2 control-label">Site Renk</label>
							    <div class="col-sm-9">
							      <select name="site_renk" class="form-control">
							      	<option value="red"<?php echo $ayarcek["site_renk"]=="red" ? "selected" : null; ?>>Red</option>
							      	<option value="pink"<?php echo $ayarcek["site_renk"]=="pink" ? "selected" : null; ?>>Pink</option>
							      	<option value="purple"<?php echo $ayarcek["site_renk"]=="purple" ? "selected" : null; ?>>Purple</option>
							      	<option value="indigo"<?php echo $ayarcek["site_renk"]=="indigo" ? "selected" : null; ?>>Indigo</option>
							      	<option value="blue"<?php echo $ayarcek["site_renk"]=="blue" ? "selected" : null; ?>>Blue</option>
							      	<option value="cyan"<?php echo $ayarcek["site_renk"]=="cyan" ? "selected" : null; ?>>Cyan</option>
							      	<option value="aqua"<?php echo $ayarcek["site_renk"]=="aqua" ? "selected" : null; ?>>Aqua</option>
							      	<option value="teal"<?php echo $ayarcek["site_renk"]=="teal" ? "selected" : null; ?>>Teal</option>
							      	<option value="green"<?php echo $ayarcek["site_renk"]=="green" ? "selected" : null; ?>>Green</option>
							      	<option value="orange"<?php echo $ayarcek["site_renk"]=="orange" ? "selected" : null; ?>>Orange</option>
							      	<option value="yellow"<?php echo $ayarcek["site_renk"]=="yellow" ? "selected" : null; ?>>Yellow</option>
							      	<option value="gray"<?php echo $ayarcek["site_renk"]=="gray" ? "selected" : null; ?>>Gray</option>
							      	<option value="brown"<?php echo $ayarcek["site_renk"]=="brown" ? "selected" : null; ?>>Brown</option>
							      	<option value="black"<?php echo $ayarcek["site_renk"]=="black" ? "selected" : null; ?>>Black</option>
							      	<option value="amber"<?php echo $ayarcek["site_renk"]=="amber" ? "selected" : null; ?>>Amber</option>
							      	<option value="deep-orange"<?php echo $ayarcek["site_renk"]=="deep-orange" ? "selected" : null; ?>>Deep-Orange</option>
							      </select>
							    </div>
							  </div>

							  <hr>

							  <div class="col-md-11">
							  	<button class="btn btn-success pull-right" name="genel-ayarlar">Güncelle</button>
							  	
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