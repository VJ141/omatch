
<!--View Recipient Profile-->
<?php
session_start();
$lu_user_id = $_SESSION['lu_user_id'];
include "conn.php";

$search_recipient_id = $_POST['search_recipient_id'];
$_SESSION['search_recipient_id']= $search_recipient_id;
$tsql="SELECT * FROM Recipient_Profile WHERE Om_Recipient_ID = '$search_recipient_id'; ";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt=sqlsrv_query($conn,$tsql,$params,$options);
$rows = sqlsrv_has_rows( $stmt );
if($rows === true)
{
	while( $row2 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) )
		{
		$om_recipient_id = $row2['Om_Recipient_ID'];
		$user_type = $row2['User_Type'];
		$rp_fname = $row2['R_First_Name'];
		$rp_mname = $row2['R_Middle_Name'];
		$rp_lname = $row2['R_Last_Name'];
		$rp_age = $row2['R_Age'];
		$rp_gender = $row2['R_Gender'];
		$rp_uno = $row2['R_Unit_No'];
		$rp_sa = $row2['R_Street_Address'];
		$rp_city = $row2['R_City'];	
		$rp_province = $row2['R_Province'];	
		$rp_zip = $row2['R_Zip'];	
		$rp_phone = $row2['R_Phone_No'];	
		$rp_ru_id = $row2['Referral_User_ID'];	
		
	    }								
			
	$_SESSION['om_recipient_id']= $om_recipient_id;	
}
else
{
	header("location:norecords.php");
}	

		
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Omatch Recipient Profiles</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 350px}
   
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
          .row.content {height:auto;} 
    }
	
	.text_font_size{font-size:14px;}
	.header_color{color:blue;font-weight:bold;}
  </style>
  

  
</head>
<body>


  
<div class="container-fluid text-center" style="padding-top:50px;font-size:14px;">    
  <div class="row content">
	<h1> Recipient Profile</h1>
    
	<div class="col-sm-8 text-left">
		<form id="Recipient_prof_view_form" class="contact" name="Recipient_prof_view_form"> 
			<table class="table  table-striped table-bordered">
				<thead></thead>
				<tbody>
				
					
					<th style="background-color:skyblue;">Recipient ID Information</th>
					
						<tr>
							<td class="header_color">Om Recipient ID</td><td><?php echo $om_recipient_id;?></td>
						</tr>
						<tr>
							<td class="header_color">User Type</td><td><?php echo $user_type;?></td>
						</tr>
						<tr>
							<td class="header_color"> Name</td><td><?php echo $rp_lname;?>,<?php echo $rp_fname;?><?php echo $cp_cu_mn;?></td>
						</tr>
						
					
					<tr>
					<th style="background-color:skyblue;"> Recipient Age and Gender</th>
					</tr>
					<tr>
					<td class="header_color">Age</td><td><?php echo $rp_age;?></td>
					<td class="header_color">Gender</td><td><?php echo $rp_gender;?></td>
					</tr>
					
					<tr>
						<th style="background-color:skyblue;"> Recipient Address</th>
					</tr>
					<tr>
						<td class="header_color">Address</td><td><?php echo $rp_uno;?>,<?php echo $rp_sa;?></br><?php echo $rp_city;?>,<?php echo $rp_province;?><?php echo $rp_zip;?></td>
						
					</tr>
					
					<tr>
						<td class="header_color">Phone No</td><td><?php echo $rp_phone;?></td>
					</tr>
					
					<tr>
					<th style="background-color:skyblue;"> Referral Information</th>
					</tr>
					<tr>
					<td class="header_color">Referral User Id</td><td><?php echo $rp_ru_id;?></td>
					</tr>
					
				</tbody>
			</table>
						<div class="form-group text-center">
							<a href="edit_Recipient_profile.php"><button type="button" class="btn btn-success">Edit</button></a>
							 <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-danger" >Delete Recipient Profile</button>
			</div>
		</form>
	</div>
</div>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Recipient Profile</h4>
        </div>
        <div class="modal-body">
          <p> Do you wish to continue?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
		  <a href="delete_Recipient_profile.php"><button type="button" class="btn btn-success" >Yes</button></a>
		  
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>