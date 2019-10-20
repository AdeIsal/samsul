<?php 

    include 'lib/functions.php';

    $read       = new Read;
    $events     = $read->events();

?>

<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Events</h1>
<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">All Events</h6>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
    <tr>
    <th>Event Name</th>
    <th>User</th>
    <th>Room</th>
    <th>Date</th>
    <th>Action</th>
    </tr>
</thead>
<tfoot>
    <tr>
    <th>Event Name</th>
    <th>User</th>
    <th>Room</th>
    <th>Date</th>
    <th>Action</th>
    </tr>
</tfoot>
<tbody>
    <?php 
        foreach ($events as $event ) {
            echo '<tr>';
            echo '<td>' . $event['EventTitle'] . '</td>';
            echo '<td>' . $event['name'] . '</td>';
            echo '<td>' . $event['room'] . '</td>';
            echo '<td>' . $event['tanggal'] . '</td>';
            echo    '<td>'.
                        '<a href="docs/'. $event['file'] .'" class="btn btn-success mx-1"><i class="fa fa-download" aria-hidden="true"></i></a>'.
                        '<a href="?edit=event&id='. $event['id'] .'" class="btn btn-warning mx-1"><i class="fa fa-edit" aria-hidden="true"></i></a>'.
                        '<a href="?delete=user&id='. $event['id'] .'" class="btn btn-danger mx-1"><i class="fa fa-trash" aria-hidden="true"></i></a>'.
                    '</td>';                    
            echo '</tr>';
        }
    ?>
</tbody>
</table>