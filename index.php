<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header> <!-- It doesn't affect to this document. Only means header part -->
		<img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png">
		<h1><a href="http://localhost/page/index.php">Javascript</a></h1>
	</header>
	<nav> <!-- It doesn't affect to this document. Only means nav part -->
		<ol>
			<?php
			 echo file_get_contents("list.txt")
			?>
		</ol>
	</nav>
	<article>
		<?php
		if(empty($_GET['id'])===false){
			echo file_get_contents($_GET['id'].".txt");
		}
		?>
	</article>
	<div id="control">
		<input type="button" name="" value="white" id="white_btn" />
		<input type="button" name="" value="black" id="black_btn" />
	</div>
	<script src="http://localhost/script.js"></script>
</body>
</html>
