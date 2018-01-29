<?php

// Variables definition
$UserID = $_POST["UserID"];
$NewPassword = $_POST["NewPassword"];
$ConfirmNewPassword = $_POST["ConfirmNewPassword"];
$SecurityQuestion1 = $_POST["SecurityQuestion1"];
$SecurityQuestion2 = $_POST["SecurityQuestion2"];
$SecurityQuestion3 = $_POST["SecurityQuestion3"];

if($NewPassword != $ConfirmNewPassword){
   	echo "<script type='text/javascript'>";
		echo "alert ('Password is different.')";
		echo "</script>";
}
// Use custome css
print ('<link href="css/style.css" rel="stylesheet">');
if (isset($_POST["Reset"]))
	{
      
// Connect with mysql
$link = mysql_connect("localhost", "root", "mysql");

// chech whether mysql has been installed or not.
if (!$link)
	{
	die("<h3><font color=red>You must install MySQL</font></h3>");
	
	}

// Connect with DB
$db_selected = mysql_select_db("CarDealership", $link);
mysql_select_db("CarDealership", $link);

// check whether db exists or not.
if (!$db_selected)
	{
	print ("<h3><font color=red>Database does not exist.</font></h3>");
	
	}

// Create sql according to cretria
$sql = "SELECT * FROM Security WHERE UserID =" . $UserID . " AND SecurityQuestion1 ='" . $SecurityQuestion1 ."'" . " AND SecurityQuestion2 ='" . $SecurityQuestion2 ."'" . " AND SecurityQuestion3 ='" . $SecurityQuestion3 ."'";

// Execute sql
$r = mysql_query($sql, $link);
// check whether table exists or not.
	if (!$r)
		{
		echo "<script type='text/javascript'>";
		echo "alert ('UserID table does not exist')";
		echo "</script>";
		
		}
	  else{
		// check whether data exists or not.
		$row = mysql_fetch_array($r);
		if (!$row)
			{
			// if VIN has not existed. cannot search
			echo "<script type='text/javascript'>";
			echo "alert ('UserID or SecurityQuestions are wrong. Search again.')";
			echo "</script>";
			mysql_close($link);
			
			}
		  else
			{
			// if VIN has existed. cannot search
			$sqlUpd = "UPDATE Security SET " . "Password = '" . $ConfirmNewPassword . "'" . " WHERE UserID = " . $row[0];
			mysql_query($sqlUpd, $link);
			echo "<script type='text/javascript'>";
			echo "alert ('Change Password successfully')";
			echo "</script>";
         mysql_close($link);
			}
		}
}
?>
<html>
   <head>
      <meta http-equiv="content-type" charset="utf-8">
      <!-- Bootstrap CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <!-- Custome CSS -->
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <div>
         <!-- Header part start-->
         <div class="row" id="HeaderTitle">
            <div class="col-md-3" >
            </div>
            <div class="col-md-6" >
               <p>
               <h1 class="text-center">Car Dealer Ship Reset Password</h1>
               </p>
            </div>
            <div class="col-md-3" >
            </div>
         </div>
         <!-- Header part end-->
         <!-- search part start -->         
         <div class="row center-block">
            <div class="col-md-4" >
            </div>
            <div class="col-md-4" >
               <p>
               <h2 class="text-center">Reset your password.</h2>
               </p>                
               <form method="post" Name = "Time" action="CarDealerShipResetPassword.php" >
                  <div class="form-group">
                     <div class="CriteriaBlock">
                        <ul class="CriteriaReset center-block">
                           <li>
                              <label>
                                 <p>User ID:</p>
                              </label>
                              <input type="text" id="UserID" name="UserID">
                           </li>
                           <li>
                              <label>
                                 <p>New Password:</p>
                              </label>
                              <input type="text" id="NewPassword" name="NewPassword">
                           </li>
													 <li>
                              <label>
                                 <p>Confirm New Password:</p>
                              </label>
                              <input type="text" id="ConfirmNewPassword" name="ConfirmNewPassword">
                           </li>
													 <li>
                              <label>
                                 <p>SecurityQuestion1:</p>
                              </label>
                              <input type="text" id="SecurityQuestion1" name="SecurityQuestion1">
                           </li>
													 <li>
                              <label>
                                 <p>SecurityQuestion2:</p>
                              </label>
                              <input type="text" id="SecurityQuestion2" name="SecurityQuestion2">
                           </li>
													 <li>
                              <label>
                                 <p>SecurityQuestion3:</p>
                              </label>
                              <input type="text" id="SecurityQuestion3" name="SecurityQuestion3">
                           </li>
                        </ul>
                     </div>
                     <div class="pull-right">
                        <button type="submit" name="Reset" class="btn btn-primary">Reset</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-4">
            </div>
         </div>
         <!-- search part end -->
      </div>
   </body>
</html>
