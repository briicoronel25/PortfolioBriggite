<!-- Include config file -->
<?php include ('models/config.php');?>

<!-- Navbar (sit on top) -->
<?php include ('views/header.php');?>


<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-xlarge w3-wide w3-animate-opacity"></span>
    <img src="images/portfolio-logo-white.png" alt="logo" id="logo">
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT ME</h3>
  <p class="w3-center"><em>I love creativity</em></p>
  <!--<p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <!--<p><b><i class="fa fa-user w3-margin-right"></i>Briggite Coronel</b></p><br>-->
      <img src="images/photo13.png" class="w3-round w3-image" alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-container w3-padding-large">
      <p>Welcome to my Portfolio. My name is Briggite. I am a latin girl from Ecuador living in Canada... yeah, what a change!
        I have discover my passion about photography, modeling and also web development/design. I am also in love with makeup!
      I'm currently studig Interactive Media Design in London, Ontario. Join me in this journey while I keep experiencing, learning and puuting everything into practice to be one of the best! </p>
    </div>
  </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16"></div>

<!--Portfolio section-->
<div class="portfolio" class="w3-button">
<!-- PHOTOGRAPHY Second Parallax Image-->
<div class="bgimg-2 w3-display-container w3-opacity-min" id="photography">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PHOTOGRAPHY</span>
   <a href="photography.php" target="_blank"><button class="w3-button w3-display-middle w3-light-grey" style="margin-top:64px">LOAD MORE</button></a>
  </div>
</div>

<!-- DESIGN Container (Portfolio Section) -->
<div class="bgimg-3 w3-display-container w3-opacity-min" id="design">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">DESIGN</span>
   <a href="design.php" target="_blank"><button class="w3-button w3-display-middle w3-light-grey" style="margin-top:64px">LOAD MORE</button></a>
  </div>
</div>

<!-- MODELING Third Parallax Image with Portfolio Text -->
<div class="bgimg-4 w3-display-container w3-opacity-min" id="modeling">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">MODELING</span>
     <a href="modeling.php" target="_blank"><button class="w3-button w3-display-middle w3-light-grey" style="margin-top:64px">LOAD MORE</button></a>
  </div>
</div>
</div>
<!-- CONTACT Container (Contact Section) -->
<div class="w3-row w3-center w3-dark-grey w3-padding-16"></div>


<div class="bgimg-5 w3-display-container w3-opacity-min" id="contact">
  <div>
    <h3 class="w3-center">CONTACT ME</h3>
 </div>



  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-center" class="w3-row w3-padding-32 w3-section">


      <!--<div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> London On<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: 1 519.123.4567<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: myEmail@live.com<br>
      </div>-->
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
      <form action="send_mail.php" method="post">

        <div class="w3-row-padding" style="margin:50px -16px 8px -16px">

          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>

          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>

        </div>

        <input class="w3-half" class="w3-input w3-border" type="text" placeholder="Message" required name="Message">

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
