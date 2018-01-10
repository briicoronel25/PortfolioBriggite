<?php
  $name = $_GET['name'];
  // do some validation here to ensure id is safe
  echo "<h1> accesing databse </h1>".$name;
  $con = new mysqli("localhost","root","root","bio_db");
  if (mysqli_connect_error()) {
    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  }
  echo "<h1> Onto database</h1>";
  $query= "SELECT * FROM  images WHERE name=\"".$name."\"";
  echo $query;
  $result= mysqli_query($con,$query);
  if(!$result){
    die("BAD QUERY!");
  }
  $row = $result->fetch_array();
  mysqli_close($con);
  header("Content-type: image/jpeg");
  echo $row[3];
?>