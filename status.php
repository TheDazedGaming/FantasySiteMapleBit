
<?php
	echo  '';
        $fp = @fsockopen($serverip, $worldport, $errno, $errstr, 1);
	  if (!$fp) 
	{ echo '<img src="/offline.png"/>'; } else { echo '<img src="/online.png"/>'; }
        @fclose($fp);
		?>