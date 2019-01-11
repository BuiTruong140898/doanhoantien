<<<<<<< HEAD
<?php 
$con = mysqli_connect("localhost:3306","root","","hoantien");
mysqli_set_charset($con, 'UTF8');
?>
<?php 
function hienthidoitac(){
	$sql="select * from doitac";
	global $con;
	return mysqli_query($con,$sql);
}
function hienthitimkiemdoitac($search_doitac){
	$sql="select * from doitac where thongtindoitac LIKE '%".$search_doitac."%'";
	global $con;
	return mysqli_query($con,$sql);
}
?>
=======
<?php $con = mysqli_connect("localhost:3306","root","","hoantien");
mysqli_set_charset($con, 'UTF8');?>
>>>>>>> 1332d43e1780d2a41f7374acb8f3aa9af08d9f33
