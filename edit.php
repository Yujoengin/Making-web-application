<?php
	require("../config/config.php");
	require("../lib/db.php");
	$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
	$result = mysqli_query($conn,'SELECT * FROM topic');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.cs
	s">
</head>
<body>
	<header> <!-- It doesn't affect to this document. Only means header part -->
		<img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png">
		<h1><a href="http://localhost/page/index.php">Javascript</a></h1>
	</header>
	<nav> <!-- It doesn't affect to this document. Only means nav part -->
		<ol>
			<?php
				while ($row = mysqli_fetch_assoc($result)) {
				 	echo '<li><a href="http://localhost/page/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
		 		}
			?>
		</ol>
	</nav>
	<article>
		<form class="" action="editprocess.php" method="post">
			<p>
				수정할 제목 : <input type="text" name="old_title" value="">
			</p>
      <p>
				새로운 제목 : <input type="text" name="new_title" value="">
			</p>
			<p>
				새로운 작성자 : <input type="text" name="author">
			</p>
			<p>
				새로운 본문 : <textarea name="description" class="textarea"></textarea>
			</p>
			<input type="submit" name="name" value="제출">
		</form>
	</article>
	<div id="control">
		<input type="button" name="" value="white" id="white_btn" />
		<input type="button" name="" value="black" id="black_btn" />
		<a href="http://localhost/page/write.php">쓰기</a>
		<a href="http://localhost/page/delete.php">지우기</a>
		<a href="http://localhost/page/edit.php">수정</a>
	</div>
	<script src="http://localhost/page/script.js"></script>
</body>
</html>
