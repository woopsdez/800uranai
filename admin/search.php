<?php
extract($_POST);

//データベースに接続
require_once("config.php");
mysql_connect($hostName,$userName,$password);
mysql_select_db($database);

//ページ遷移後も選択したメニューを維持
if($fld == "hitokoto"){$s01 = "selected";}
if($fld == "color"){$s02 = "selected";}
if($fld == "item"){$s03 = "selected";}

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
<section>
<?php
	if($nam<>"" and $fld<>""){ //検索語句・セレクトメニューの値が入っている
		//fldに入ったテーブル名で検索
		$sql = "select * from hitokoto where $fld like '%$nam%'"; //SQL文を一旦$sqlに格納（長くなるから）
		$result = mysql_query($sql); //resultに格納
		$rows = mysql_num_rows($result);
			if($rows == 0){
				echo "<p>該当データがありません。</p>";
			}else{
				while($row = mysql_fetch_array($result)){
				echo "
					<dl class=box>
						<dt>ひとこと</dt><dd>".htmlspecialchars($row["hitokoto"])."</dd>
						<!-- <dt>カラー</dt><dd>".htmlspecialchars($row["color"])."</dd> -->
						<!-- <dt>アイテム</dt><dd>".htmlspecialchars($row["item"])."</dd> -->
					</dl>
					<p>
						<a href='edit.php?id=".$row["renban"]."'>修正する</a> | 
						<a href='delete.php?id=".$row["renban"]."'>削除する</a>
					</p>";
				}
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