<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title><4eachblog 掲示板</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 

	mb_internal_encoding("utf8");
	$pdo = new PDO("mysql:dbname=dun;host=localhost;","root","root");
	$stmt = $pdo->query("select * from 4each_keijiban");

?>
	<header>
		<div class="header-logo">
			<img src="4eachblog_logo.jpg">
		</div>
		<div class="header-nav">
			<ul>
				<li>トップ</li>
				<li>プロフィール</li>
				<li>４eachについて</li>
				<li>登録フォーム</li>
				<li>その他</li>
			</ul>
		</div>
	</header>


	<main>
		<div class="main">
			<h1>プログラミングに役立つ掲示板</h1>

			<div class="form">
				<form method="post" action="insert.php">
					<h2>入力フォーム</h2>
				<div>
				<label>ハンドルネーム</label>
				<br>
				<input type="text" class="text" size="35" name="handlename">
				</div>	

				<div>
					<label>タイトル</label>
					<br>
					<input type="text" class="text" size="35" name="title">
				</div>

				<div>
					<label>コメント</label>
					<br>
					<textarea cols="35" rows="7" name="comments"></textarea>
				</div>

				<div>
					<input type="submit" class="submit" value="送信する">
				</div>
				</form>
			</div>

			<?php

			while ($row = $stmt->fetch()){

			echo "<div class='article'>";
			echo "<h2>".$row['title']."</h2>";
			echo "<div class='contents'>";
			echo $row['comments'];
			echo "<div class='hadlename'>posted by ".$row['handlename']."</div>";
			echo "</div>";
			echo "</div>";
		}
?>


		</div>

		<div class="side">
			<h2>人気の記事</h2>
			<p>PHPオススメ本</p>
			<p>PHP MyAdminの使い方</p>
			<p>今人気のエディタ Top5</p>
			<p>HTMLの基礎</p>

			<h2>オススメリンク</h2>
			<p>インターノウス株式会社</p>
			<p>XAMPPのダウンロード</p>
			<p>Eclipseのダウンロード</p>
			<p>Bracketsのダウンロード</p>

			<h2>カテゴリ</h2>
			<p>HTML</p>
			<p>PHP</p>
			<p>MySQL</p>
			<p>JavaScript</p>
			
		</div>


	</main>




	<footer>
		<p>copyright ©︎ internous| 4each blog the which provides A to Z about programming.</p>
	</footer>

</body>
</html>