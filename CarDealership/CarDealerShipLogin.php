<?php

// Variables definition
$UserID = $_POST["UserID"];
$Password = $_POST["Password"];
   
// Use custome css
print ('<link href="css/style.css" rel="stylesheet">');
if (isset($_POST["Login"]))
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
$sql = "SELECT * FROM Security WHERE UserID =" . $UserID . " AND Password ='" . $Password ."'";

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
			echo "alert ('UserID does not exist. Search again.')";
			echo "</script>";
			mysql_close($link);
			}
		  else
			{
			// if VIN has existed. cannot search
			echo "<script type='text/javascript'>";
			echo "alert ('Login successfully')";
			echo "</script>";
         $url = "http://localhost/CarDealership/CarDealerShip.php?SuperUser=".$row[2];
         header("Location: ".$url);			
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
            <div class="col-md-4" >
            </div>
            <div class="col-md-4" >
               <p>
               <h1 class="text-center">Car Dealer Ship Login</h1>
               </p>
            </div>
            <div class="col-md-4" >
            </div>
         </div>
         <!-- Header part end-->
         <!-- search part start -->         
         <div class="row center-block">
            <div class="col-md-4" >
            </div>
            <div class="col-md-4" >
               <p>
               <h2 class="text-center">Welcome to our page.</h2>
               </p>                
               <form method="post" Name = "Time" action="CarDealerShipLogin.php" >
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
                                 <p>Password:</p>
                              </label>
                              <input type="text" id="Password" name="Password">
                           </li>
                           <li>
                              <p>
                              <a href="CarDealerShipForgetPassword.php?">Forget password?</a>
                              </p>
                           </li>
                           <li>
                              <p>
                              <a href="CarDealerShipResetPassword.php">Reset Password?</a>
                              </p>
                           </li>
                        </ul>
                     </div>
                     <div class="pull-right">
                        <button type="submit" name="Login" class="btn btn-primary">Login</button>
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
