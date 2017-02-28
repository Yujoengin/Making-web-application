<?php
  require("../config/config.php");
  require("../lib/db.php");
  $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
  $origin = 'SELECT * FROM  topic';
  $result = mysqli_query($conn, $origin);
  while ($row = mysqli_fetch_assoc($result)) {
    if($row['title'] === $_POST['old_title']){
      $sql = "UPDATE `topic` SET title = '".$_POST['new_title']."', author = '".$_POST['author']."', description = '".$_POST['description']."' WHERE title = '".$_POST['old_title']."'";
      $result = mysqli_query($conn, $sql);
      header('Location: http://localhost/page/index.php');
    }
    else {
      continue;
    }
  }
  echo "<script>alert('정확한 이름을 입력하세요.')</script>";
  echo "<script>history.back();</script>";
?>
