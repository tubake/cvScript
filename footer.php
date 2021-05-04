  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<footer class="w3-container w3-<?php echo $ayarcek["site_renk"];  ?> w3-center w3-margin-top">
  <p>Sosyal Medya Hesapları</p>
  <?php

  $sosyalmedya= $db->prepare("SELECT * FROM sosyalmedya");
  $sosyalmedya->execute();
  $smcek = $sosyalmedya->fetch(PDO::FETCH_ASSOC); 

  ?>
  
  <?php 
  if ($smcek["sm_linkedin"]=="") {
    null;
  }else{
    ?>
    <a href="<?php echo $smcek["sm_linkedin"]; ?>" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    <?php
  }
   ?>

  <?php 
  if ($smcek["sm_instagram"]=="") {
    null;
  }else{
    ?>
    <a href="<?php echo $smcek["sm_instagram"]; ?>" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <?php
  }
   ?>


  <?php 
  if ($smcek["sm_pinterest"]=="") {
    null;
  }else{
    ?>
    <a href="<?php echo $smcek["sm_pinterest"]; ?>" target="_blank"><i class="fa fa-pinterest w3-hover-opacity"></i></a>
    <?php
  }
   ?>

  <?php 
  if ($smcek["sm_twitter"]=="") {
    null;
  }else{
    ?>
    <a href="<?php echo $smcek["sm_twitter"]; ?>" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <?php
  }
   ?>

  
  <?php 
  if ($smcek["sm_youtube"]=="") {
    null;
  }else{
    ?>
    <a href="<?php echo $smcek["sm_youtube"]; ?>" target="_blank"><i class="fa fa-youtube w3-hover-opacity"></i></a>
    <?php
  }
   ?>

  
  <p><?php  echo $ayarcek["site_footer"]; ?> <a href="<?php echo $ayarcek["site_url"]; ?>" target="_self">Tuba Bezek</a></p>
</footer>

</body>
</html>