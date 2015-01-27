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
  else {
    array_push($dow, "*");
  }
  if (isset($dow)){
    $dow = implode(",",$dow );
  }

  if ($_POST["frequency"] == "weekly"){
    $recset = $_POST["m"]." ".$_POST["t"]." * * ".$dow." ~/rec_radiko.sh ".$_POST["channel"]." ".$_POST["duration"]." ~/Dropbox/Radio ".$_POST["prefix"];
    echo $recset;
  }


?>
