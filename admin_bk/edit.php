<?php
//魔法の言葉
extract($_POST);
extract($_GET);

//データベースに接続
mysql_connect('mysql106.heteml.jp','_800uranai','uso800');
mysql_select_db('_800uranai');

//レコード修正
if($hitokoto<>"" or $color<>"" or $item<>""){
	$sql = "update uranai set
		hitokoto = '$hitokoto',
		color = '$color',
		item = '$item'
		where renban ='$ren'
	";
	mysql_query($sql); //sql文実行
	echo "レコードの修正が完了しました<br>
		<dl>
			<dt>連番</dt>
			<dd>".$ren."</dd>
			<dt>一言入力</dt>
			<dd>".$hitokoto."</dd>
			<dt>ラッキーカラー</dt>
			<dd>".$color."</dd>
			<dt>ラッキーアイテム</dt>
			<dd>".$item."</dd>
		</dl>		
		<a href='search.php'>検索へ戻る</a>";
exit;
}
?>

<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html lang='ja'>
<head>
	<meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
	<title>人生なんて出来レース！強く生きよう８００（やおちょー）うらない</title>
	</head>
<body>
	<h1>修正画面</h1>
	<?php
	
	//修正用フォーム
	$sql = "select * from uranai where renban = $id";
	$result = mysql_query($sql);
	$rows = mysql_num_rows($result);
		if($rows == 0){
			echo "<p>該当データがありません。</p>";
		}else{
			while($row = mysql_fetch_array($result)){
				echo "
				<p>データを修正してください</p>
				<form action='edit.php' method='post'>
					<dl>
						<dt>連番</dt>
						<dd>".$row[renban]."</dd>
						<dt>一言入力</dt>
						<dd><textarea name='hitokoto'>".$row[hitokoto]."</textarea></dd>
						<dt>ラッキーカラー</dt>
						<dd><input type='text' name='color' value='".$row[color]."'></dd>
						<dt>ラッキーアイテム</dt>
						<dd><input type='text' name='item' value='".$row[item]."'></dd>
					</dl>
					<p><input type='submit' value='submit' name='OK' value='OK'></p>
					<input type='hidden' name='ren' value='".$row[renban]."'>
				</form>";
			}	
		}
	?>
	<hr>

</body>
</html>