
<?php include ('views/header.php');
      include ('getimage.php');
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="design">

    <div class="w3-quarter">
      <a href="#img1">
        <img src="<?php getImage("Infinito");?>" class="square" alt="aslogo" style="width:100%">
      </a>
      <p>Infinito. Agency site we did in group school project. </p>
      <a href="#_" class="lightbox slides" id="img1">
        <img src="<?php getImage("Infinito2");?>">
        <img src="<?php getImage("Infinito3");?>">
        <img src="<?php getImage("Infinito4");?>">
        <img src="<?php getImage("Infinito5");?>">
        <img src="<?php getImage("Infinito6");?>">
      </a>
    </div>

    <div class="w3-quarter">
      <a href="#img2">
        <img src="<?php getImage("Crunican");?>"class="square" alt="crunican" style="width:100%">
      </a>
      <p>Crunican Orchards. Logo design for a company. </p>
      <a href="#_" class="lightbox" id="img2">
        <img src="<?php getImage("Crunican");?>">
      </a>
    </div>

    <div class="w3-quarter">
      <a href="#img3">
        <img src="<?php getImage("NFL LOGO");?>"class="square" alt="julio" style="width:100%">
      </a>
      <p>Julio Jones website. Website design for an NFL player, Julio Jones.</p>
      <a href="#_" class="lightbox" id="img3">
        <img src="<?php getImage("NFL");?>">
      </a>
    </div>
    <div class="w3-quarter">

      <a href="#img4">
        <img src="<?php getImage("LOTR SMALL");?>"class="square" src="getimage.php?name=aslogo" alt="lotr" style="width:100%">
      </a>
      <p>Lord of the Rings. Webiste final project for Lord of the Rings.</p>
      <a href="#_" class="lightbox" id="img4">
        <img src="<?php getImage("LOTR");?>">
      </a>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include ('views/footer.php');?>

</body>
</html>
