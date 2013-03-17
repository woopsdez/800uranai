<?php
extract($_POST);

//データベースに接続
mysql_connect('mysql106.heteml.jp','_800uranai','uso800');
mysql_select_db('_800uranai');

if($hitokoto<>'' or $color<>'' or $item<>''){ //いずれかに引数が入っていれば
	//登録
	mysql_query("insert into uranai values('$hitokoto','$color','$item',0)");
	$hitokoto = '';
	echo "データを登録しました。<br>";
	echo "登録を続けますか。 <a href='index.php'>つづける</a>";
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
<header>
<div class="inner">
  <h1><a href="../index.php"><img src="../images/800uranai.png" width="480" height="81" alt="八百長うらない"></a></h1>
<form action="search.php" method="post">
<section class="search"><p>
	<select name="fld">
		<option value="hitokoto" <?php echo $s01?>>ひとこと</option>
		<option value="color" <?php echo $s02?>>ラッキーカラー</option>
		<option value="item" <?php echo $s03?>>ラッキーアイテム</option>
	</select>
	<input type="text" name="nam" value="<?php echo htmlspecialchars($nam)?>">
	<input type="submit" value="search"></p>
</section>
</form>
</div>
</header>

<div class="wrapper">
<section id="post" class="left">
<h2>登録</h2>
	<form action="index.php" method="post">
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
</section>

<section id="recent" class="right">
	<h3>最近登録した項目 10件</h3>
	<?php
	//登録したレコード一覧を表示
	function dbcall($table){
			$sql = "select * from ".$table." order by renban desc limit 10"; 
			$result = mysql_query($sql); //取得した要素をresultに格納
			$rows = mysql_num_rows($result); //実行結果の行数を返す
			if($rows == 0){
				echo "<p>該当データがありません。</p>";
				}
				else{
					while($row = mysql_fetch_array($result))
					{
						echo "
							<div>				
								<dl>
									<dt>番号</dt><dd>".$row["renban"]."</dd>
									<dt>カラー</dt><dd>".htmlspecialchars($row[$table])."</dd>
								</dl>
								
								<p>
									<a href='edit.php?id=".$row["renban"]."'>修正する</a> | 
									<a href='delete.php?id=".$row["renban"]."'>削除する</a>
								</p>
							</div>";
					 }
				}
			};
	?>	
	<div class="box" id="hitokoto">	
	<h4>ヒトコト</h4>
	<?php dbcall("hitokoto"); ?>
	</div>
	<div class="box" id="color">	
	<h4>カラー</h4>
	<?php dbcall("color"); ?>
	</div>
	<div class="box" id="item">	
	<h4>カクテル</h4>
	<?php dbcall("item"); ?>
	</div>
</section>
	<p class="gototop"><a href="list.php">もっと見る</a></p>
</div>
	
<footer>
  <div class="inner">
  <p><a href="../index.php">八百長うらないへ</a></p>
  </div>
</footer>
</body>
</html>