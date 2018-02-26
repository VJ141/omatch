<?php
include "conn.php";
session_start();
$email=$_POST['emailid'];
$password=$_POST['password'];


$tsql="SELECT 
		[Om_User_ID]
      ,[User_Type]
      ,[First_Name]
      ,[Middle_Name]
      ,[Last_Name]
      ,[Age]
      ,[Gender]
      ,[Unit_No]
      ,[Street_Address]
      ,[City]
      ,[Province]
      ,[Zip]
      ,[Phone_No]
      ,[Email_Id]
      ,[Password]
		FROM [dbo].[User_Profile]
		where
		Email_Id='$email' 
		and Password='$password'";
$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_STATIC );
$stmt=sqlsrv_query($conn,$tsql,$params,$options);
$row2=sqlsrv_num_rows($stmt);
if($row2 == 1)
{
	while( $row2 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) )
		{
		 
		  $_SESSION['user_id'] = $row2['Om_User_ID'];
		  $_SESSION['u_usertype'] = $row2['User_Type'];
		  $_SESSION['u_fn'] = $row2['First_Name'];
		  $_SESSION['u_mn'] = $row2['Middle_Name'];
		  $_SESSION['u_ln'] = $row2['Last_Name'];
		  
		  $_SESSION['u_eid'] = $row2['Email_Id'];
		  $_SESSION['u_age']= $row2['Age'];
		  $_SESSION['u_Gender']= $row2['Gender'];
	  
		}
		
	if($_SESSION['u_usertype'] === "doctor")//if usertype is doctor go to doctor account page
	{	
		header("location:d_account.php");
	}
}



else
{
	echo "wrong username or password";
}
?>
