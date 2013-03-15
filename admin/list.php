<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>８００（やおちょー）うらない 管理画面</title>
<link href="../style.css" rel="stylesheet" type="text/css">
<link href="../admin.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- レコード一覧 -->
	<h3>一覧</h3>
	<?php
	//データベースに接続
	mysql_connect('mysql106.heteml.jp','_800uranai','uso800');
	mysql_select_db('_800uranai');
		
	//登録したレコード一覧を表示
	$sql = "select * from uranai"; 
	$result = mysql_query($sql); //　　　　　　　　ｎ取得した要素をresultに格納
	$rows = mysql_num_rows($result); //実行結果の行数を返す
		if($rows == 0){
			echo "<p>該当データがありません。</p>";
		}
		else{
			while($row = mysql_fetch_array($result))
			{
			echo "
				<dl>
					<dt>番号</dt><dd>".htmlspecialchars($row["renban"])."</dd>
					<dt>ひとこと</dt><dd>".htmlspecialchars($row["hitokoto"])."</dd>
					<dt>カラー</dt><dd>".htmlspecialchars($row["color"])."</dd>
					<dt>アイテム</dt><dd>".htmlspecialchars($row["item"])."</dd>
				</dl>
				<p>
					<a href='edit.php?id=".$row["renban"]."'>修正する</a> | 
					<a href='delete.php?id=".$row["renban"]."'>削除する</a>
				</p>";
		}
	}
	?>
</body>
</html>