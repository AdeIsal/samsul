<?php 
if (!empty($_POST)) {
	include('lib/functions.php');
	
	$create 	= new Create;

	$file 		= $create->upload();

	if ($file) {
		$result = $create->addEvent($file);
		if ($result)
			echo "<script>window.location = '?view=events&sukses=membuat';</script>";
	}
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
		<input type="text" class="form-control" name="titleevent" placeholder="Input your event title" required>
	 </div>
	 <div class="form-group">
		<label>Date Event</label>
		<input type="date" class="form-control" name="date" value="<?php echo date('Y-m-j');?>" required>
	 </div>
	 <div class="form-group">
		<label>File Upload</label>
		<input type="file" name="file" placeholder="Upload your file" required>
	 </div>

	 <div class="btn-group float-right mt-2" role="group">
		<button type="submit" class="btn btn-primary btn-md">
		  <i class="fa fa-plus" aria-hidden="true"></i> Submit</button>
		<a class="btn btn-danger btn-md" href="#">
		  <i class="fa fa-times" aria-hidden="true"></i>Reset</a>
   	 </div>
</form>