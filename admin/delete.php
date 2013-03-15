<?php
//魔法の言葉
extract($_POST);
extract($_GET);

//データベースに接続
mysql_connect('mysql106.heteml.jp','_800uranai','uso800');
mysql_select_db('_800uranai');

if($kakunin == "OK"){
	$sql = "delete from uranai where renban = $ren";
	mysql_query($sql);
	echo "<p>レコードの削除が完了しました。</p>";
	echo "<a href='index.php'>管理画面トップページへ戻る</a>";
	exit;
}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>８００（やおちょー）うらない 管理画面</title>
<link href="../style.css" rel="stylesheet" type="text/css">
<link href="../admin.css" rel="stylesheet" type="text/css">
</head>
<body>
	<h1>削除画面</h1>

<?php

//削除確認
$sql = "select * from uranai where renban = $id";
$result = mysql_query($sql);
$rows = mysql_num_rows($result);

//表示
if($rows == 0){
		echo "<p>該当データがありません。</p>";
	}else{
		while($row = mysql_fetch_array($result)){
		echo "
		<p>このレコードを削除します</p>
		<form action='delete.php' method='post'>
		<dl>
			<dt>連番</dt>
			<dd>".$row[renban]."</dd>
			<dt>一言入力</dt>
			<dd>".$row[hitokoto]."</dd>
			<dt>ラッキーカラー</dt>
			<dd>".$row[color]."</dd>
			<dt>ラッキーアイテム</dt>
			<dd>".$row[item]."</dd>
		</dl>
		<input type='hidden' name='ren' value='".$row[renban]."'>
		<p><input type='submit' name='kakunin' value='OK'></p>
		</form>";
		}
	}
?>

<hr>

</body>
</html>