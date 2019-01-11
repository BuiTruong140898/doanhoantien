<<<<<<< HEAD
<?php
//danh sach cac doi tac
function dachsachcacdoitac(){
	$qr="select * from doitac 
	order by iddoitac desc";
	return(mysqli_query($qr));
		
}
=======
<?php
//danh sach cac doi tac
function dachsachcacdoitac(){
	$qr="select * from doitac 
	order by iddoitac desc";
	return(mysqli_query($qr));
		
}
>>>>>>> 1332d43e1780d2a41f7374acb8f3aa9af08d9f33
?>