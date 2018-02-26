<!DOCTYPE html>
<html lang="en">
<head>
  <title>No records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 350px;padding-left:200px;}
   
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
          .row.content {height:auto;padding-top:auto;padding-left:auto;} 
    }
	
	
  </style>
</head>
<body>

<div class="container-fluid text-center">    
	<div class="row content">
		<div class="col-sm-8 text-center" style="padding-top:25%;"> 
				<div class="alert alert-success">
					<strong> <?php echo"Sorry!No records found!";?> </strong>
				</div>
		</div>
	</div>
</div>
 
</body>
</html>