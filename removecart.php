<?php
session_start();
$cart=$_SESSION['cart'];
$id=$_GET['productid'];
if($id == 0)
{
	unset($_SESSION['cart']);
	$_SESSION['s_removed'] = 'Removed';
}
else
{
	unset($_SESSION['cart'][$id]);
	$_SESSION['s_removed'] = 'Removed';
}
header("Location: index.php");
exit();
?>