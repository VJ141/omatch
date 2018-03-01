<!--Form to create New Donor Profile-->
<?php 
include conn.php;
session_start();
$lu_user_id = $_SESSION['lu_user_id'];
$lu_phone_no = $_SESSION['lu_phone_no'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Donor Profile</title>
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
	<h1> Create Donor Profile</h1>
    <div class="col-sm-12 text-left"> 
		<form id="donor_prof_create_form" class="contact" name="donor_prof_create_form" method="POST"  action="donor_prof_prev.php">

			<table class="table  table-striped table-bordered">
				<thead>
					<tr>
					<th style="background-color:skyblue;">Donor ID Information</th>
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
								
								<input type="text" id="user_type" name="user_type" value="Donor" class="form-control name-field"></input>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_fname" name="dn_fname" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_mname" name="dn_mname" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_lname" name="dn_lname" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
					
					</tr>
					
					<tr>
					<th style="background-color:skyblue;"> Donor Age & Gender</th>
					</tr>
					<tr>
						<th>Age</th>
						<th>Gender</th>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<input type="text" id="dn_age" name="dn_age" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
					
						<td>
							<div class="form-group">
								
								<select class="form-control" id="dn_gender" name="dn_gender"> 
										<option value="" selected="selected"></option>
										<option value="male" >Male</option>
										<option value="female" >Female</option>
									   </select>
								</div>
						</td>
						
					</tr>
					<tr>
					<th style="background-color:skyblue;"> Donor Location</th>
					</tr
					<tr>
						
						<th>City</th>
						<th>Province</th>
						<th>Zip</th>
						
					</tr>
					<tr>
						
						<td>
							<div class="form-group">
								<input type="text" id="dn_city" name="dn_city" class="form-control name-field"  
								placeholder="" value=""></input>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_province" name="dn_province" class="form-control name-field"  
								placeholder="" value=""></input>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_zip" name="dn_zip" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
						
					</tr>
					
					<tr>
					<th style="background-color:skyblue;"> Donor Medical Information</th>
					</tr>
					
					<tr>
						
						<th>Blood Group</th>
						<th>Height</th>
						<th>Weight</th>
						<th>Organ to Donate</th>
						
					</tr>
					<tr>
						
						<td>
							<div class="form-group">
								<input type="text" id="dn_blood_group" name="dn_blood_group" class="form-control name-field"  
								placeholder="" value=""></input>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_height" name="dn_height" class="form-control name-field"  
								placeholder="in cms" value=""></input>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_weight" name="dn_weight" class="form-control name-field"  
								placeholder="in kg" value=""></input>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_organ" name="dn_organ" class="form-control name-field"  
								placeholder="" value="Kidney"></input>
								</div>
						</td>
					</tr>
					
					<tr>
					<th style="background-color:skyblue;"> Donor HLA information</th>
					</tr>
					
					<tr>
						
						<th>Antigen 1</th>
						<th>Antigen 2</th>
						<th>Antigen 3</th>
						<th>Antigen 4</th>
						<th>Antigen 5</th>
						<th>Antigen 6</th>
						
					</tr>
					<tr>
						
						<td>
							<div class="form-group">
								<input type="text" id="dn_a_1" name="dn_a_1" class="form-control name-field"  
								placeholder="" value=""></input>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_a_2" name="dn_a_2" class="form-control name-field"  
								placeholder="" value=""></input>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_a_3" name="dn_a_3" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_a_4" name="dn_a_4" class="form-control name-field"  
								placeholder="" value=""></input>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_a_5" name="dn_a_5" class="form-control name-field"  
								placeholder="" value=""></input>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="text" id="dn_a_6" name="dn_a_6" class="form-control name-field"  
								placeholder="" value=""></input>
								</div>
						</td>
					</tr>
					
					
					
					
					<tr>
						<th style="background-color:skyblue;"> Donor Contact Information</th>
					</tr>
					<tr>
						<th>Referral User ID</th>
						<th>Referral Phone No</th>
						
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_ru_id" name="dn_ru_id" class="form-control name-field"  
								placeholder="" value="<?php echo $lu_user_id ?>"></input><span class="formdata" style="color:Red;font-weight:bold;"><?php echo $lu_user_id ?></span>
								</div>
						</td>
					
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_ru_phone" name="dn_ru_phone" class="form-control name-field"  
								placeholder="" value="<?php echo $lu_phone_no ?>"></input><span class="formdata" style="color:Red;font-weight:bold;"><?php echo $lu_phone_no ?></span></input>
							</div>
						</td>
					
						
						
					</tr>
									
				</tbody>
			</table>
			<div class="form-group col-sm-12 text-center">
							<button type="submit" class="btn btn-success">Create</button>
							<button type="submit" onclick="document.getElementById('donor_prof_create_form').reset();" class="btn btn-primary">Reset</button>

			</div>
		</form>
	</div>
</div>
 
</body>
</html>