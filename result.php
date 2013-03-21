<?php include('fortune.php')?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">

<!-- og -->
<meta property="og:locale" content="ja_JP" />
<meta property="og:title" content="<?php echo htmlspecialchars($seizaNameJpn);?>の占い結果 | 八百長うらない | いい結果しかみたくないアナタのための占い"/>
<meta property="og:type" content="website" />
<meta property="og:url" content="http://woopsdez.jp/800uranai/" />
<meta property="og:site_name" content="八百長占い" />
<meta property="og:image" content="http://woopsdez.jp/800uranai/images/<?php echo htmlspecialchars($seizaName);?>.png" />
<meta property="fb:app_id" content="284928148306160" />
<meta property="fb:admins" content="1018657216" />
<!-- /og --> 
<meta charset="UTF-8">
<meta name = "viewport" content = "width = device-width">
<meta name="keywords" content="占い,星座,良い結果,八百長">
<meta name="description" content="この占いなら絶対良い結果！12星座であなたの良い運勢を占おう。">

<link rel="shortcut icon" href="images/favicon.ico">

<title><?php echo htmlspecialchars($seizaNameJpn);?>の占い結果 | 八百長うらない | いい結果しかみたくないアナタのための占い</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
$(window).bind('load',function(){//←windowオブジェクトにloadイベントをバインド
setTimeout(function(){window.scrollTo(0,1);　//←windowオブジェクトを1ピクセルスクロール
　},1);
});
</script>
</head>

<body id="result">
    <header>
    <h1><a href="./"><img src="images/800uranai.png" width="100%" alt="八百長うらない"></a></h1>
	<p id="tagline"><img src="images/tagline.png" width="217" height="19" alt="気持ちいい１日のために"></p>
</header>

<section class="article">
	<h2 id="myRank">
	<span id="seiza"><img src="images/<?php echo htmlspecialchars($seizaName);?>_L.png" alt=""></span>
	<span id="no"><img src="images/no0<?php echo htmlspecialchars($no);?>.png" alt="<?php echo "$no";?>"></span>
	</h2>

<section id="myComment">
  <p><?php echo htmlspecialchars($hitokoto);?></p>  
</section>

<div id="candi" class="right">
  <section id="myColor">
    <h2>ラッキーカラー</h2>
    <p><?php echo htmlspecialchars($color);?></p>
  </section>
  
  <section id="myItem">
    <h2>ラッキーカクテル</h2>
    <p><?php echo htmlspecialchars($item);?></p>
  </section>
</div>

<p class="gototop"><a href="./">トップページへ戻る</a></p>
    </section>


<section id="ranking">
<h2>ランキング</h2>
<ul>
<?php echo ($html); ?>	
</ul>	

</section>

	<footer>
  <div class="inner">
  
  <ul id="socialButton">
<li id="fb"><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fexsample.com&amp;send=false&amp;layout=box_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:62px;" allowTransparency="true"></iframe></li><li id="tw"><a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-lang="ja">Tweet</a><script charset="utf-8" type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li><li id="gp"><g:plusone size="tall"></g:plusone></li>
</ul>
  
  <p><a href="about.html">八百長うらないとは</a></p>
  <p><a href="http://woopsdez.jp">ウープスデザイン</a></p>
  <p><a href="mailto:woops.mirai@gmail.com">お問い合わせ</a></p>
  </div>
</footer>
</body>
</html>