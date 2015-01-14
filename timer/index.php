<?php

echo $header;

// #timer setting

echo '<form action="" method="GET" class="form-horizontal">

        <div class="control-group">
          <label class="control-label" for="inputtag">Tag</label>
          <div class="controls">
            <input type="text" id="inputtag" name="tag" class="span3 search-query" placeholder="type tag">
          </div>
        </div>

        <div class="control-group"> 
          <label class="control-label">From</label>
          <div class="controls">

          <select name="y1" class="span1">';
          for ($sy=2013; $sy>=1973; $sy--){
            echo '<option>'.$sy.'</option>';
          }   
          echo '</select>
    
          <select name="m1" class="span1">';
          for ($sm=1; $sm<=12; $sm++){
            $sm=sprintf('%02d', $sm);
            echo '<option>'.$sm.'</option>';
          }
          echo '</select>
    
          <select name="d1" class="span1">';
          for ($sd=1; $sd<=31; $sd++){
            $sd=sprintf('%02d', $sd);
            echo '<option>'.$sd.'</option>';
          }
          echo '</select>
          
          </div>
          </label>
        </div>

        <div class="control-group"> 
          <label class="control-label">To</label>
          <div class="controls">

          <select name="y2" class="span1">';
          for ($ey=2013; $ey>=1973; $ey--){
            echo '<option>'.$ey.'</option>';
          }   
          echo '</select>
    
          <select name="m2" class="span1">';
          for ($em=1; $em<=12; $em++){
            $em=sprintf('%02d', $em);
            echo '<option>'.$em.'</option>';
          }
          echo '</select>
    
          <select name="d2" class="span1">';
          for ($ed=1; $ed<=31; $ed++){
            $ed=sprintf('%02d', $ed);
            echo '<option>'.$ed.'</option>';
          }
          echo '</select>
          
          </div>
          </label>
        </div>


<!--
      <font>Start Date (yyyy/mm/dd)</font>
      <input type="text" name="y1"><font>/</font> 
      <input type="text" name="m1"><font>/</font> 
      <input type="text" name="d1"><br> 
      <font>End Date (yyyy/mm/dd)</font>
      <input type="text" name="y2"><font>/</font>
      <input type="text" name="m2"><font>/</font>
      <input type="text" name="d2"><br> 
-->
      <div class="control-group">
        <div class="controls">
          <button class="btn btn-primary" type="submit" value="submit">Search</button>
        </div>
      </div>
     
      </form>';

$request_tag = $_GET["tag"];
$request_tag = urlencode($request_tag);
// echo 'Tag: '.$request_tag.'<br>';

$request_sdate = $_GET["y1"].$_GET["m1"].$_GET["d1"];
$request_edate = $_GET["y2"].$_GET["m2"].$_GET["d2"];
// echo 'Duration: '.$request_sdate.' ~ '.$request_edate.'<br>';

date_default_timezone_set('Asia/Tokyo');
$min_t = strtotime($request_sdate);
$max_t = strtotime($request_edate);

$f = file_get_contents('http://api.flickr.com/services/rest/?method=flickr.photos.search&api_key='.$apikey.'&tags='.$request_tag.'&min_taken_date='.$min_t.'&max_taken_date='.$max_t.'&format=json&nojsoncallback=1');

// user_id me = 15275097@N00

$f = json_decode($f, true);

echo '<div class="control-group" align="center">
        <div class="controls">';

$i=1;
foreach($f["photos"]["photo"] as $key1 => $val1){
  echo '<img src = "http://farm'.$val1["farm"].'.staticflickr.com/'.$val1["server"].'/'.$val1["id"].'_'.$val1["secret"].'_m.jpg">';
    if(($i%4)==0){
      echo '<br>';
    }
  $i++;   
}

echo '</div>
      </div>'; 

echo $footer;

?>

