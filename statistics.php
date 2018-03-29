<?php session_start();
include "conn.php";
$lu_user_id = $_SESSION['lu_user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Statisics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <link href="https://canvasjs.com/assets/css/jquery-ui.1.11.2.min.css" rel="stylesheet" />

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
	
	<div class="row content" style="padding-right:5%;padding-top:5%;">
	<h3> Statistics</h3>
		
		
		<div class="col-sm-12 text-center"> 
			
			<ul id="tab-bg" class="nav nav-tabs tab-bg">
				<li class="active"><a data-toggle="tab" href="#menu1" style="font-weight:bold;color:green;">Statistics By Province</a></li>
				<li><a   data-toggle="tab" href="#menu2"  style="font-weight:bold;color:green;">Statistics By City</a></li>
			</ul>
			
			
		<div  class="tab-content navi">	
			<div id="menu1" class="tab-pane fade in active"> 
			
				<div class="col-sm-8 text-left"> 
					<form id="donor_prof_create_form" class="contact" name="select_province_form" method="POST"  action="statprovince1.php">

						<table class="table  table-striped table-bordered">
							
							<tr>
								<td>
									<b>Select Province</b>
								</td>
								<td>
									<div class="wrap-input100 validate-input" data-validate = "Province is required">
										
											<select name="province" id="province" class="form-control-sm form-control">
													<option value="0">Please select </option>
													<option value="AB">Alberta</option>
													<option value="BC">British Columbia</option>
													<option value="MB">Manitoba</option>
													<option value="NL">Newfoundland and Labrador</option>
													<option value="NB">New Brunswick</option>
													<option value="NS">Nova Scotia</option>
													<option value="ON">Ontario</option>
													<option value="PEI">Prince Edward Island</option>
													<option value="QB">Quebec</option>
													<option value="SW">Saskatchewan</option>
												  </select>
									</div>
								</td>
								
								</tr>
								
								<tr>
							
							<td>
								<b>Select Usertype</b>
							</td>
							<td>
								<div class="wrap-input100 " >
								
										<select name="usertype" id="usertype" class="form-control-sm form-control">
												<option value="0">Please select</option>
												<option value="Donor">Donor</option>
												<option value="Recipient">Recipient</option>
											  </select>
								</div>
							</td>
							</tr>
							
								
									
						</table>
						<div class="form-group col-sm-12 text-center">
										<button type="submit" onclick="document.getElementById('select_province_form').reset();" class="btn btn-primary">Submit</button>

						</div>
					</form>
				</div>
				
				
				
						

							
			</div>
				
		
			<div id="menu2" class="tab-pane fade in "> 
			
				<div class="col-sm-12 text-left"> 
					<form id="donor_prof_create_form" class="contact" name="select_city_form" method="POST"  action="statprovince2.php">

						<table class="table  table-striped table-bordered">
							<td>
							<div class="wrap-input100 validate-input" data-validate = "City is required">
									<select name="city" id="city" class="form-control-sm form-control">
											<option value="0">Please select</option>
											<option value="Thunder Bay">Thunder Bay</option>
											<option value="Winnipeg">Winnipeg</option>
											<option value="Regina">Regina</option>
											<option value="Windsor">Windsor</option>
											<option value="London">London</option>
											<option value="Toronto">Toronto</option>
											<option value="Ottawa">Ottawa</option>
											<option value="Vancouver">Vancouver</option>
											<option value="Whistler">Whistler</option>
											<option value="Edmonton">Edmonton</option>
											<option value="Halifax"> Halifax</option>
										  </select>
								</div>
							</td>
								
									
						</table>
						<div class="form-group col-sm-12 text-center">
										<button type="submit" onclick="document.getElementById('select_city_form').reset();" class="btn btn-primary">submit</button>

						</div>
					</form>
				</div>
				
			
				
			</div>
		</div>
				
		</div>
	
	</div>


</div>
</body>
</html>

