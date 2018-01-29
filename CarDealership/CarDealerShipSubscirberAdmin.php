<?php
// Variables definition
$SubscriberID = $_POST["SubscriberID"];
$Password = $_POST["Password"];
$Name = $_POST["Name"];
$LastName = $_POST["LastName"];
$Gender = $_POST["Gender"];
$Birthdate = $_POST["Birthdate"];
$SuiteNo = $_POST["SuiteNo"];
$Street = $_POST["Street"];
$City = $_POST["City"];
$ProvState = $_POST["ProvState"];
$Country = $_POST["Country"];
$Postalcode = $_POST["Postalcode"];
$Phone = $_POST["Phone"];
$Cellphone = $_POST["Cellphone"];
$Email = $_POST["Email"];
$AlternativeEmail = $_POST["AlternativeEmail"];

// array definition
$array = array(
	$SubscriberID,
	$Password,
	$Name,
	$LastName,
	$Gender,
	$Birthdate,
	$SuiteNo,
	$Street,
	$City,
	$ProvState,
	$Country,
	$Postalcode,
	$Phone,
	$Cellphone,
    $Email,
	$AlternativeEmail
);

// When the Search button clicked
if (isset($_POST["Search"]))
	{

	// call CarDealerShipAdminSearch.php
	require "CarDealerShipscirberAdminSearch.php";

	// Use Search function
	$row = Search($array);

	// assign the infomation you get
	$SubscriberID = $row[0];
	$Password = $row[1];
	$Name = $row[2];
	$LastName = $row[3];
	$Gender = $row[4];
	$Birthdate = $row[5];
	$SuiteNo = $row[6];
	$Street = $row[7];
	$City = $row[8];
	$ProvState = $row[9];
	$Country = $row[10];
	$Postalcode = $row[11];
	$Phone = $row[12];
	$Cellphone = $row[13];
	$Email = $row[14];
	$AlternativeEmail = $row[15];
	
	}

	// When the Add button clicked
if (isset($_POST["Add"]))
	{

	// call CarDealerShipAdminADD.php
	require "CarDealerShipSubscirberAdminADD.php";

	// Use Add function
	$row = Add($array);

	// assign the infomation you get
	$SubscriberID = $row[0];
	$Password = $row[1];
	$Name = $row[2];
	$LastName = $row[3];
	$Gender = $row[4];
	$Birthdate = $row[5];
	$SuiteNo = $row[6];
	$Street = $row[7];
	$City = $row[8];
	$ProvState = $row[9];
	$Country = $row[10];
	$Postalcode = $row[11];
	$Phone = $row[12];
	$Cellphone = $row[13];
	$Email = $row[14];
	$AlternativeEmail = $row[15];
	}

// When the Modify button clicked
if (isset($_POST["Modify"]))
	{

	// call CarDealerShipAdminModify.php
	require "CarDealerShipSubscirberAdminModify.php";

	// Use Modify function
	$row = Modify($array);

	// assign the infomation you get
	$SubscriberID = $row[0];
	$Password = $row[1];
	$Name = $row[2];
	$LastName = $row[3];
	$Gender = $row[4];
	$Birthdate = $row[5];
	$SuiteNo = $row[6];
	$Street = $row[7];
	$City = $row[8];
	$ProvState = $row[9];
	$Country = $row[10];
	$Postalcode = $row[11];
	$Phone = $row[12];
	$Cellphone = $row[13];
	$Email = $row[14];
	$AlternativeEmail = $row[15];
	}

	// When the Delete button clicked
if (isset($_POST["Delete"]))
	{

	// call CarDealerShipAdminModify.php
	require "CarDealerShipSubscirberAdminDelete.php";

	// Use Delete function
	$row = Delete($array);

	// assign the infomation you get
	$SubscriberID = $row[0];
	$Password = $row[1];
	$Name = $row[2];
	$LastName = $row[3];
	$Gender = $row[4];
	$Birthdate = $row[5];
	$SuiteNo = $row[6];
	$Street = $row[7];
	$City = $row[8];
	$ProvState = $row[9];
	$Country = $row[10];
	$Postalcode = $row[11];
	$Phone = $row[12];
	$Cellphone = $row[13];
	$Email = $row[14];
	$AlternativeEmail = $row[15];
	}
	
	if (isset($_POST["Clear"]))
	{

	// Clear all information
	$SubscriberID = "";
	$Password = "";
	$Name = "";
	$LastName = "";
	$Gender = "";
	$Birthdate = "";
	$SuiteNo = "";
	$Street = "";
	$City = "";
	$ProvState = "";
	$Country = "";
	$Postalcode = "";
	$Phone = "";
	$Cellphone = "";
	$Email = "";
	$AlternativeEmail = "";
	}
// Use custome css
print ('<link href="css/style.css" rel="stylesheet">');

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
               <h1 class="text-center">Car Dealer Ship Subscirber</h1>
               </p>
            </div>
            <div class="col-md-4" >
            </div>
         </div>
         <!-- Header part end-->
         <!-- Input part start-->
         <div class="row center-block">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
               <p>
               <h3 class="text-center">This page is for admin. Able to add, Modify and Delete</h3>
               </p>
               <form method="post" Name = "Time" action="CarDealerShipSubscirberAdmin.php">
                  <div class="form-group">
                     <div class="CriteriaBlock">
                        <div>
                           <ul class="CriteriaAdmin">
                              <li>
                                 <label for="SubscriberID">
                                    <p>SubscriberID:</p>
                                 </label>
                                 <input type="text" id="SubscriberID" name="SubscriberID" value="<?php echo $SubscriberID; ?>">
                              </li>
                              <li>
                                 <label for="Password">
                                    <p>Password:</p>
                                 </label>
                                 <input type="text" id="Password" name="Password" value="<?php echo $Password; ?>">
                              </li>
                              <li>
                                 <label for="Name">
                                    <p>Name:</p>
                                 </label>
                                 <input type="text" id="Name" name="Name" value="<?php echo $Name; ?>">
                              </li>
                              <li>
                                 <label for="LastName">
                                    <p>LastName:</p>
                                 </label>
                                 <input type="text" id="LastName" name="LastName" value="<?php echo $LastName; ?>">
                              </li>
                              <li>
                                 <label for="Gender">
                                    <p>Gender:</p>
                                 </label>
                                 <input type="text" id="Gender" name="Gender" value="<?php echo $Gender; ?>">
                              </li>
                              <li>
                                 <label for="Birthdate">
                                    <p>Birthdate:</p>
                                 </label>
                                 <input type="text" id="Birthdate" name="Birthdate" value="<?php echo $Birthdate; ?>">
                              </li>
                              <li>
                                 <label for="SuiteNo">
                                    <p>SuiteNo:</p>
                                 </label>
                                 <input type="text" id="SuiteNo" name="SuiteNo" value="<?php echo $SuiteNo; ?>">
                              </li>
                              <li>
                                 <label for="Street">
                                    <p>Street:</p>
                                 </label>
                                 <input type="text" id="Street" name="Street" value="<?php echo $Street; ?>">
                              </li>
                              <li>
                                 <label for="City">
                                    <p>City:</p>
                                 </label>
                                 <input type="text" id="City" name="City" value="<?php echo $City; ?>">
                              </li>
                              <li>
                                 <label for="ProvState">
                                    <p>ProvState:</p>
                                 </label>
                                 <input type="text" id="ProvState" name="ProvState" value="<?php echo $ProvState; ?>">
                              </li>
                              <li>
                                 <label for="Country">
                                    <p>Country:</p>
                                 </label>
                                 <input type="text" id="Country" name="Country" value="<?php echo $Country; ?>">
                              </li>
                              <li>
                                 <label for="Postalcode">
                                    <p>Postalcode:</p>
                                 </label>
                                 <input type="text" id="Postalcode" name="Postalcode" value="<?php echo $Postalcode; ?>">
                              </li>
                              <li>
                                 <label for="Phone">
                                    <p>Phone:</p>
                                 </label>
                                 <input type="text" id="Phone" name="Phone" value="<?php echo $Phone; ?>">
                              </li>
                              <li>
                                 <label for="Cellphone">
                                    <p>Cellphone:</p>
                                 </label>
                                 <input type="text" id="Cellphone" name="Cellphone" value="<?php echo $Cellphone; ?>">
                              </li>
                              <li>
                                 <label for="Email">
                                    <p>Email:</p>
                                 </label>
                                 <input type="text" id="Email" name="Email" value="<?php echo $Email; ?>">
                              </li>
                              <li>
                                 <label for="AlternativeEmail">
                                    <p>AlternativeEmail:</p>
                                 </label>
                                 <input type="text" id="AlternativeEmail" name="AlternativeEmail" value="<?php echo $AlternativeEmail; ?>">
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!--<button part-->
                     <div class="pull-right">
                        <button type="submit" name="Search" class="btn btn-primary">Search</button>
                        <button type="submit" name="Add" class="btn btn-success">ADD</button>
                        <button type="submit" name="Modify" class="btn btn-warning">Modify</button>
                        <button type="submit" name="Delete" class="btn btn-danger">Delete</button>
                        <button type="submit" name="Clear" class="btn btn-info">Clear</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-3">
            </div>
         </div>
         <!-- Input part end-->
      </div>
   </body>
</html>