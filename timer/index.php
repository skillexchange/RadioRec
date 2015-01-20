<?php

header("Content-Type: text/html; charset=UTF-8");

$header = file_get_contents('./header.html');
$footer = file_get_contents('./footer.html');

echo $header;

// #set timer recording

echo '<form action="" method="GET" class="form-horizontal">

        <div class="control-group"> 

          <div class="controls">

          <p><input type="radio" name="frequency" value="weekly"><b>Weekly&nbsp;</b>
          <input type="checkbox"name="sun">Sun&nbsp;  
          <input type="checkbox"name="mon">Mon&nbsp;  
          <input type="checkbox"name="tue">Tue&nbsp;  
          <input type="checkbox"name="wed">Wed&nbsp;  
          <input type="checkbox"name="thu">Thu&nbsp;  
          <input type="checkbox"name="fri">Fri&nbsp;  
          <input type="checkbox"name="sat">Sat&nbsp;  
          <br>Starts at : 

          <select name="t" class="span1">';
          for ($t=0; $t<=24; $t++){
            echo '<option>'.$t.'</option>';
          }
          echo '</select>
 
          <select name="m" class="span1">';
          for ($m=0; $m<=59; $m++){
            echo '<option>'.$m.'</option>';
          }
          echo '</select>
          </p>

          <p><input type="radio" name="frequency" value="onetime"><b>One time&nbsp;</b>
          <br>Starts at : 
          <select name="y" class="span1">';
          for ($y=2015; $y<=2017; $y++){
            echo '<option>'.$y.'</option>';
          }   
          echo '</select>
    
          <select name="m" class="span1">';
          for ($m=1; $m<=12; $m++){
            $m=sprintf('%02d', $m);
            echo '<option>'.$m.'</option>';
          }
          echo '</select>
    
          <select name="d" class="span1">';
          for ($d=1; $d<=31; $d++){
            $d=sprintf('%02d', $d);
            echo '<option>'.$d.'</option>';
          }
          echo '</select>
 
          <select name="t" class="span1">';
          for ($t=0; $t<=24; $t++){
            echo '<option>'.$t.'</option>';
          }
          echo '</select>
 
          <select name="m" class="span1">';
          for ($m=0; $m<=59; $m++){
            echo '<option>'.$m.'</option>';
          }
          echo '</select>
          </p>
          </div>

          <hr>

          <div class="controls">
            <p>Duration : 
            <input type="text" name="duration" class="span1">
            (min)</p>
          </div>
          <div class="controls">
            <p>Channel : 
            <select name="channel" class="span2">
              <option>Inter FM</option>
              <option>J-WAVE</option>
            </p>
          </div>

          <div class="controls">
            <p>
              <input type="submit" value="submit" class="btn btn-primary btn-lg" role="button">
            </p>
          </div>

        </div>
     
      </form>';


// timer set format
// min hour day month day of the week "~/rec_radiko.sh" channel "~/Dropbox/Radio" prefix
// 00 8 * * 0 ~/rec_radiko.sh INT 183 ~/Dropbox/Radio WTF
// 00 15 * * 1,2,3,4,5 ~/rec_radiko.sh INT 181 ~/Dropbox/Radio RSG
// 00 23 * * 4 ~/rec_radiko.sh INT 61 ~/Dropbox/Radio KenRocks
// 14 10 26 12 * ~/rec_radiko.sh INT 1 ~/Dropbox/Radio test

echo $footer;

?>
