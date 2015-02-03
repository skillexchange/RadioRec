<?php

  header("Content-Type: text/html; charset=UTF-8");

  $header = file_get_contents('./header.html');
  $footer = file_get_contents('./footer.html');
 
  echo $header;

  echo '<div class="control-group">
          <div class="controls">
            <p>Following command has been set in crontab : <br>
            '.$recset.'</p>
          </div>
        </div>';

  $crontext = fopen("recset.txt", "w");
  fwrite($crontext, "$recset");
  fclose($crontext);

  echo $footer;

?>
