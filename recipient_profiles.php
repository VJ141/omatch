<?php session_start();
include "conn.php";
$lu_user_id = $_SESSION['lu_user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Recipient Profiles</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"> <!-- link to use twitter bootstrap datatables for pagination-->
  <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script><!-- link to use twitter bootstrap datatables for pagination-->
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 250px;padding-left:50px;}
   
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
          .row.content {height:auto;padding-top:auto;padding-left:auto;} 
    }
	
	
  </style>
</head>
<body>

<div class="container-fluid text-center">    
	
		<div class="row content" style="padding-right:5%;">
		<?php
					
					$tsql="select Om_Recipient_ID,User_Type,R_First_Name,R_Middle_Name,R_Last_Name,R_Age,
						   R_Gender,Referral_User_ID from Recipient_Profile Where Referral_User_ID = '$lu_user_id' order by Om_Recipient_ID  ;";
					$params = array();
					$options =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
					$stmt =sqlsrv_query($conn,$tsql,$params,$options);
					$num=sqlsrv_has_rows($stmt);
					
						
				?>
		
		<div class="col-sm-8 text-center"> 
			<h1 style="padding-left:200px;">Recipient Profiles</h1></br></br>
		</div>
	
		<div class="col-sm-12 text-left"> 
		<table id="Recipient_profile_table" class="table  table-striped"> 					<!-- bootstrap table class and striped table class-->
					<thead>	
						<tr>											<!-- bootstrap table header class-->
							<th>Om Recipient ID</th>
							<th>User Type</th>					<!--  table headers or column names under which the record values will be displayed-->
							<th>First Name</th>
							<th>Middle Name</th>
							<th>Last Name</th>
							<th>Age</th>
							<th>Gender</th>
							<th>Referral User</th>
							
					
					</thead>
					<tbody>
						
						<?php																											/* Php While statement  which loops and gets the values of all the records*/
							while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) )
								{
								
								echo "<tr>";
								echo "<td>".$row['Om_Recipient_ID']."</td>";
								echo "<td>".$row['User_Type']."</td>";
								echo "<td>".$row['R_First_Name']."</td>";
								echo "<td>".$row['R_Middle_Name']."</td>";
								echo "<td>".$row['R_Last_Name']."</td>";
								echo "<td>".$row['R_Age']."</td>";
								echo "<td>".$row['R_Gender']."</td>";
								echo "<td>".$row['Referral_User_ID']."</td>";
								echo "</tr>";								
								}
						?>
							
						</tr>
						
					</tbody>
				</table>	
				<script>
					$(document).ready(function(){
						$('#Recipient_profile_table').dataTable();
						
					});
				</script>				
		</div>
	
</div>

<div class="row content">
		<div class="col-sm-6 text-left"> 
			<h3> Search Recipient Profile</h3>
		
		
			 <div id="cnt_form">
					<form 	id="wp-form" 
							class="contact" 
							name="Recipient_search_form"
							method="post" 
							action="view_recipient_profile.php">					 <!-- To view a specific Recipient Profile-->
						<div class="form-group">
						
							To view the Recipient profile enter the Recipient's Om Recipient ID:													
							<input  type="text" 
									id="search_recipient_id" 
									name="search_recipient_id"
									class="form-control mail-field input-lg"
									required="required" 
									placeholder="Om Recipient ID">
						</div> 
						
							<button type="submit" class="btn btn-primary">View</button>
				</form> 
			</div>
		</div>
	</div>
</div>
</body>
</html>

