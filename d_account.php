
<?php

/* start the session. If the login user's first name is empty redirect the user to the login page.*/
session_start();
if(!isset($_SESSION['lu_fn']))
{
header("location:index.html");
}
$first_name = $_SESSION['lu_fn'];
$last_name = $_SESSION['lu_ln'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Omatch</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  background-color:rgb(88, 144, 255);
	  color:white;
	  z-index:5000;
	  box-shadow:2px 2px 2px black;
	  }
    
	
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 940px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color:;
      height: 100%;
	}
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	.w3-myfont {
  font-family: "verdana", cursive, sans-serif;
}
	
  </style>
</head>
<body>


<!-- Main Navigation Bar on top-->
<nav class="navbar navbar-inverse w3-gray w3-myfont" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color:white;font-weight:bold;" href="#">Omatch</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a style="color:white;font-weight:bold;" href="#">Home</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" style="color:white;font-weight:bold;" href="#">My Profile<span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a onclick="myProfile()">View Profile</a></li>
				<script>
					function myProfile() {
						document.getElementById("acc_iframe").src = "my_profile.php";
					}
					</script>
				</ul>
		</li>
	 </ul>
     <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" style="color:white;font-weight:bold;" href="#"><?php echo $last_name.",".$first_name;?><span class="caret"></span></a>
				<ul class="dropdown-menu">
				<li><a style="color:black;font-weight:bold;" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
				
      </ul>
    </div>
  </div>
</nav>
 


<!--Side Navigation Bar-->
 
<div  class="container-fluid text-center ">    
  <div   class="row content ">
      <div class="col-sm-2 sidenav w3-blue">


					
		<p>			
			<div class="btn-group" style="width:100%;padding-bottom:5%;">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:100%;border-radius:5% 5% 5% 5%" >
					Recipient Profiles<span class="caret"></span></button>
					<ul class="dropdown-menu" role="menu">
						<li><button type="button" class="btn btn-link" style="width:100%;"><a style="text-decoration:none;" onclick="cre_custProfile()">Create Recipient Profile</a></button>
							<script>
								function cre_custProfile() {
									document.getElementById("acc_iframe").src = "create_recipient_proform.php";
								}
							</script>
						</li>
						<li><button type="button" class="btn btn-link" style="width:100%;"><a style="text-decoration:none;" onclick="view_custProfile()">View Recipient Profile</a></button>
							<script>
								function view_custProfile() {
									document.getElementById("acc_iframe").src = "recipient_profiles.php";
								}
							</script></li>
							
					</ul>
			</div>
		</p>
		
		
	<p> 
		<div class="btn-group" style="width:100%;padding-bottom:5%;">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:100%;border-radius:5% 5% 5% 5%;">
				Donor Profiles<span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu">
					<li><button type="button" class="btn btn-link" style="width:100%;"><a style="text-decoration:none;" onclick="cre_workerProfile()">Create Donor Profile</a></button>
					   <script>
							function cre_workerProfile() {
								document.getElementById("acc_iframe").src = "create_donor_proform.php";
							}
						</script>
					</li>
					<li><button type="button" class="btn btn-link" style="width:100%;"><a style="text-decoration:none;" onclick="view_workerProfile()">View Donor Profile</a></button>
					   <script>
							function view_workerProfile() {
								document.getElementById("acc_iframe").src = "donor_profiles.php";
							}
						</script></li>
				</ul>
		</div>
	 </p>
	 <p> 
		<div class="btn-group" style="width:100%;padding-bottom:5%;">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="width:100%;border-radius:5% 5% 5% 5%;">
				Find Matches<span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu">
					<li><button type="button" class="btn btn-link" style="width:100%;"><a style="text-decoration:none;" onclick="ch_cust_serv_hist()">Find an Organ Match</a></button>
					   <script>
							function ch_cust_serv_hist() {
								document.getElementById("acc_iframe").src = "find_organ_match.php";
							}
						</script>
					</li>
					
		</div>
	 </p>
	 
	 
		</div>
    
<!-- Midddle Result Pane-->
    <div class="col-sm-9 text-left"> 
	
	<div class="embed-responsive embed-responsive-4by3">
		<iframe id="acc_iframe" class="embed-responsive-item" src="recipient_profiles.php">
		  
		</iframe>
	</div>
    </div>

 </div>
</div>



<!--Footer-->
<div class="row foot">
<footer class="container-fluid text-center">
  <p></p>
</footer>
</div>
</body>
</html>
