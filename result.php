<?php include('fortune.php')?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>人生なんて出来レース！強く生きよう８００（やおちょー）うらない</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body id="result">
    <header>
<h1><img src="images/800uranai.png" width="480" height="81" alt="八百長うらない"></h1>
	<p id="tagline"><img src="images/tagline.png" width="217" height="19" alt="気持ちいい１日のために"></p>
</header>

<article>
	<h2 id="myRank">
	<span id="seiza"><img src="images/<?php echo "$seizaName";?>_L.png" alt=""></span>
	<span id="no"><img src="images/no0<?php echo "$no";?>.png" alt="<?php echo "$no";?>"></span>
	</h2>

<section id="myComment">
  <p><?php echo "$hitokoto";?></p>
</section>
<div id="candi" class="right">
  <section id="myColor">
    <h2>ラッキーカラー</h2>
    <p><?php echo "$color";?></p>
  </section>
  
  <section id="myItem">
    <h2>ラッキーアイテム</h2>
    <p><?php echo "$item";?></p>
  </section>
</div>

<p class="gototop"><a href="./">トップページへ戻る</a></p>
    </article>


<section id="ranking">
<h2>ランキング</h2>
<pre>
<?php print_r($ranking); ?>	
</pre>	
</section>

	<footer>
  <div class="inner">
  <p><a href="about.html">八百長うらないとは</a></p>
  <p><a href="http://woopsdez.jp">ウープスデザイン</a></p>
  <p><a href="mailto:woops.mirai@gmail.com">お問い合わせ</a></p>
  </div>
</footer>
</body>
</html>