<?php
$conn = mysqli_connect("localhost", "root", "yujoengin");
mysqli_select_db($conn, "opentutorials");
$sql = "INSERT INTO topic (`title`,`description`,`author`,`create`) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$_POST['author']."', now())";
$result = mysqli_query($conn, $sql);
header('Location: http://localhost/page/index.php');
?>
