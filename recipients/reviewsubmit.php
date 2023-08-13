<?php
include '..\main_page_partials\config.php';

session_start();
$uname=$_SESSION['fullname'];
$donor=$_GET['donor'];
$rating=$_POST['rating'];
print_r([$id,$rating]);
$sql="insert into review_table (user_name,user_rating,user_review,donor_name)
Values ('$uname','$rating','','$donor')";
mysqli_query($con, $sql);
header('Location: review.php')
?>