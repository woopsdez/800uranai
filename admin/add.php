<?php
extract($_POST);

if($hitokoto<>'' or $color<>'' or $item<>''){ //いずれかに引数が入っていれば
//DB接続
	mysql_connect('mysql106.heteml.jp','_800uranai','uso800');
	mysql_select_db('_800uranai');
	
	//登録
	mysql_query("insert into uranai values('$hitokoto','$color','$item',0)");
	$hitokoto = '';
	echo "データを登録しました。<br>";
	echo "登録を続けますか。 <a href='add.php'>つづける</a>";
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
	<h1>８００うらない 管理画面</h1>
	<h2>登録</h2>
	
	<form action="add.php" method="post">
		<dl>
			<dt>一言入力</dt>
			<dd><textarea name="hitokoto"></textarea></dd>
			<dt>ラッキーカラー</dt>
			<dd><input type="text" name="color"></dd>
			<dt>ラッキーアイテム</dt>
			<dd><input type="text" name="item"></dd>
		</dl>
		<p><input type="submit" value="submit"></p>
	</form>
	
	<p><a href="http://woopsdez.jp">まめこプロダクト</a></p>
</body>
</html>