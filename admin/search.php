<?php include 'admin.php';?>
<?php include 'header.php';?>

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
					$ren = $row["renban"];
				echo "
						<div class='box'>
							<p>".htmlspecialchars($row["hitokoto"])."</p>
							<nav>
								<a href='edit.php?id=".$ren."'>修正する</a> | 
								<a href='delete.php?id=".$ren."'>削除する</a>
							</nav>
						</div>";
			}
		}
	}
?>
</section>

<?php include 'footer.php';?>