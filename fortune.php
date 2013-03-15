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
$seizaAry["kani"] = "kain";
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

////////////////////////////////////

//ランダム関数で順位を捏造
$no=rand(1,6);

////////////////////////////////////

//データベースにアクセス
mysql_connect('mysql106.heteml.jp','_800uranai','uso800');
mysql_select_db('_800uranai');

////////////////////////////////////		

//DBからランダムに取得して表示
$sql = "select * from uranai order by rand()"; 
$result = mysql_query($sql); //取得した要素をresultに格納
$row = mysql_fetch_array($result);
if($row == 0){
		echo "<p>該当データがありません。</p>";
	}
	else{
		while($row = mysql_fetch_array($result))
		{
			$hitokoto = "$row[hitokoto]";
			$color = "$row[color]";
			$item = "$row[item]";
		}
	}
	
////////////////////////////////////

//他の星座ランキング

//最高順位
$maxRank = 0;
//最低順位
$minRank = 6;


$ranking = $seizaAry; //星座配列を$rankingに格納
unset($ranking[$seiza]); //自分の星座を除外
shuffle($ranking); //シャッフル

//$rankingの中に自分の星座の番号を最高・最低の数からランダムで入れる
array_splice($ranking, mt_rand($maxRank,$minRank), 0, array($seizaAry[$id]));

?>