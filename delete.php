<?php require_once "home2.php"; ?>
<?php
	$id=$_GET['id'];
	include('dbConfig.php');
	mysqli_query($conn,"delete from new_post where id='$id'");
	header('location:view_post.php');
	
?>