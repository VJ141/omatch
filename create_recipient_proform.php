<!--Form to create New Recipient Profile-->
<?php 
include conn.php;
session_start();
$lu_user_id = $_SESSION['lu_user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Recipient Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 350px}
   
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
          .row.content {height:auto;} 
    }
	
	
  </style>
  

  
</head>
<body>


  
<div class="container-fluid text-center" style="padding-top:50px;">    
  <div class="row content">
	<h1> Create Recipient Profile</h1>
    <div class="col-sm-12 text-left"> 
		<form id="recipient_prof_create_form" class="contact" name="recipient_prof_create_form" method="POST"  action="recipient_prof_prev.php">

			<table class="table  table-striped table-bordered">
				<thead>
					<tr>
					<th style="background-color:skyblue;">Recipient ID Information</th>
					</tr>
					<tr>
						
						<th>User Type</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
					</tr>
					
				</thead>
				<tbody>
					<tr>
						
						<td>
							<div class="form-group">
								
								<input type="text" id="user_type" name="user_type" value="Recipient" class="form-control name-field"></input>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="rp_fname" name="rp_fname" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="rp_mname" name="rp_mname" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="rp_lname" name="rp_lname" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
					
					</tr>
					
					<tr>
					<th style="background-color:skyblue;"> Recipient Age & Gender</th>
					</tr>
					<tr>
						<th>Age</th>
						<th>Gender</th>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<input type="text" id="rp_age" name="rp_age" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
					
						<td>
							<div class="form-group">
								
								<select class="form-control" id="rp_gender" name="rp_gender"> 
										<option value="" selected="selected"></option>
										<option value="male" >Male</option>
										<option value="female" >Female</option>
									   </select>
								</div>
						</td>
						
					</tr>
					<tr>
					<th style="background-color:skyblue;"> Recipient Address</th>
					</tr
					<tr>
						<th>Unit No</th>
						<th>Street Address</th>
						<th>City</th>
						<th>Province</th>
						<th>Zip</th>
						
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<input type="text" id="rp_uno" name="rp_uno" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="rp_sa" name="rp_sa" class="form-control name-field"  
								placeholder="" value=""></input>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="rp_city" name="rp_city" class="form-control name-field"  
								placeholder="" value=""></input>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="rp_province" name="rp_province" class="form-control name-field"  
								placeholder="" value=""></input>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="rp_zip" name="rp_zip" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
						
					</tr>
					<tr>
						<th style="background-color:skyblue;"> Recipient Contact Information</th>
					</tr>
					<tr>
						<th>Recipient Phone No</th>
						<th>Referral User ID</th>
						
					</tr>
					<tr>
					
						<td>
							<div class="form-group">
								<input type="text" id="rp_phone" name="rp_phone" class="form-control name-field"  
								placeholder="" value=""></input>
							</div>
						</td>
					
						<td>
							<div class="form-group">
								<input type="hidden" id="rp_ru_id" name="rp_ru_id" class="form-control name-field"  
								placeholder="" value="<?php echo $lu_user_id ?>"></input><span class="formdata" style="color:Red;font-weight:bold;"><?php echo $lu_user_id ?></span>
								</div>
						</td>
						
					</tr>
									
				</tbody>
			</table>
			<div class="form-group col-sm-12 text-center">
							<button type="submit" class="btn btn-success">Create</button>
							<button type="submit" onclick="document.getElementById('recipient_prof_create_form').reset();" class="btn btn-primary">Reset</button>

			</div>
		</form>
	</div>
</div>
 
</body>
</html>