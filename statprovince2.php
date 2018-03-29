<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--Load the AJAX API-->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    

<?php session_start();
include "conn.php";
$lu_user_id = $_SESSION['lu_user_id'];
$city = $_POST['city'];
//$city2 = $_POST['city2'];
$gender = $_POST['gender'];
$usertype = $_POST['usertype'];
$organ = $_POST['organ'];
$bloodgroup = $_POST['bloodgroup'];
//$agegroup = $_POST['agegroup'];







//Fetch number of donor profile 
$tsql="SELECT * FROM Donor_Profile WHERE D_City = '$city'; ";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt=sqlsrv_query($conn,$tsql,$params,$options);
$no_donor = sqlsrv_num_rows( $stmt );

//Fetch number of male donors profile 
$tsql2="SELECT * FROM Donor_Profile WHERE D_Gender = 'male' AND D_City = '$city'; ";
$params2 = array();
$options2 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt2=sqlsrv_query($conn,$tsql2,$params2,$options2);
$no_male_donor = sqlsrv_num_rows( $stmt2 );

//Fetch number of female donors profile 
$tsql3="SELECT * FROM Donor_Profile WHERE D_Gender = 'female' AND D_City = '$city'; ";
$params3 = array();
$options3 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt3 = sqlsrv_query($conn,$tsql3,$params3,$options3);
$no_female_donor = sqlsrv_num_rows( $stmt3 );


//Fetch number of young donors profile 
$tsql4="SELECT * FROM Donor_Profile WHERE D_Age < 30 AND D_City = '$city';";
$params4 = array();
$options4 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt4 =sqlsrv_query($conn,$tsql4,$params4,$options4);
$no_young_donor = sqlsrv_num_rows( $stmt4 );

//Fetch number of middle donors profile 
$tsql5="SELECT * FROM Donor_Profile WHERE D_Age > 30 AND D_City = '$city';";
$params5 = array();
$options5 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt5 =sqlsrv_query($conn,$tsql5,$params5,$options5);
$no_middle_donor = sqlsrv_num_rows( $stmt5 );

//Fetch number of  donors profile b+ve
$tsql51="SELECT * FROM Donor_Profile WHERE D_Blood_Group = 'B+' AND D_City = '$city';";
$params51 = array();
$options51 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt51 =sqlsrv_query($conn,$tsql51,$params51,$options51);
$no_bp_donor = sqlsrv_num_rows( $stmt51 );

//Fetch number of  donors profile b-ve
$tsql52="SELECT * FROM Donor_Profile WHERE D_Blood_Group = 'B-' AND D_City = '$city';";
$params52 = array();
$options52 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt52 =sqlsrv_query($conn,$tsql52,$params52,$options52);
$no_bn_donor = sqlsrv_num_rows( $stmt52 );

//Fetch number of  donors profile A+ve
$tsql53="SELECT * FROM Donor_Profile WHERE D_Blood_Group = 'A+' AND D_City = '$city';";
$params53 = array();
$options53 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt53 =sqlsrv_query($conn,$tsql53,$params53,$options53);
$no_ap_donor = sqlsrv_num_rows( $stmt53 );

//Fetch number of  donors profile A-ve
$tsql54="SELECT * FROM Donor_Profile WHERE D_Blood_Group = 'A-' AND D_City = '$city';";
$params54 = array();
$options54 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt54 =sqlsrv_query($conn,$tsql54,$params54,$options54);
$no_an_donor = sqlsrv_num_rows( $stmt54);

//Fetch number of  donors profile o-ve
$tsql55="SELECT * FROM Donor_Profile WHERE D_Blood_Group = 'O-' AND D_City = '$city';";
$params55 = array();
$options55 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt55 =sqlsrv_query($conn,$tsql55,$params55,$options55);
$no_on_donor = sqlsrv_num_rows( $stmt55);

//Fetch number of  donors profile o+ve
$tsql56="SELECT * FROM Donor_Profile WHERE D_Blood_Group = 'O+' AND D_City = '$city';";
$params56 = array();
$options56 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt56 =sqlsrv_query($conn,$tsql56,$params56,$options56);
$no_op_donor = sqlsrv_num_rows( $stmt56);


//Fetch number of  donors profile AB-ve
$tsql57="SELECT * FROM Donor_Profile WHERE D_Blood_Group = 'AB-' AND D_City = '$city';";
$params57 = array();
$options57 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt57 =sqlsrv_query($conn,$tsql57,$params57,$options57);
$no_abn_donor = sqlsrv_num_rows( $stmt57);

//Fetch number of  donors profile AB+ve
$tsql58="SELECT * FROM Donor_Profile WHERE D_Blood_Group = 'AB+' AND D_City = '$city';";
$params58 = array();
$options58 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt58 =sqlsrv_query($conn,$tsql58,$params58,$options58);
$no_abp_donor = sqlsrv_num_rows( $stmt58);




//Fetch number of recipient profile 
$tsq6="SELECT * FROM Recipient_Profile WHERE R_City = '$city'; ";
$params6 = array();
$options6 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt6=sqlsrv_query($conn,$tsql6,$params6,$options6);
$no_recipient = sqlsrv_num_rows( $stmt6 );

//Fetch number of male Recipient profile 
$tsql7="SELECT * FROM Recipient_Profile WHERE R_Gender = 'male' AND R_City = '$city'; ";
$params7 = array();
$options7 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt7=sqlsrv_query($conn,$tsql7,$params7,$options7);
$no_male_recipient = sqlsrv_num_rows( $stmt7 );

//Fetch number of female Recipient profile 
$tsql8="SELECT * FROM Recipient_Profile WHERE R_Gender = 'female' AND R_City = '$city'; ";
$params8 = array();
$options8 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt8 = sqlsrv_query($conn,$tsql8,$params8,$options8);
$no_female_recipient = sqlsrv_num_rows( $stmt8 );


//Fetch number of young Recipients profile 
$tsql9="SELECT * FROM Recipient_Profile WHERE R_Age < 30 AND R_City = '$city'; ";
$params9 = array();
$options9 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt9 =sqlsrv_query($conn,$tsql9,$params9,$options9);
$no_young_recipient = sqlsrv_num_rows( $stmt9 );

//Fetch number of middle Recipient profile 
$tsql10="SELECT * FROM Recipient_Profile WHERE R_Age > 30 AND R_City = '$city'; ";
$params10 = array();
$options10 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt10 =sqlsrv_query($conn,$tsql10,$params10,$options10);
$no_middle_recipient = sqlsrv_num_rows( $stmt10 );


//Fetch number of  recipient profile b+ve
$tsql21="SELECT * FROM Recipient_Profile WHERE R_Blood_Group = 'B+' AND R_City = '$city';";
$params21 = array();
$options21 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt21 =sqlsrv_query($conn,$tsql21,$params21,$options21);
$no_bp_recipient = sqlsrv_num_rows( $stmt21 );

//Fetch number of  recipient profile b-ve
$tsql22="SELECT * FROM Recipient_Profile WHERE R_Blood_Group = 'B-' AND R_City = '$city';";
$params22 = array();
$options22 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt22 =sqlsrv_query($conn,$tsql22,$params22,$options22);
$no_bn_recipient = sqlsrv_num_rows( $stmt22 );

//Fetch number of  recipient profile A+ve
$tsql23="SELECT * FROM Recipient_Profile WHERE R_Blood_Group = 'A+' AND R_City = '$city';";
$params23 = array();
$options23 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt23 =sqlsrv_query($conn,$tsql23,$params23,$options23);
$no_ap_recipient = sqlsrv_num_rows( $stmt23 );

//Fetch number of  recipient profile A-ve
$tsql24="SELECT * FROM Recipient_Profile WHERE R_Blood_Group = 'A-' AND R_City = '$city';";
$params24 = array();
$options24 =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt24 =sqlsrv_query($conn,$tsql24,$params24,$options24);
$no_an_recipient = sqlsrv_num_rows( $stmt24 );

?>
<!--script to display pie chart male to female donor-->
<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Gender');
        data.addColumn('number', 'No.of donors');
        data.addRows([
          ['male', <?php echo  $no_male_donor; ?>],
          ['female', <?php echo $no_female_donor; ?>]
          
        ]);

        // Set chart options
        var options = {'title':' Ratio of Male to Female Donors',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }
    </script>
	
	<!--script to display pie chart young and middle age donor-->

	<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Gender');
        data.addColumn('number', 'No.of donors');
        data.addRows([
          ['Young', <?php echo  $no_young_donor; ?>],
          ['Middle Aged', <?php echo $no_middle_donor; ?>]
          
        ]);

        // Set chart options
        var options = {'title':' Ratio of Young to middle Donors',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
    </script>
	
		<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Bloodgroup');
        data.addColumn('number', 'No.of donors');
        data.addRows([
          ['B+', <?php echo  $no_bp_donor; ?>],
          ['B-', <?php echo $no_bn_donor; ?>],
		  ['A-', <?php echo $no_an_donor; ?>],
		  ['A+', <?php echo $no_ap_donor; ?>],
		  ['AB+',<?php echo $no_abp_donor; ?>],
		  ['AB-',<?php echo $no_abn_donor; ?>],
		  ['O+',<?php echo $no_op_donor; ?>],
		  ['O-',<?php echo $no_on_donor; ?>]
		  
		  
          
        ]);

        // Set chart options
        var options = {'title':' Donor blood groups',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));
        chart.draw(data, options);
      }
    </script>
	
	<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Gender');
        data.addColumn('number', 'No.of donors');
        data.addRows([
          ['male', <?php echo  $no_male_recipient; ?>],
          ['female', <?php echo $no_female_recipient; ?>]
          
        ]);

        // Set chart options
        var options = {'title':' Ratio of Male to Female Recipients',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div4'));
        chart.draw(data, options);
      }
    </script>
	
	<!--script to display pie chart young and middle age donor-->

	<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Gender');
        data.addColumn('number', 'No.of donors');
        data.addRows([
          ['Young', <?php echo  $no_young_recipient; ?>],
          ['Middle Aged', <?php echo $no_middle_recipient; ?>]
          
        ]);

        // Set chart options
        var options = {'title':' Ratio of Young to middle recipient',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div5'));
        chart.draw(data, options);
      }
    </script>
	
		<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Bloodgroup');
        data.addColumn('number', 'No.of donors');
        data.addRows([
          ['B+', <?php echo  $no_bp_recipient; ?>],
          ['B-', <?php echo $no_bn_recipient; ?>],
		  ['A-', <?php echo $no_an_recipient; ?>],
		  ['A+', <?php echo $no_ap_recipient; ?>],
		  ['AB+',<?php echo $no_abp_recipient; ?>],
		  ['AB-',<?php echo $no_abn_recipient; ?>],
		  ['O+',<?php echo $no_op_recipient; ?>],
		  ['O-',<?php echo $no_on_recipient; ?>]
		  
		  
          
        ]);

        // Set chart options
        var options = {'title':' Recipient Blood Groups',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('chart_div6'));
        chart.draw(data, options);
      }
    </script>
	

					
</head>
<body>
<div class="container-fluid text-center ">    
	
	<div class="row content col-sm-12" style="padding-right:5%;">
		
		
		<div class="col-sm-12 text-center"> 
			<h1 style="text-align:center;color:blue;">Statistics of <?php echo $city;?></h1></br></br>
		</div>
	<div class="row content col-sm-12" style="padding-right:5%;">
		<div class="col-sm-6 text-left"> 
		<table id="donor_profile_table" class="table  table-striped"> 					<!-- bootstrap table class and striped table class-->
					<tr>
					<th style="color:Green;font-weight:bold;font-size:1.2em;"> Donor Statistics</th>
					</tr>
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1em;">City:</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $city;?></td>
					</tr>
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1em;">No of Donors:</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_donor;?></td>
					</tr>
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Male donors :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_male_donor;?></td>
					</tr>	
					<th style="color:blue;font-weight:bold;font-size:1em;">No of Female donors:</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_female_donor;?></td>
					</tr>	
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Youth Donors(>30) :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_young_donor;?></td>
					</tr>	
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Middle age Donors(30<) :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_donor;?></td>
					</tr>
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with B+ Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_bp_donor;?></td>
					</tr>
					
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with B- Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_bn_donor;?></td>
					</tr>
			</table>
			</div>
					
			<div class="col-sm-6 text-left"> 
				<table id="donor_profile_table" class="table  table-striped">
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with A+ Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_ap_donor;?></td>
					</tr>
					
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with A- Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_an_donor;?></td>
					</tr>
					
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with AB+ Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_abp_donor;?></td>
					</tr>
					
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with AB- Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_abn_donor;?></td>
					</tr>
					
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with O+ Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_op_donor;?></td>
					</tr>
					
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with O- Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_on_donor;?></td>
					</tr>
					</table>
		</div>
		</div>

	
	<div class="row content col-sm-12" style="padding-right:5%;">
		<div class="col-sm-4 text-left">
			 <div id="chart_div1"><p></p></div>
		</div>
	
		
		<div class="col-sm-4 text-left">
			<div id="chart_div2"><p></p></div>
		</div>
		
		
		<div class="col-sm-4 text-left">
			<div id="chart_div3"><p></p></div>
		</div>
	</div>
		
		
	
	<div class="row content" style="padding-right:5%;">
		
		<div class="col-sm-6 text-left "> 
		<table id="recipient_profile_table1" class="table  table-striped"> 					<!-- bootstrap table class and striped table class-->
					<tr>
					<th style="color:Green;font-weight:bold;font-size:1.2em;"> Recipient Statistics</th>
					</tr>
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1em;">City:</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $city;?></td>
					</tr>
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1em;">No of Recipient:</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_recipient;?></td>
					</tr>
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Male recipients :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_male_recipient;?></td>
					</tr>	
					<th style="color:blue;font-weight:bold;font-size:1em;">No of Female recipients:</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_female_recipient;?></td>
					</tr>	
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Youth Recipients(>30) :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_young_recipient;?></td>
					</tr>	
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Middle age Recipients(30<) :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_middle_recipient;?></td>
					</tr>
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with B+ Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_bp_recipient;?></td>
					</tr>
					
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with B- Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_bn_recipient_;?></td>
					</tr>
				</table>
			</div>
			<div class="col-sm-6 text-left"> 
				<table id="recipient_profile_table2" class="table  table-striped">		
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with A+ Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_ap_recipient;?></td>
					</tr>
					
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with A- Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_an_recipient;?></td>
					</tr>
					
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with AB+ Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_abp_recipient;?></td>
					</tr>
					
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with AB- Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_abn_recipient;?></td>
					</tr>
					
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with O+ Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_op_recipient;?></td>
					</tr>
					<tr>
					<th style="color:blue;font-weight:bold;font-size:1;">No of Donor with O- Blood :</th>
						<td style="color:red;font-weight:bold;font-size:0.8em;"><?php echo $no_on_recipient;?></td>
					</tr>
			</table>
		</div>
	</div>
	<div class="row content col-sm-12" style="padding-right:5%;">
		<div class="col-sm-4 text-left">
			 <div id="chart_div4"><p></p></div>
		</div>
	
		
		<div class="col-sm-4 text-left">
			<div id="chart_div5"><p></p></div>
		</div>
		
		
		<div class="col-sm-4 text-left">
			<div id="chart_div6"><p></p></div>
		</div>
	</div>
		
		</div>
		</div>
</div>
	</div>
	
</body>
</html>