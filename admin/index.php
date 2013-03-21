<?php
extract($_POST);

//データベースに接続
require_once("config.php");
mysql_connect($hostName,$userName,$password);
mysql_select_db($database);

if (isset($hitokoto)) { //情報が入っていれば
	//登録
	$result = mysql_query("insert into hitokoto values('$hitokoto',NULL)");
	if (!$result) {
		$error = mysql_error();
    	$msg = "<p class=result>".$error."</p><p>データを登録できませんでした。<p>";
    } else{
		$msg = "<p class=result>データを登録しました。</p>";
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>８００（やおちょー）うらない 管理画面</title>
<link href="../style.css" rel="stylesheet" type="text/css">
<link href="../admin.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	$('textarea').bind('keydown keyup keypress change',function(){
		var thisValueLength = $(this).val().length;
		$('.count').html(thisValueLength);
	});
});
</script>

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
<div><?php print($msg); ?></div>
<section id="post" class="left">
<h2>登録</h2>
	<form action="index.php" method="post">
		<dl>
			<dt>ひとことを入力</dt>
			<dd>
				<textarea name="hitokoto"></textarea>
				<p class="txtCount">いま<span class="count">0</span>文字（140文字まで）</p>
			</dd>
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
									<dt>".$row["renban"]."</dt><dd>".htmlspecialchars($row[$table])."</dd>
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
<!-- <div class="box" id="color">	
	<h4>カラー</h4>
	<?php dbcall("color"); ?>
	</div>
	<div class="box" id="item">	
	<h4>カクテル</h4>
	<?php dbcall("item"); ?> -->
		<p class="gototop"><a href="list.php">もっと見る</a></p>
	</div>
</section>
</div>
	
<footer>
  <div class="inner">
  <p><a href="../index.php">八百長うらないへ</a></p>
  </div>
</footer>
</body>
</html>