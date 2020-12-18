<?php 

$command = escapeshellcmd('mail.py');
$output = shell_exec($command);
echo $output;

?>