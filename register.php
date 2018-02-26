
<?php 
/*User Registration*/
include "conn.php";
   

   
$usertype=$_POST['usertype'];
$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];  
 


$params=array($usertype,$first_name,$middle_name,$last_name,$age,$gender,$emailid,$password);


$tsql = "INSERT Into dbo.User_Profile(User_Type,First_Name,Middle_Name,Last_Name,Age,Gender,Email_Id,Password) 
                                        VALUES(?,?,?,?,?,?,?,?);";
											
$stmt = sqlsrv_query( $conn, $tsql,$params);       
    
if ( $stmt )    
{    
    		
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Submission</title>
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
					<strong> <?php echo"Thank you for registering Mr. ".$first_name;?> </strong></br>
						<a href="index.html"><button class="btn btn-primary" >Go back</button></a>
					
				</div>
		</div>
	</div>
</div>

 <?php
 		
}     
else     
{    
     echo "Error in statement execution.\n";    
     die( print_r( sqlsrv_errors(), true));    
}  

sqlsrv_free_stmt( $stmt);    
sqlsrv_close( $conn);    
?>    
</body>
</html>
 
