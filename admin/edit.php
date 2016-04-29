<?php include 'admin.php';?>
<?php include 'header.php';?>

<section id="edit">
	<h2>登録したデータを修正する</h2>
	<?php
	//修正用フォーム
		if (isset($_GET['id'])) {
			$ren = $_GET['id'];
			$sql = "select * from hitokoto where renban =".$ren;
			$result = mysql_query($sql);
			$rows = mysql_num_rows($result);
		}
		
		if($rows == 0){
			echo "<p>該当データがありません。</p>";
		} else {
			while($row = mysql_fetch_array($result)){
				echo "
				<form action='edit.php' method='post'>
				<textarea name='hitokoto'>".$row['hitokoto']."</textarea>
				<p><input type='submit' value='submit' name='OK' value='OK'></p>
				<input type='hidden' name='ren' value='".$ren."'>
				</form>";
			}	
		}
	?>
</section>

<?php include 'footer.php';?>