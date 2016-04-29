<?php
extract($_POST);

//データベースに接続
require_once("config.php");
mysql_connect($hostName,$userName,$password);
mysql_select_db($database);

// ==============================
// 関数
// ==============================

//登録したレコード一覧を表示
function dbcall($table){
	$sql = "select * from ".$table." order by renban desc limit 10"; 
			$result = mysql_query($sql); //取得した要素をresultに格納
			$rows = mysql_num_rows($result); //実行結果の行数を返す
			if($rows == 0){
				echo "<p>該当データがありません。</p>";
			}
			else{
				while($row = mysql_fetch_array($result)){
					$ren = $row["renban"];
					echo "
					<div class='box'>				
						<dl>
							<dt>".$row["renban"]."</dt>
							<dd>".htmlspecialchars($row[$table])."</dd>
						</dl>

						<nav>
							<a href='edit.php?id=".$ren."'>修正する</a> | 
							<a href='delete.php?id=".$ren."'>削除する</a>
						</nav>
					</div>";
				}
			}
		};

// ==============================
// 実行
// ==============================

// レコード登録
if (isset($hitokoto)) {
	//登録
	$result = mysql_query("insert into hitokoto values('$hitokoto',NULL)");
	if (!$result) {
		$error = mysql_error();
		$msg = "<p class=result>".$error."</p><p>データを登録できませんでした。<p>";
	} else{
		$msg = "<p class=result>データを登録しました。</p>";
	}
}

//レコード修正
if (isset($hitokoto) and isset($ren)){
	$sql = "update hitokoto set hitokoto = '$hitokoto', where renban ='$ren'";
	mysql_query($sql); //sql文実行
	$msg = "<p class=result>レコードの修正が完了しました</p>";
}

if(isset($kakunin) and $kakunin == "OK"){
	$sql = "delete from hitokoto where renban = $ren";
	mysql_query($sql);
	echo "<p>レコードの削除が完了しました。</p>";
	echo "<a href='index.php'>管理画面トップページへ戻る</a>";
	exit;
}

?>