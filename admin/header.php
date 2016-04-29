<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>８００（やおちょー）うらない 管理画面</title>
	<link href="../style.css" rel="stylesheet" type="text/css">
	<link href="admin.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<div class="inner">
			<h1><a href="index.php"><img src="../images/800uranai.png" width="480" height="81" alt="八百長うらない"></a></h1>
			<form action="search.php" method="post">
				<section class="search"><p>
					<select name="fld">
						<option value="hitokoto"> ひとこと</option>
					</select>
					<input type="text" name="nam" value="<?php if(isset($nam)){ echo htmlspecialchars($nam);} ?>">
					<input type="submit" value="search"></p>
				</section>
			</form>
		</div>
	</header>

	<div class="wrapper">
		<div><?php if(isset($msg)){echo($msg);} ?></div>