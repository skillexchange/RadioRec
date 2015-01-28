<?php

  $dow = array();

  if (isset($_POST["sun"])){
    array_push($dow, $_POST["sun"]);
  }
  if (isset($_POST["mon"])){
    array_push($dow, $_POST["mon"]);
  }
  if (isset($_POST["tue"])){
    array_push($dow, $_POST["tue"]);
  }
  if (isset($_POST["wed"])){
    array_push($dow, $_POST["wed"]);
  }
  if (isset($_POST["thu"])){
    array_push($dow, $_POST["thu"]);
  }
  if (isset($_POST["fri"])){
    array_push($dow, $_POST["fri"]);
  }
  if (isset($_POST["sat"])){
    array_push($dow, $_POST["sat"]);
  }
  if (isset($dow)){
    $dow = implode(",",$dow);
  }
  else {
    array_push($dow, "*");
  }

  if ($_POST["frequency"] == "weekly"){
    $recset = $_POST["min"]." ".$_POST["hour"]." * * ".$dow." ~/rec_radiko.sh ".$_POST["channel"]." ".$_POST["duration"]." ~/Dropbox/Radio ".$_POST["prefix"];
    echo $recset;
  }
  elseif ($_POST["frequency"] == "onetime"){
    $recset = $_POST["min2"]." ".$_POST["hour2"]." ".$_POST["day"]." ".$_POST["month"]." ".$dow." ~/rec_radiko.sh ".$_POST["channel"]." ".$_POST["duration"]." ~/Dropbox/Radio ".$_POST["prefix"];
    echo $recset;
  }

?>
