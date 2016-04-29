<?php include 'admin.php';?>
<?php include 'header.php';?>

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
		<div id="hitokoto">	
			<h4>ヒトコト</h4>
			<?php dbcall("hitokoto"); ?>
		</div>
		<p class="gototop"><a href="list.php">もっと見る</a></p>
	</div>
</section>

<?php include 'footer.php';?>