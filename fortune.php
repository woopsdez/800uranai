<?php
extract($_POST);

// ================== 
// 変数定義
// ================== 

$today = date("Y年m月d日"); //今日の日付取得
$maxRank = 0; //最高順位
$minRank = 6; //最低順位

// 初期化
$seizaAry    = array();
$seizaAryJpn = array();
$html = null;

// === ページIDと星座名の関連付け === //
//配列に星座を格納
$seizaAry["ohitsuji"] = "ohitsuji";
$seizaAry["oushi"]    = "oushi";
$seizaAry["futago"]   = "futago";
$seizaAry["kani"]     = "kani";
$seizaAry["shishi"]   = "shishi";
$seizaAry["otome"]    = "otome";
$seizaAry["tenbin"]   = "tenbin";
$seizaAry["sasori"]   = "sasori";
$seizaAry["ite"]      = "ite";
$seizaAry["yagi"]  = "yagi";
$seizaAry["mizugame"] = "mizugame";
$seizaAry["uo"]       = "uo";
//配列に星座を格納
$seizaAryJpn["ohitsuji"] = "おひつじ座";
$seizaAryJpn["oushi"] = "おうし座";
$seizaAryJpn["futago"] = "ふたご座";
$seizaAryJpn["kani"] = "かに座";
$seizaAryJpn["shishi"] = "しし座";
$seizaAryJpn["otome"] = "おとめ座";
$seizaAryJpn["tenbin"] = "てんびん座";
$seizaAryJpn["sasori"] = "さそり座";
$seizaAryJpn["ite"] = "いて座";
$seizaAryJpn["yagi"] = "やぎ座";
$seizaAryJpn["mizugame"] = "みずがめ座";
$seizaAryJpn["uo"] = "うお座";

////////////////////////////////////		

//データベースにアクセス
require_once("admin/config.php");
mysql_connect($hostName,$userName,$password);
mysql_select_db($database);

//DBからランダムに取得して表示
$sql = "select * from hitokoto"; 
$result = mysql_query($sql); //取得した要素をresultに格納
$hitokoto = array();
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	$hitokoto[] = $row[0];
}
$key = array_rand($hitokoto);
$hitokoto = $hitokoto[$key];

//TODO PDOで１行でやると… 今っぽい！！！

$sql = "select * from color"; 
$result = mysql_query($sql); //取得した要素をresultに格納
$color = array();
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	$color[] = $row[0];
}
$key = array_rand($color);
$color = $color[$key];


$sql = "select * from item"; 
$result = mysql_query($sql); //取得した要素をresultに格納
$item = array();
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	$item[] = $row[0];
}
$key = array_rand($item);
$item = $item[$key];

////////////////////////////////////

// ================== 
// 実行
// ================== 

//ランダム関数で順位を捏造
$no   = rand(1,6);

//URLパラメーターを受け取ってidで星座名を表示
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$seizaName = $seizaAry[$id];
	$seizaNameJpn = $seizaAryJpn[$id];

	$selfSeiza = $seizaAry[$id];
	unset($seizaAry[$id]);
	shuffle($seizaAry);
	array_splice($seizaAry,($no-1),0,$selfSeiza);

	//他の星座ランキング
	foreach( $seizaAry as $key => $val){	
		$html .= "<li><a href=result.php?id=".$val."><img src=images/".$val."_S.png></a></li>\n";
	};
}

?>