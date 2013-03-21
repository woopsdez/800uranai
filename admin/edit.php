<?php
//魔法の言葉
extract($_POST);
extract($_GET);

//データベースに接続
require_once("config.php");
mysql_connect($hostName,$userName,$password);
mysql_select_db($database);

//レコード修正
if (isset($hitokoto)){
	$sql = "update hitokoto set hitokoto = '$hitokoto', where renban ='$ren'";
	mysql_query($sql); //sql文実行
	$msg = "<p class=result>レコードの修正が完了しました</p>";
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
	</select>
	<input type="text" name="nam" value="<?php echo htmlspecialchars($nam)?>">
	<input type="submit" value="search"></p>
</section>
</form>
</div>
</header>

<div class="wrapper">
<section id="edit">
<h2>登録したデータを修正する</h2>
<div><?php echo $msg; ?></div>
	<?php
	
	//修正用フォーム
	$sql = "select * from hitokoto where renban = $ren";
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
						<dt>ひとこと</dt>
						<dd><textarea name='hitokoto'>".$row[hitokoto]."</textarea></dd>
					</dl>
					<p><input type='submit' value='submit' name='OK' value='OK'></p>
					<input type='hidden' name='ren' value='".$row[renban]."'>
				</form>";
			}	
		}
	?>
</section>
<p class="gototop"><a href="index.php">もっと見る</a></p>
</div>
	
<footer>
  <div class="inner">
  <p><a href="../index.php">八百長うらないへ</a></p>
  </div>
</footer>
</body>
</html>