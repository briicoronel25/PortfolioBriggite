<?php include ('views/header.php');?>
<!-- Include config file -->
<?php include ('getimage.php');?>
<!--page content-->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

<!-- First Photo Grid-->
<div class="w3-row-padding w3-padding-16 w3-center" id="modeling">

  <div class="w3-quarter">
    <a href="#img1">
      <img src="<?php getImage("Brii1-small");?>" class="square" src="getimage.php?name=aslogo" alt="brii" style="width:100%">
    </a>
    <a href="#_" class="lightbox" id="img1">
      <img src="<?php getImage("Brii1");?>">
    </a>
  </div>

  <div class="w3-quarter">
    <a href="#img2">
      <img src="<?php getImage("Brii2-small");?>" class="square" src="getimage.php?name=aslogo" alt="brii2" style="width:100%">
    </a>
    <a href="#_" class="lightbox" id="img2">
      <img src="<?php getImage("Brii2");?>">
    </a>
  </div>

  <div class="w3-quarter">
    <a href="#img3">
      <img src="<?php getImage("Brii3-small");?>" class="square" src="getimage.php?name=aslogo" alt="brii3" style="width:100%">
    </a>
    <a href="#_" class="lightbox" id="img3">
      <img src="<?php getImage("Brii3");?>">
    </a>
  </div>

  <div class="w3-quarter">
    <a href="#img4">
      <img src="<?php getImage("Brii4-small");?>" class="square" src="getimage.php?name=aslogo" alt="carla4" style="width:100%">
    </a>
    <a href="#_" class="lightbox" id="img4">
      <img src="<?php getImage("Brii4");?>">
    </a>
  </div>
</div>
</div>

<!-- Second Photo Grid-->
<div class="w3-row-padding w3-padding-16 w3-center" id="modeling">

<div class="w3-quarter">
  <a href="#img5">
    <img src="<?php getImage("Brii5-small");?>" class="square" src="getimage.php?name=aslogo" alt="brii5" style="width:100%">
  </a>
  <a href="#_" class="lightbox" id="img5">
    <img src="<?php getImage("Brii5");?>">
  </a>
</div>

<div class="w3-quarter">
  <a href="#img6">
    <img src="<?php getImage("Brii6-small");?>" class="square" src="getimage.php?name=aslogo" alt="brii6" style="width:100%">
  </a>
  <a href="#_" class="lightbox" id="img6">
    <img src="<?php getImage("Brii6");?>">
  </a>
</div>

<div class="w3-quarter">
  <a href="#img7">
    <img src="<?php getImage("Brii7-small");?>" class="square" src="getimage.php?name=aslogo" alt="brii7" style="width:100%">
  </a>
  <a href="#_" class="lightbox" id="img7">
    <img src="<?php getImage("Brii7");?>">
  </a>
</div>

<div class="w3-quarter">
  <a href="#img8">
    <img src="<?php getImage("Brii8-small");?>" class="square" src="getimage.php?name=aslogo" alt="brii8" style="width:100%">
  </a>
  <a href="#_" class="lightbox" id="img8">
    <img src="<?php getImage("Brii8");?>">
  </a>
</div>
</div>
</div>


<!-- Footer -->
<?php include ('views/footer.php');?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="scripts/modal.js"></script>

</body>
</html>
