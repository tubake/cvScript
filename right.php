    <div class="w3-twothird">

      <!--WORK EXPERİENCE -->
      <div class="w3-container w3-card w3-white ">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-<?php echo $ayarcek["site_renk"];  ?>"></i>Work Experience</h2>

        <?php 

        $islerim = $db->prepare("SELECT * FROM islerim");
        $islerim->execute();
        $iscek = $islerim->fetchALL(PDO::FETCH_ASSOC);

        foreach ($iscek as $row) {

          if ($row["is_devam"]==1) {
            ?>
            <hr>
             <div class="w3-container">
              <h5 class="w3-opacity"><b><?php echo $row["is_adi"]; ?> - <?php echo $row["is_link"]; ?></b></h5>
              <h6 class="w3-text-<?php echo $ayarcek["site_renk"];  ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["is_tarih"]; ?><span class="w3-tag w3-<?php echo $ayarcek["site_renk"];  ?> w3-round">Current</span></h6>
              <p><?php echo $row["is_aciklama"]; ?>.</p>
              
            </div>

            <?php
          }else{

          ?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $row["is_adi"]; ?> - <?php echo $row["is_link"]; ?></b></h5>
            <h6 class="w3-text-<?php echo $ayarcek["site_renk"];  ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["is_tarih"]; ?><!-- <span class="w3-tag w3-<?php echo $ayarcek["site_renk"];  ?> w3-round">Current</span> --></h6>
            <p><?php echo $row["is_aciklama"]; ?>.</p>
           
          </div>

          <?php
        }
        }
 

        ?>

        

        <!-- <div class="w3-container">
          <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"];  ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          
        </div>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"];  ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
        </div> -->

      </div>


      <!--EDUCATİON -->
      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-<?php echo $ayarcek["site_renk"];  ?>"></i>Education</h2>
        <?php 

         $okullar = $db->prepare("SELECT * FROM okullar ORDER BY okul_id ");
         $okullar->execute();
         $okulcek = $okullar->fetchALL(PDO::FETCH_ASSOC);

         foreach ($okulcek as $row) {
          if ($row["okul_devam"]==1) {
            ?> 
            <hr>
            <div class="w3-container">
              <h5 class="w3-opacity"><b><?php echo $row["okul_adi"]; ?></b></h5>
              <h6 class="w3-text-<?php echo $ayarcek["site_renk"];  ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["okul_tarih"]; ?></h6>
              <p><?php echo $row["okul_aciklama"]; ?></p>
            </div>

           <?php
          }else{
           ?>
           <hr> 
            <div class="w3-container">
              <h5 class="w3-opacity"><b><?php echo $row["okul_adi"]; ?></b></h5>
              <h6 class="w3-text-<?php echo $ayarcek["site_renk"];  ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["okul_tarih"]; ?></h6>
              <p><?php echo $row["okul_aciklama"]; ?></p>
              
            </div>

           <?php
         }
        }


        ?>
        

        

        <!-- <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"];  ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
      
        </div>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-<?php echo $ayarcek["site_renk"];  ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div> -->

      </div>

      <!--PROJECTS -->
      <div class="w3-container w3-card w3-white ">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-code fa-fw w3-margin-right w3-xxlarge w3-text-<?php echo $ayarcek["site_renk"];  ?>"></i>Projects</h2>
        <?php 

         $projelerim = $db->prepare("SELECT * FROM projelerim");
         $projelerim->execute();
         $projecek = $projelerim->fetchALL(PDO::FETCH_ASSOC);

         foreach ($projecek as $row) {
          ?> 
          <hr>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $row["proje_adi"]; ?></b></h5>
            <h6 class="w3-text-<?php echo $ayarcek["site_renk"];  ?>"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $row["proje_link"]; ?></h6>
            <p><?php echo $row["proje_aciklama"]; ?></p>
          </div>

         <?php
          
         }


        ?>
        
      </div>

    </div>