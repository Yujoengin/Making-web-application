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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
	<link rel="stylesheet" type="text/css" href="/page/style.css">
	<!-- 부트스트랩 -->
	<link href="/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<header class="jumbotron text-center"> <!-- It doesn't affect to this document. Only means header part -->
			<img src="https://scontent-icn1-1.xx.fbcdn.net/v/t1.0-9/734639_385303771568291_681294276_n.jpg?oh=d796a8d14e0ab56e42d3324ba9648939&oe=59411B6C" class="img-circle" id="logo">
			<h1 id="headerText"><a href="/page/index.php">YUJOENGIN</a></h1>
		</header>
		<div class="row">
			<nav class="col-md-2"> <!-- It doesn't affect to this document. Only means nav part -->
				<ol class="nav nav-pills nav-stacked">
					<?php
						while ($row = mysqli_fetch_assoc($result)) {
						 	echo '<li><a href="/page/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
				 		}
					?>
				</ol>
			</nav>
			<nav class="col-md-8">
				<p>
					<div id="control">
						<input type="button" name="" value="white" id="white_btn" class="btn btn-default"/>
						<input type="button" name="" value="black" id="black_btn" class="btn btn-default"/>
						<a href="/page/write.php" class="btn btn-primary">쓰기</a>
						<a href="/page/delete.php" class="btn btn-primary">지우기</a>
						<a href="/page/edit.php" class="btn btn-primary">수정</a>
					</div>
				</p>
				<hr>
				<p>
					<article>
						<?php
						if(empty($_GET['id']) === false) {
							$sql = 'SELECT * FROM  topic WHERE id ='.$_GET['id'];
							$result = mysqli_query($conn, $sql);
							$row = mysqli_fetch_assoc($result);
							echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
							echo htmlspecialchars($row['description']).'<br />';
							echo strip_tags($row['author'], '<a><h1><h2><h3><h4><h5><li><ul><ol><b>').'<br />';
							echo htmlspecialchars($row['create']);
						}

						// if(empty($_GET['id'])===false){
						// 	echo file_get_contents($_GET['id'].".txt");
						// }
						?>
					</article>
				</p>
			</nav>
		</div>
		<script src="/page/script.js"></script>
		<!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
		<script src="/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
	</div>

</body>
</html>
