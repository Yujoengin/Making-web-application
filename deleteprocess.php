<?php
  require("../config/config.php");
  require("../lib/db.php");
  $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
  $origin = 'SELECT * FROM  topic';
  $result = mysqli_query($conn, $origin);
  while ($row = mysqli_fetch_assoc($result)) {
    // echo $row['title']."\n";
    if ($row['title'] === $_POST['title']) {
      $sql = "DELETE FROM topic WHERE title ='".$_POST['title']."'";
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
<!--
$sql = "DELETE FROM topic WHERE title ='".$_POST['title']."'";
header('Location: http://localhost/page/index.php');
echo "<script>alert('정확한 이름을 입력하세요.')</script>"; -->
