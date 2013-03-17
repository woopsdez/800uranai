<?php
extract($_POST);

//今日の日付取得
$today = date("Y年m月d日");

//ページIDと星座名の関連付け
//配列の初期化
$seizaAry=array();

//配列に星座を格納
$seizaAry["ohitsuji"] = "ohitsuji";
$seizaAry["oushi"] = "oushi";
$seizaAry["futago"] = "futago";
$seizaAry["kani"] = "kani";
$seizaAry["shishi"] = "shishi";
$seizaAry["otome"] = "otome";
$seizaAry["tenbin"] = "tenbin";
$seizaAry["sasori"] = "sasori";
$seizaAry["ite"] = "ite";
$seizaAry["hitsuji"] = "yagi";
$seizaAry["mizugame"] = "mizugame";
$seizaAry["uo"] = "uo";

//URLパラメーターを受け取ってidで星座名を表示
$id = $_GET['id'];
$seizaName = $seizaAry[$id];

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
$seizaAryJpn["hitsuji"] = "やき座";
$seizaAryJpn["mizugame"] = "みずがめ座";
$seizaAryJpn["uo"] = "うお座";

//URLパラメーターを受け取ってidで星座名を表示
$seizaNameJpn = $seizaAryJpn[$id];

////////////////////////////////////

//ランダム関数で順位を捏造
$no=rand(1,6);

////////////////////////////////////

//データベースにアクセス
mysql_connect('mysql106.heteml.jp','_800uranai','uso800');
mysql_select_db('_800uranai');

////////////////////////////////////		

//DBからランダムに取得して表示
$sql = "select * from hitokoto"; 
$result = mysql_query($sql); //取得した要素をresultに格納
$hitokoto = array();
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
	$hitokoto[] = $row[0];
}
$key = array_rand($hitokoto);
$hitokoto = $hitokoto[$key];


//PDOで１行でやると… 今っぽい！！！

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


//あとで
//$nodata = "データないよ＞＜"; //データがない場合
//if(!$item){
//	$item == $nodata
//} 


////////////////////////////////////

//他の星座ランキング

//最高順位
$maxRank = 0;
//最低順位
$minRank = 6;

$selfSeiza = $seizaAry[$id];
unset($seizaAry[$id]);
shuffle($seizaAry);
array_splice($seizaAry,($no-1),0,$selfSeiza);

foreach( $seizaAry as $key=>$val){	
	$html .= "<li><a href=#><img src=images/".$val."_S.png></a></li>\n";
};


?>