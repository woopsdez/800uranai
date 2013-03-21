<?php
//魔法の言葉
extract($_POST);
extract($_GET);

//データベースに接続
require_once("config.php");
mysql_connect($hostName,$userName,$password);
mysql_select_db($database);

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
<section id="delete">
<h2>削除画面</h2>
<?php

//削除確認
$sql = "select * from hitokoto where renban = $id";
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
			<dt>ひとこと</dt>
			<dd>".$row[hitokoto]."</dd>
		</dl>
		<input type='hidden' name='ren' value='".$row[renban]."'>
		<p><input type='submit' name='kakunin' value='OK'></p>
		</form>";
		}
	}
?>
</section>
</div>
	
<footer>
  <div class="inner">
  <p><a href="../index.php">八百長うらないへ</a></p>
  </div>
</footer>
</body>
</html>