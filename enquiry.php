<?php include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="summer internship,online internship,it internship in noida,internship certificate format." />
<meta name="description" content="Join Us for Your Internship and avail all certificates." />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>



    <div class="container" style='border-top:1px solid;'>
      <div class="row" >
         <div class="col-md-12"><h3>Enquiry List</h3></div>


    
    
<table id="example" class="table table-striped table-bordered " style="width:150%">
    <thead>
        <tr>
<th>#</th>
            <th>Name</th>
            
            <th>Mobile No</th>
            <th>Message</th>
            
           
        </tr>
    </thead>
    <tbody>
         <?php

$ret=mysqli_query($con,"SELECT * FROM clues order by sno desc");
$cnt=1;	
while ($ROW=mysqli_fetch_array($ret)) {

?>
        <tr>
            <td><?php echo $cnt ?></td>
            
            <td><?php echo $ROW['name']?></td>
           
            <td><?php echo $ROW['mobilenum']?></td>
            <td><?php echo $ROW['message']?></td>

        
        
        </tr>
           <?php
     $cnt=$cnt+1;
}

?>
    </tbody>
 
</table>
</div>
      </div>

<br>

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->

    <!-- Javascript -->


    <script language="JavaScript" src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" />


<script>
    $(document).ready(function() {
$('#example').DataTable();
} );
    
    
    </script>
        <script>
    $(document).ready(function() {
$('#example1').DataTable();
} );
    
    
    </script>
</body>
</html>