<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>

thanks

<?php
 $array = array($name, $email, $age, $gender, $myhoby)
$file = fopen("data/data.csv","a");	// ファイル読み込み
flock($file, LOCK_EX);			// ファイルロック
fputs($file, $array . PHP_EOL);
flock($file, LOCK_UN);			// ファイルロック解除
fclose($file);
?>
<ul>
<li><a href="index.php">index.php</a></li>
<li><a href="index.php">show_enp.php</a></li>
</ul>

</body>
</html>