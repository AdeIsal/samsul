<?php 
include('lib/functions.php');
	
	$delete		= new Delete;
	
	$create 	= new Create;
	$update		= new Update;
	$read		= new Read;
	

	if (!empty($_GET['id'])) {
		$deleteuser = $delete->user($_GET['id']);
		echo "<script>window.location = '?view=events&sukses=delete';</script>";
	} 


?>