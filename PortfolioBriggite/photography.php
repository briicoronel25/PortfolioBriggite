<?php include ('views/header.php');?>
<!-- Include config file -->
<?php include ('getimage.php');?>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="photography">

    <div class="w3-quarter">
      <a href="#img1">
        <img src="<?php getImage("Carla-small");?>" class="square" src="getimage.php?name=aslogo" alt="carla" style="width:100%">
      </a>
      <a href="#_" class="lightbox" id="img1">
        <img src="<?php getImage("Carla1");?>">
      </a>
    </div>

    <div class="w3-quarter">
      <a href="#img2">
        <img src="<?php getImage("Carla2-small");?>" class="square" src="getimage.php?name=aslogo" alt="carla2" style="width:100%">
      </a>
      <a href="#_" class="lightbox" id="img2">
        <img src="<?php getImage("Carla2");?>">
      </a>
    </div>

    <div class="w3-quarter">
      <a href="#img3">
        <img src="<?php getImage("Carla3-small");?>" class="square" src="getimage.php?name=aslogo" alt="carla3" style="width:100%">
      </a>
      <a href="#_" class="lightbox" id="img3">
        <img src="<?php getImage("Carla3");?>">
      </a>
    </div>

    <div class="w3-quarter">
      <a href="#img4">
        <img src="<?php getImage("Carla4-small");?>" class="square" src="getimage.php?name=aslogo" alt="carla4" style="width:100%">
      </a>
      <a href="#_" class="lightbox" id="img4">
        <img src="<?php getImage("Carla4");?>">
      </a>
    </div>
  </div>
</div>

<!-- Second Photo Grid-->
<div class="w3-row-padding w3-padding-16 w3-center" id="photography">

  <div class="w3-quarter">
    <a href="#img5">
      <img src="<?php getImage("place-small");?>" class="square" src="getimage.php?name=aslogo" alt="building" style="width:100%">
    </a>
    <a href="#_" class="lightbox" id="img5">
      <img src="<?php getImage("place");?>">
    </a>
  </div>

  <div class="w3-quarter">
    <a href="#img6">
      <img src="<?php getImage("place2-small");?>" class="square" src="getimage.php?name=aslogo" alt="building2" style="width:100%">
    </a>
    <a href="#_" class="lightbox" id="img6">
      <img src="<?php getImage("place2");?>">
    </a>
  </div>

  <div class="w3-quarter">
    <a href="#img7">
      <img src="<?php getImage("place3-small");?>" class="square" src="getimage.php?name=aslogo" alt="place" style="width:100%">
    </a>
    <a href="#_" class="lightbox" id="img7">
      <img src="<?php getImage("place3");?>">
    </a>
  </div>

  <div class="w3-quarter">
    <a href="#img8">
      <img src="<?php getImage("place4-small");?>" class="square" src="getimage.php?name=aslogo" alt="place2" style="width:100%">
    </a>
    <a href="#_" class="lightbox" id="img8">
      <img src="<?php getImage("place4");?>">
    </a>

  </div>
  </div>
</div>

<!-- Footer -->
<?php include ('views/footer.php');?>

</body>
</html>
