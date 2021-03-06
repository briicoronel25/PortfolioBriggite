<!DOCTYPE html>
<html>
<title>BC Portfolio</title>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/lightbox.css">
</head>

<body>

<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-white w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="index.php" target="_self" class="w3-bar-item w3-hover-white w3-button w3-hide-small">HOME</a>
    <a href="index.php#about" target="_self" class="w3-bar-item w3-hover-white w3-button w3-hide-small">ABOUT</a>
    <a href="index.php#photography" target="_self" class="w3-bar-item w3-hover-white w3-button w3-hide-small">PORTFOLIO</a>
    <a href="index.php#contact" target="_self" class="w3-bar-item w3-hover-white w3-button w3-hide-small">CONTACT</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="index.php#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="index.php#photography" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="index.php#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
  </div>
</div>
