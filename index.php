<?php include('fortune.php')?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>人生なんて出来レース！強く生きよう８００（やおちょー）うらない</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<header>
<h1><img src="images/800uranai.png" width="480" height="81" alt="八百長うらない"></h1>
	<p id="tagline"><img src="images/tagline.png" width="217" height="19" alt="気持ちいい１日のために"></p>
</header>

<article>
<p id="today"><?php echo $today;?>の運勢をみる</p>
	<ul class="horoscopeList">
		<li><a href="result.php?id=ohitsuji"><img src="images/ohitsuji.png" width="230" height="231" alt="おひつじ座"></a></li>
		<li><a href="result.php?id=oushi"><img src="images/oushi.png" width="230" height="231" alt="おうし座"></a></li>
		<li><a href="result.php?id=futago"><img src="images/futago.png" width="230" height="231" alt="ふたご座"></a></li>
		<li><a href="result.php?id=kani"><img src="images/kani.png" width="230" height="231" alt="かに座"></a></li>
		<li><a href="result.php?id=shishi"><img src="images/shishi.png" width="230" height="268" alt="しし座"></a></li>
		<li><a href="result.php?id=otome"><img src="images/otome.png" width="230" height="267" alt="おとめ座"></a></li>
		<li><a href="result.php?id=tenbin"><img src="images/tenbin.png" width="230" height="268" alt="てんびん座"></a></li>
		<li><a href="result.php?id=sasori"><img src="images/sasori.png" width="230" height="268" alt="さそり座"></a></li>
		<li><a href="result.php?id=ite"><img src="images/ite.png" width="230" height="270" alt="いて座"></a></li>
		<li><a href="result.php?id=yagi"><img src="images/yagi.png" width="230" height="270" alt="やぎ座"></a></li>
		<li><a href="result.php?id=mizugame"><img src="images/mizugame.png" width="230" height="270" alt="みずがめ座"></a></li>
		<li><a href="result.php?id=uo"><img src="images/uo.png" width="230" height="270" alt="うお座"></a></li>
	</ul>
</article>

<footer>
  <div class="inner">
  <p><a href="about.html">八百長うらないとは</a></p>
  <p><a href="http://woopsdez.jp">ウープスデザイン</a></p>
  <p><a href="mailto:woops.mirai@gmail.com">お問い合わせ</a></p>
  </div>
</footer>

</body>
</html>
