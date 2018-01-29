<?php

// Variables definition
$UserID = $_POST["UserID"];
$Email = $_POST["Email"];
   
// Use custome css
print ('<link href="css/style.css" rel="stylesheet">');
if (isset($_POST["Send"]))
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
$sql = "SELECT * FROM Security WHERE UserID =" . $UserID . " AND Email ='" . $Email ."'";

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
			echo "alert ('UserID or Email does not exist. Search again.')";
			echo "</script>";
			mysql_close($link);
			
			}
		  else
			{
			// Email implement
			require_once("class.phpmailer.php");			
			$email = new PHPMailer();
			$email->From      = "naoki.ohmi@itdcanada.ca";
			$email->FromName  = "naoki ohmi";
			$email->Subject   = "Send a password";
			
			$bodytext="Hello. Your New password has been sent.";
			$email->Body      = $bodytext;
			$email->AddAddress($Email);
			$email->Send();
		
			echo "<script type='text/javascript'>";
			echo "alert ('Send Email successfully')";
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
               <h1 class="text-center">Car Dealer Ship Email Password</h1>
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
               <h2 class="text-center">Send your password to your Email address.</h2>
               </p>                
               <form method="post" Name = "Time" action="CarDealerShipForgetPassword.php" >
                  <div class="form-group">
                     <div class="CriteriaBlock">
                        <ul class="CriteriaLogin center-block">
                           <li>
                              <label>
                                 <p>User ID:</p>
                              </label>
                              <input type="text" id="UserID" name="UserID">
                           </li>
                           <li>
                              <label>
                                 <p>Email:</p>
                              </label>
                              <input type="text" id="Email" name="Email">
                           </li>
                        </ul>
                     </div>
                     <div class="pull-right">
                        <button type="submit" name="Send" class="btn btn-primary">Send</button>
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
