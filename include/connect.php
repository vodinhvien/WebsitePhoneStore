<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"dienthoai");
	mysqli_query($con,"select * from danhmuc");
?>
