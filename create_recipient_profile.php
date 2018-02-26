
<?php 
/*Customer Profile Creation*/
include "conn.php";
Session_start();
 

$user_type = $_POST["user_type"];
$rp_fname = $_POST['rp_fname'];
$rp_mname = $_POST['rp_mname'];
$rp_lname = $_POST['rp_lname'];
$rp_age = $_POST['rp_age'];
$rp_gender = $_POST['rp_gender'];
$rp_uno = $_POST['rp_uno'];
$rp_sa = $_POST['rp_sa'];
$rp_city = $_POST['rp_city'];
$rp_province = $_POST['rp_province'];
$rp_zip = $_POST['rp_zip'];
$rp_phone = $_POST['rp_phone'];
$rp_ru_id = $_SESSION['lu_user_id'];



$tsql = "INSERT Into dbo.Recipient_Profile(User_Type,R_First_Name,R_Middle_Name,R_Last_Name,
											R_Age,R_Gender,
											R_Unit_No,R_Street_Address,
											R_City,R_Province,
											R_Zip,R_Phone_No,
										  Referral_User_ID) 
										  VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?);";
$params=array($user_type,$rp_fname,$rp_mname,$rp_lname,$rp_age,$rp_gender,$rp_uno,$rp_sa,$rp_city,
				$rp_province,$rp_zip,$rp_phone,$rp_ru_id);											
$stmt = sqlsrv_query( $conn, $tsql,$params);       
    
if ( $stmt )    
{    
/* T-SQL query to fetch the customer id and display it after the customer profile has been successfully created*/

$tsql1 = "SELECT Om_Recipient_ID FROM Recipient_Profile WHERE R_First_Name= '$rp_fname' AND R_Last_Name = '$rp_lname' AND R_Zip = '$rp_zip' ";
$params1 = array();
$options1 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt1=sqlsrv_query($conn,$tsql1,$params1,$options1);
$rows1 = sqlsrv_has_rows( $stmt1 );
if($rows1 === true)
{
	while( $row2 = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_ASSOC) )
		{
		$om_rp_id = $row2['Om_Recipient_ID'];
		}
	
}
else
{
	header("location:norecords.php");
}	



      ?>
	 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Profile Creation</title>
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
		<div class="col-sm-8 text-center"> 
				<div class="alert alert-success">
					<strong> <?php echo"Success! The Recipient profile for ".$rp_lname.",".$rp_fname." has been successfully Created and the recipient id is ".$om_rp_id;?> </strong>
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


  
 
