<?php
// $command = escapeshellcmd('/mnt/c/xampp/htdocs/Lintasarta_S3Python/listbucketbd.py');
// $output = shell_exec($command);
// // echo "<pre>";
// echo $output;
// // echo "</pre>";

$output = shell_exec('ls -l');
echo "<pre>";
echo $output;
echo "</pre>";
?> 