<?php 
include('lib/functions.php');
	
	$create 	= new Create;
	$update		= new Update;
	$read		= new Read;

	if (!empty($_POST)) {

		if(empty($_FILES['file']['name']))
			$file 		= 'NoReupload'; 
		else
			$file 		= $create->upload();

		if ($file) {
			$result = $update->event($_GET['id'], $file);
			#if ($result)
				#echo "<script>window.location = '?view=events&sukses=mengupdate';</script>";
		}
	}

	if (!empty($_GET['id'])) {
		$data 	= $read->event($_GET['id']);
	}


?>
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Events</h1>
<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">All Events</h6>
</div>
<div class="card-body">
<form method="POST" action="" enctype="multipart/form-data"> 
	 <div class="form-group">
		<label>Title Event</label>
		<input type="text" class="form-control" name="titleevent" placeholder="Input your event title" value="<?php echo $data[0]['name'];?>">
	 </div>
	 <div class="form-group">
		<label>Date Event</label>
		<input type="date" class="form-control" name="date" value="<?php echo date('Y-m-d', strtotime($data[0]['tanggal']) );?>">
	 </div>
	 <div class="form-group">
			<div class="input-group mb-3">
			<div class="input-group-prepend">
				<a class="btn btn-outline-warning" href="<?php echo 'docs/'.$data[0]['file']?>" id="inputGroupFileAddon03"><i class="fa fa-download" aria-hidden="true"></i> Download</a>
			</div>
			<div class="custom-file">
				<input type="file" name="file" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
				<label class="custom-file-label" for="inputGroupFile03"><?php echo $data[0]['file']?></label>
			</div>
			</div>
	 </div>

	 <div class="btn-group float-right mt-2" role="group">
		<button type="submit" class="btn btn-primary btn-md">
		  <i class="fa fa-plus" aria-hidden="true"></i> Submit</button>
		<a class="btn btn-danger btn-md" href="?view=events">
		  <i class="fa fa-times" aria-hidden="true"></i>Back</a>
   	 </div>
</form>
