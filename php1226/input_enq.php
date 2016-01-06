<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form action="comfirm_enq.php" method="post">
	名前: <input type="text" name="name" /><br />
	E-mail: <input type="text" name="e-mail" /><br />
	年齢: <input type="text" name="age" />
    性別:<input type="radio" name="q1" value="男"> 男
        <input type="radio" name="q1" value="女"> 女<br />
    趣味:<input type="checkbox" name="q2[]" value="スポーツ"> スポーツ
        <input type="checkbox" name="q2[]" value="音楽"> 音楽
        <input type="checkbox" name="q2[]" value="プログラミング"> プログラミング
        <input type="checkbox" name="q2[]" value="ショッピング"> ショッピング
        <input type="checkbox" name="q2[]" value="その他"> その他<br />
    
	<input type="submit" />
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>