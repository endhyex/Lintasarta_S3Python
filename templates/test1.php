<html>
<head></head>

<body>
<?php 

// shell_exec('schtasks /create /sc minute /tn "xampp" /tr "C:\xampp\htdocs\Lintasarta_S3Python\listbucketbd.py"');

// shell_exec('schtasks /run /tn "xampp"');

// shell_exec('schtasks /delete /tn "xampp" /F');

// $command = escapeshellcmd('C:\xampp\htdocs\Lintasarta_S3Python\listbucketbd.py 2>&1');
// $output=shell_exec($command);
// echo $output;

echo shell_exec('python C:\xampp\htdocs\Lintasarta_S3Python\listbucketbd.py 2>&1');

// $command = 'ls';
// exec($command, $out, $status);


// $arr1=[];
// $int1="";
// exec("dir", $arr1, $int1);

// print_r($arr1);

?> 
</body>
</html>