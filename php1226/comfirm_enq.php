<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>


<form action="comfirm_enq.php" method="post">
<?php
$name=htmlspecialchars($_POST["name"]);
$email=htmlspecialchars($_POST['e-mail']);
$age=htmlspecialchars($_POST['age']);
$gender=htmlspecialchars($_POST['q1']);
$myhoby=htmlspecialchars($_POST['q2']);
?>
    名前：<?php echo $name ?><br>
    E-mail：<?php echo $email ?><br>
    年齢：<?php echo $age ?><br>
    性別：<?php echo $gender ?><br>
    趣味：<?php echo $myhoby ?><br>
    <input type="submit" />
</form>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>