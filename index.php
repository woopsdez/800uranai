<?php include('fortune.php');?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">

	<!-- og -->
	<meta property="og:locale" content="ja_JP" />
	<meta property="og:title" content="八百長うらない | いい結果しかみたくないアナタのための占い"/>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://woopsdez.jp/800uranai/" />
	<meta property="og:site_name" content="八百長占い" />
	<meta property="og:image" content="http://woopsdez.jp/800uranai/images/futago.png" />
	<meta property="fb:app_id" content="284928148306160" />
	<meta property="fb:admins" content="1018657216" />
	<!-- /og --> 
	<meta name = "viewport" content = "width = device-width">
	<meta name="keywords" content="占い,星座,良い結果,八百長">
	<meta name="description" content="この占いなら絶対良い結果！12星座であなたの良い運勢を占おう。">

	<link rel="shortcut icon" href="images/favicon.ico">

	<title>八百長うらない | いい結果しかみたくないアナタのための占い</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(".gototop a").click(function () {
		$('html,body').animate({ scrollTop: 0 }, 'slow');
	});
	window.onload = function() {
		setTimeout(scrollTo, 100, 0, 1);
	}
</script>
</head>

<body>
	<header>
		<h1><a href="./"><img src="images/800uranai.png" alt="八百長うらない"></a></h1>
		<p id="tagline"><img src="images/tagline.png" width="217" height="19" alt="気持ちいい１日のために"></p>
	</header>

	<section class="article">
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
		<p class="gototop"><a href="#">ページ上部へ戻る</a></p>
	</section>

	<footer>
		<div class="inner">

			<ul id="socialButton">
				<li id="fb"><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fexsample.com&amp;send=false&amp;layout=box_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=90" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:70px; height:62px;" allowTransparency="true"></iframe></li><li id="tw"><a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-lang="ja">Tweet</a><script charset="utf-8" type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li><li id="gp"><div class="g-plusone" data-size="tall"></div><script type="text/javascript">
				window.___gcfg = {lang: 'ja'};

				(function() {
					var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					po.src = 'https://apis.google.com/js/plusone.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				})();
			</script></li>
		</ul>

		<p><a href="about.html">八百長うらないとは</a></p>
		<p><a href="http://woopsdez.jp">ウープスデザイン</a></p>
		<p><a href="mailto:woops.mirai@gmail.com">お問い合わせ</a></p>
	</div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-413655-11', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
