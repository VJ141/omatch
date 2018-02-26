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
		 
		  $_SESSION['lu_user_id'] = $row2['Om_User_ID'];
		  $_SESSION['lu_usertype'] = $row2['User_Type'];
		  $_SESSION['lu_fn'] = $row2['First_Name'];
		  $_SESSION['lu_mn'] = $row2['Middle_Name'];
		  $_SESSION['lu_ln'] = $row2['Last_Name'];
		  
		  $_SESSION['lu_eid'] = $row2['Email_Id'];
		  $_SESSION['lu_age']= $row2['Age'];
		  $_SESSION['lu_Gender']= $row2['Gender'];
	  
		}
		
	if($_SESSION['lu_usertype'] === "recipient")//if usertype is receipient go to receipient account page
	{
		
		header("location:r_account.php");
	}
	elseif($_SESSION['lu_usertype']=== "donor")//if usertype is donor go to donor account page
	{
		
		header("location:d_account.php");
	}
	elseif($_SESSION['lu_usertype'] === "admin")//if usertype is admin go to admin account page
	{	
		header("location:a_account.php");
	}
	elseif($_SESSION['lu_usertype'] === "doctor")//if usertype is doctor go to doctor account page
	{	
		header("location:d_account.php");
	}
}



else
{
	echo "wrong username or password";
}
?>
