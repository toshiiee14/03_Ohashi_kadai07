<?php
//POSTの受け取りは$_POST["input名"]; 
$name = $_POST["name"];
$mail = $_POST["mail"];
$from = $_POST["from"];
$age = $_POST["age"];
$reason = $_POST["reason"];
$review = $_POST["review"];
//文字作成(日付)
$str = date("Y-m-d H:i:s");
//File書き込み
// ファイル読み込み
$file = fopen("data/data.txt","a");
//ファイルへの書き込み	
fwrite($file, "\n".$str."\t".$name."\t".$mail."\t".$from."\t".$age."\t".$reason."\t".$review."\t");

//ファイルを閉じる
fclose($file);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>ご協力有難うございました。</h2>

<ul>
    <li><a href="3.read.php">管理者画面</a></li>
</ul>

</body>
</html>