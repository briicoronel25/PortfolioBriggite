<?php

  // do some validation here to ensure id is safe
  function getTextContent($name){
    $con = new mysqli("localhost","diego529_brii","25Briicoroneld","diego529_db_portfolio");
    if (mysqli_connect_error()) {
      die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
    }
    $query= "SELECT * FROM tbl_text WHERE text_name=\"".$name."\"";
    $result= mysqli_query($con,$query);
    if(!$result){
      die("BAD QUERY!");
    }
    $row = $result->fetch_array();
    mysqli_close($con);
    echo $row[2];
  }
?>
