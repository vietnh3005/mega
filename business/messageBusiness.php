<?php 
function load_message(){
	require_once '../configs/connect.php';
	global $conn;
	$sql = "select * from messages m, users u where m.receiver_id = u.user_id ";
	$query = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($query)){
		if()
		echo "
		<tr class='unread'>
		<td class='inbox-small-cells'>
		<input type='checkbox' class='mail-checkbox'>
		</td>
		<td class='inbox-small-cells'><i class='icon-star'></i></td>
		<td class='view-message  dont-show'>" .$row['name']. "</td>
		<td class='view-message ''>" .$row['title']. "</td>
		<td class='view-message  inbox-small-cells'></td>
		<td class='view-message  text-right'>" .$row['created_date']. "</td>
		</tr>
		";
	}
} 
?>