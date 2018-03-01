<!--Donor Profile Preview-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Donor Profile Preview</title>
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
	<h1> Donor Profile</h1>
    <div class="col-sm-12 text-left"> 
		<form id="donor_profile_prev_form" class="contact" name="donor_profile_prev_form" method="POST"  action="create_donor_profile.php">

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
								<input type="hidden" id="user_type" name="user_type" class="form-control name-field"  
								 value="<?php echo $_POST["user_type"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["user_type"]; ?></span>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_fname" name="dn_fname" class="form-control name-field required"  
								placeholder="" " value="<?php echo $_POST["dn_fname"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_fname"]; ?></span>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_mname" name="dn_mname" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_mname"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_mname"]; ?></span>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_lname" name="dn_lname" class="form-control name-field required"  
								placeholder="" value="<?php echo $_POST["dn_lname"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_lname"]; ?></span>
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
								<input type="hidden" id="dn_age" name="dn_age" class="form-control name-field required"  
								placeholder="" value="<?php echo $_POST["dn_age"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_age"]; ?></span>
								</div>
						</td>
					
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_gender" name="dn_gender" class="form-control name-field required"  
								placeholder="" value="<?php echo $_POST["dn_gender"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_gender"]; ?></span>
								</div>
						</td>
						
					</tr>
					<tr>
					<th style="background-color:skyblue;"> Donor Location</th>
					</tr>
					<tr>
						
						<th>City</th>
						<th>Province</th>
						<th>Zip</th>
						
					</tr>
					<tr>
						
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_city" name="dn_city" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_city"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_city"]; ?></span>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_province" name="dn_province" class="form-control name-field required"  
								placeholder="" value="<?php echo $_POST["dn_province"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_province"]; ?></span>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_zip" name="dn_zip" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_zip"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_zip"]; ?></span>
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
						<th>Organ</th>
						
					</tr>
					<tr>
						
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_blood_group" name="dn_blood_group" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_blood_group"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_blood_group"]; ?></span>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_height" name="dn_height" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_height"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_height"]; ?></span>
							</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_weight" name="dn_weight" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_weight"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_weight"]; ?></span>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_organ" name="dn_organ" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_organ"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_organ"]; ?></span>
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
								<input type="hidden" id="dn_a_1" name="dn_a_1" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_a_1"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_a_1"]; ?></span>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_a_2" name="dn_a_2" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_a_2"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_a_2"]; ?></span>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_a_3" name="dn_a_3" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_a_3"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_a_3"]; ?></span>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_a_4" name="dn_a_4" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_a_4"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_a_4"]; ?></span>
								</div>
						</td>
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_a_5" name="dn_a_5" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_a_5"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_a_5"]; ?></span>
								</div>
						</td><td>
							<div class="form-group">
								<input type="hidden" id="dn_a_6" name="dn_a_6" class="form-control name-field"  
								placeholder="" value="<?php echo $_POST["dn_a_6"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_a_6"]; ?></span>
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
								placeholder="" value="<?php echo $_POST["dn_ru_id"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_ru_id"]; ?></span>
								</div>
						</td>
						
						<td>
							<div class="form-group">
								<input type="hidden" id="dn_ru_phone" name="dn_ru_phone" class="form-control name-field required"  
								placeholder="" value="<?php echo $_POST["dn_ru_phone"]; ?>"></input>
								<span class="formdata" style="color:Red;font-weight:bold;"><?php echo $_POST["dn_ru_phone"]; ?></span>
								</div>
						</td>
					
						
					</tr>
									
				</tbody>
			</table>
			<div class="form-group col-sm-12 text-center">
							<button type="submit" class="btn btn-success">Confirm</button>

							
			</div>
						
		</form>
	</div>
</div>
 
</body>
</html>