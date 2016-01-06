<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
$age = 20;

if($age > 20) {
    // 条件の時の処理
    echo "飲酒可";
}

if($age <= 20) :
    // 条件の時の処理
    echo "飲酒不可";
endif;

echo "<br>";
$month = 1;
while($month <= 12) {
	echo $month ."<br>";
	$month++;
}

/** やっちゃダメ
$day = 1;
while(1) {
	echo $day ."<br>";
	$day++;
}
*/

?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>