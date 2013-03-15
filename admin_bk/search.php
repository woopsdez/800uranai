<?php
extract($_POST);

//データベースに接続
mysql_connect('mysql106.heteml.jp','_800uranai','uso800');
mysql_select_db('_800uranai');

//ページ遷移後も選択したメニューを維持
if($fld == "hitokoto"){$s01 = "selected";}
if($fld == "color"){$s02 = "selected";}
if($fld == "item"){$s03 = "selected";}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>８００（やおちょー）うらない 管理画面</title>
</head>
<body>
	<h1>８００うらない 管理画面</h1>
	<h2>検索</h2>
	<form action="search.php" method="post">
		<dl>
		<dd>
			<select name="fld">
				<option value="hitokoto" <?php echo $s01?>>ひとこと</option>
				<option value="color" <?php echo $s02?>>ラッキーカラー</option>
				<option value="item" <?php echo $s03?>>ラッキーアイテム</option>
			</select>
			<input type="text" name="nam" value="<?php echo $nam?>">
		</dd>
		<dd><input type="submit" value="search"></dd>
		</dl>
	</form>
	
	<hr>
	<?php
	if($nam<>"" and $fld<>""){ //検索語句・セレクトメニューの値が入っている
		//fldに入ったテーブル名で検索
		$sql = "select * from uranai where $fld like '%$nam%'"; //SQL文を一旦$sqlに格納（長くなるから）
		$result = mysql_query($sql); //resultに格納
		$rows = mysql_num_rows($result);
			if($rows == 0){
				echo "<p>該当データがありません。</p>";
			}else{
				while($row = mysql_fetch_array($result)){
				echo "
					<dl>
						<dt>ひとこと</dt><dd>".$row["hitokoto"]."</dd>
						<dt>カラー</dt><dd>".$row["color"]."</dd>
						<dt>アイテム</dt><dd>".$row["item"]."</dd>
					</dl>
					<p>
						<a href='edit.php?id=".$row["renban"]."'>修正する</a> | 
						<a href='delete.php?id=".$row["renban"]."'>削除する</a>
					</p>";
				}
			}
		}
		?>
	<p><a href="http://woopsdez.jp">まめこプロダクト</a></p>
</body>
</html>