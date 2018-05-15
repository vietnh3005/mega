<?php
session_start();
$id=$_GET['item'];
if(isset($_SESSION['cart'][$id]))
{
	$qty = $_SESSION['cart'][$id] + 1;
	$_SESSION['s_added'] = 'Added';
}
else
{
	$qty=1;
	$_SESSION['s_added'] = 'Added';
}
$_SESSION['cart'][$id]=$qty;
$GLOBALS['cart'][$id]=$qty;
header("Location: index.php");
exit();
?>