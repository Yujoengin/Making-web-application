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
		<header class="jumbotron text-center" > <!-- It doesn't affect to this document. Only means header part -->
			<img src="https://scontent-icn1-1.xx.fbcdn.net/v/t1.0-9/734639_385303771568291_681294276_n.jpg?oh=d796a8d14e0ab56e42d3324ba9648939&oe=59411B6C" class="img-circle" id="logo">
			<h1 id="headerText"><a href="/page/index.php">YUJOENGIN</a></h1>
		</header>
		<div class="row">
			<nav class="col-md-2"> <!-- It doesn't affect to this document. Only means nav part -->
				<ol class="nav nav-pills nav-stacked">
					<?php
						while ($row = mysqli_fetch_assoc($result)) {
						 	echo '<li><a href="/page/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
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
						<form class="" action="editprocess.php" method="post">
							<div class="form-group">
    						<label for="exampleInputEmail1">수정할 제목</label>
    						<input type="text" class="form-control" name="old_title" id="exampleInputEmail1" placeholder="수정할 제목을 입력하세요. 일치하는 제목이 없으면 수정되지 않습니다.">
  						</div>
							<div class="form-group">
								<label for="exampleInputEmail1">새로운 제목</label>
								<input type="text" class="form-control" name="new_title" id="exampleInputEmail1" placeholder="새로운 제목을 입력하세요.">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">새로운 작성자</label>
								<input type="text" class="form-control" name="author" id="exampleInputEmail1" placeholder="새로운 작성자를 입력하세요.">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">새로운 본문</label>
								<textarea class="form-control" name="description" id="exampleInputEmail1" placeholder="새로운 내용을 입력하세요." rows="5"></textarea>
							</div>
							<input type="submit" name="name" value="제출" class="btn btn-info">
						</form>
					</article>
				</p>
			</nav>
		</div>
		<script src="/page/script.js"></script>
	</div>
</body>
</html>
