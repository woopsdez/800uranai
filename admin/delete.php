<?php include 'admin.php';?>
<?php include 'header.php';?>

<section id="delete">
<h2>削除画面</h2>
<?php
if (isset($_GET['id'])) {
	$ren = $_GET['id'];
	//削除確認
	$sql = "select * from hitokoto where renban = $ren";
	$result = mysql_query($sql);
	$rows = mysql_num_rows($result);
}

//表示
if(isset($rows) and $rows == 0){
		echo "<p>該当データがありません。</p>";
	}else{
		while($row = mysql_fetch_array($result)){
		echo "
		<p>このレコードを削除します</p>
		<form action='delete.php' method='post'>
		<div class='box'>
			<dl>
				<dt>".$ren."</dt>
				<dd>".$row['hitokoto']."</dd>
			</dl>
		</div>
		<input type='hidden' name='ren' value='".$ren."'>
		<p><input type='submit' name='kakunin' value='OK'></p>
		</form>";
		}
	}
?>


</section>

<?php include 'footer.php';?>