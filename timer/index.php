<?php

  header("Content-Type: text/html; charset=UTF-8");
  
  $header = file_get_contents('./header.html');
  $footer = file_get_contents('./footer.html');
  
  echo $header;
  
// #timer recording form
  
  echo '<form action="recset.php" method="POST" class="form-horizontal">
  
          <div class="control-group"> 
  
            <div class="controls">
              <p><input type="radio" name="frequency" value="weekly"><b>Weekly&nbsp;</b>
              <input type="checkbox" name="sun" value="0">Sun&nbsp;  
              <input type="checkbox" name="mon" value="1">Mon&nbsp;  
              <input type="checkbox" name="tue" value="2">Tue&nbsp;  
              <input type="checkbox" name="wed" value="3">Wed&nbsp;  
              <input type="checkbox" name="thu" value="4">Thu&nbsp;  
              <input type="checkbox" name="fri" value="5">Fri&nbsp;  
              <input type="checkbox" name="sat" value="6">Sat&nbsp; 
              </p>
              <p>Starts at : 
              <select name="hour" class="span1">';
              for ($h=0; $h<=23; $h++){
                $h=sprintf('%02d', $h);
                echo '<option>'.$h.'</option>';
              }
              echo '</select>
              <select name="min" class="span1">';
              for ($m=0; $m<=59; $m++){
                $m=sprintf('%02d', $m);
                echo '<option>'.$m.'</option>';
              }
              echo '</select>
              </p>
              <br>

              <p><input type="radio" name="frequency" value="onetime"><b>One time&nbsp;</b>
              </p>
              <p>Starts at : 
              <select name="month" class="span1">';
              for ($mo=1; $mo<=12; $mo++){
                $mo=sprintf('%02d', $mo);
                echo '<option>'.$mo.'</option>';
              }
              echo '</select>
              <select name="day" class="span1">';
              for ($d=1; $d<=31; $d++){
                $d=sprintf('%02d', $d);
                echo '<option>'.$d.'</option>';
              }
              echo '</select>
              <select name="hour2" class="span1">';
              for ($h2=0; $h2<=24; $h2++){
                $h2=sprintf('%02d', $h2);
                echo '<option>'.$h2.'</option>';
              }
              echo '</select>
              <select name="min2" class="span1">';
              for ($m2=0; $m2<=59; $m2++){
                $m2=sprintf('%02d', $m2);
                echo '<option>'.$m2.'</option>';
              }
              echo '</select>
              </p>

              <hr>

              <p>Duration : 
              <input type="text" name="duration" class="span1">
              (min)</p>
  
              <p>Channel : 
              <select name="channel" class="span2">
                <option value="INT">Inter FM</option>
                <option value="FMJ">J-WAVE</option>
              </select>
              </p>

              <p>File Name : 
              <input type="text" name="prefix" class="span1">
              (prefix)</p>
  
              <input type="submit" value="submit" class="btn btn-primary" role="button">

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
