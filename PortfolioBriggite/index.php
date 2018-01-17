<!-- Include config file -->
<?php include ('models/config.php');?>
<!-- Include textphp file -->
<?php include ('gettext.php');?>
<?php include ('getimage.php');?>

<!-- Navbar (sit on top) -->
<?php include ('views/header.php');?>


<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-xlarge w3-wide w3-animate-opacity"><img src="images/portfolio-logo-white.png" alt="logo" id="logo"></span>

  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <a href="#about" target="_self"></a>
  <h3 class="w3-center">ABOUT ME</h3>
  <p class="w3-center"><em>I love creativity</em></p>
  <!--<p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->

    <div class="w3-col m6 w3-center w3-padding-large">
      <img src="<?php getImage("Brii2-small");?>" class="w3-round w3-image" alt="Photo of Me" width="500" height="333">
    </div>

    <div class="w3-col m6 w3-container w3-padding-large">
      <p><?php getTextContent("Bio");?></p>
    </div>
  </div>

<!--Portfolio section-->
<div class="portfolio" class="w3-button">
<!-- PHOTOGRAPHY Second Parallax Image-->
<div class="bgimg-2 w3-display-container w3-opacity-min" id="photography">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PHOTOGRAPHY</span>
   <a href="photography.php" target="_self"> <button class="w3-button w3-display-middle w3-light-grey" style="margin-top:64px">VIEW MORE</button></a>
  </div>
</div>

<!-- DESIGN Container (Portfolio Section) -->
<div class="bgimg-3 w3-display-container w3-opacity-min" id="design">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">DESIGN</span>
   <a href="design.php" target="_self"><button class="w3-button w3-display-middle w3-light-grey" style="margin-top:64px">VIEW MORE</button></a>
  </div>
</div>

<!-- MODELING Third Parallax Image with Portfolio Text -->
<div class="bgimg-4 w3-display-container w3-opacity-min" id="modeling">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">MODELING</span>
     <a href="modeling.php" target="_self"><button class="w3-button w3-display-middle w3-light-grey" style="margin-top:64px">VIEW MORE</button></a>
  </div>
</div>
</div>

<!-- CONTACT Container (Contact Section) -->

<div class="bgimg-5 w3-center w3-display-container w3-opacity-min" id="contact">
  <div>
    <h2 class="w3-center">CONTACT ME</h3>
 </div>

  <h4 class="w3-center"><em>I'd love your feedback!</em></h4>

      <!--<div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> London On<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: 1 519.123.4567<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: myEmail@live.com<br>
      </div>-->
      <h4>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</h4>
      <form action="send_mail.php" method="post">

        <div class="w3-row-padding w3-center" style="margin:50px -16px 8px -16px">

          <div class="w3-center">
            <input class="w3-center" class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>

          <div class="w3-center">
            <input class="w3-center" class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>

        </div>

        <input class="w3-center" class="w3-input w3-border" type="text" placeholder="Message" required name="Message">

        <button class="w3-button w3-black w3-center w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>

  </div>
</div>

<!-- Footer -->
<?php include ('views/footer.php');?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="scripts/modal.js"></script>
