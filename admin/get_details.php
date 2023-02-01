<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"lms");
$query = "call get_details();";
$query_run = mysqli_query($connection,$query);

?>