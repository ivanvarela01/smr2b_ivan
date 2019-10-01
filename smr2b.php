 <a href="http://192.168.0.182/Smr2b-miguel/Smr2b.php">Miguel</a>
Ivan
 <a href="http://192.168.0.177/smr2b_jesus/smr2b.php">jesus</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f)
?>