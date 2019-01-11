<?php 
function hienthidoitac(){
	$sql="select * from doitac";
	return mysqli_query($conn,$sql);
}

?>