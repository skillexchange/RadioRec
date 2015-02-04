<?php

  header("Content-Type: text/html; charset=UTF-8");

  $header = file_get_contents('./header.html');
  $footer = file_get_contents('./footer.html');
 
  echo $header;

 
  echo '<div class="control-group">
          <div class="controls">
            <p>Following command has been set in crontab : <br>
            '.$_POST["recset"].'</p>
          </div>
        </div>';

  $recset = $_POST["recset"];

  $crontext = fopen("/etc/cron.d/recset", "w");
  fwrite($crontext, "$recset");
  fclose($crontext);

  echo $footer;

?>
