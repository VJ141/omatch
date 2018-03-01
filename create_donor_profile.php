
<?php 
/*Donor Profile Creation*/
include "conn.php";
Session_start();
 

$user_type = $_POST["user_type"];
$dn_fname = $_POST['dn_fname'];
$dn_mname = $_POST['dn_mname'];
$dn_lname = $_POST['dn_lname'];
$dn_age = $_POST['dn_age'];
$dn_gender = $_POST['dn_gender'];
$dn_city = $_POST['dn_city'];
$dn_province = $_POST['dn_province'];
$dn_zip = $_POST['dn_zip'];
$dn_blood_group = $_POST['dn_blood_group'];
$dn_height = $_POST['dn_height'];
$dn_weight = $_POST['dn_weight'];
$dn_organ = $_POST['dn_organ'];
$dn_antigen_1 = $_POST['dn_a_1'];
$dn_antigen_2 = $_POST['dn_a_2'];
$dn_antigen_3 = $_POST['dn_a_3'];
$dn_antigen_4 = $_POST['dn_a_4'];
$dn_antigen_5 = $_POST['dn_a_5'];
$dn_antigen_6 = $_POST['dn_a_6'];
$dn_ru_id = $_SESSION['lu_user_id'];
$dn_ru_phone = $_POST['dn_ru_phone'];



$tsql = "INSERT Into dbo.Donor_Profile(User_Type,D_First_Name,D_Middle_Name,D_Last_Name,
											D_Age,D_Gender,
											D_City,D_Province,
											D_Zip,
											D_Blood_Group,D_Height,D_Weight,
											D_Organ,D_Antigen_1,
											D_Antigen_2,D_Antigen_3,
											D_Antigen_4,D_Antigen_5,
											D_Antigen_6,
											Referral_User_ID,
											Referral_Phone_No
										  ) 
										  VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
$params=array($user_type,$dn_fname,$dn_mname,$dn_lname,$dn_age,$dn_gender,$dn_city,
				$dn_province,$dn_zip,$dn_blood_group,$dn_height,$dn_weight,dn_organ,
				$dn_antigen_1,$dn_antigen_2,$dn_antigen_3,$dn_antigen_4,$dn_antigen_5,
				$dn_antigen_6,$dn_ru_id,$dn_ru_phone);											
$stmt = sqlsrv_query( $conn, $tsql,$params);       
    
if ( $stmt )    
{    
/* T-SQL query to fetch the customer id and display it after the customer profile has been successfully created*/

$tsql1 = "SELECT Om_Donor_ID FROM Donor_Profile WHERE D_First_Name= '$dn_fname' AND D_Last_Name = '$dn_lname' AND D_Zip = '$dn_zip' ";
$params1 = array();
$options1 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt1=sqlsrv_query($conn,$tsql1,$params1,$options1);
$rows1 = sqlsrv_has_rows( $stmt1 );
if($rows1 === true)
{
	while( $row2 = sqlsrv_fetch_array( $stmt1, SQLSRV_FETCH_ASSOC) )
		{
		$om_dn_id = $row2['Om_Donor_ID'];
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
  <title>Donor Profile Creation</title>
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
					<strong> <?php echo"Success! The Donor profile for ".$dn_lname.",".$dn_fname." has been successfully Created and the recipient id is ".$om_dn_id;?> </strong>
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


  
 
