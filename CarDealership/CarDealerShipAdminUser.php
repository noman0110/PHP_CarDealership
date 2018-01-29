<?php

// Variables definition
$UserID = $_POST["UserID"];
$Password = $_POST["Password"];
$SuperUser = $_POST["AddPermission"];
$AddPermission = $_POST["AddPermission"];
$ModifyPermission = $_POST["ModifyPermission"];
$DeletePermission = $_POST["DeletePermission"];
$SecurityQuestion1 = $_POST["SecurityQuestion1"];
$SecurityQuestion2 = $_POST["SecurityQuestion2"];
$SecurityQuestion3 = $_POST["SecurityQuestion3"];
$Email = $_POST["Email"];

// array definition
$array = array(
	$UserID,
	$Password,
	$SuperUser,
    $AddPermission,
	$ModifyPermission,
	$DeletePermission,
	$SecurityQuestion1,
	$SecurityQuestion2,
	$SecurityQuestion3,
	$Email
);

// Use custome css
print ('<link href="css/style.css" rel="stylesheet">');

// When the Search button clicked
if (isset($_POST["Search"]))
	{

	// call CarDealerShipAdminSearch.php
	require "CarDealerShipAdminUserSearch.php";

	// Use Search function
	$row = SearchUser($array);

	// assign the infomation you get
	$UserID = $row[0];
	$Password = $row[1];
	$SuperUser = $row[2];
	$AddPermission = $row[3];
	$ModifyPermission = $row[4];
	$DeletePermission = $row[5];
	$SecurityQuestion1 = $row[6];
	$SecurityQuestion2 = $row[7];
	$SecurityQuestion3 = $row[8];
	$Email = $row[9];
	}

// When the Add button clicked
if (isset($_POST["Add"]))
	{

	// call CarDealerShipAdminADD.php
	require "CarDealerShipAdminUserADD.php";

	// Use Add function
	$row = Add($array);

	// assign the infomation you get
	$UserID = $row[0];
	$Password = $row[1];
	$SuperUser = $row[2];
	$AddPermission = $row[3];
	$ModifyPermission = $row[4];
	$DeletePermission = $row[5];
	$SecurityQuestion1 = $row[6];
	$SecurityQuestion2 = $row[7];
	$SecurityQuestion3 = $row[8];
	$Email = $row[9];
	}

// When the Modify button clicked
if (isset($_POST["Modify"]))
	{

	// call CarDealerShipAdminModify.php
	require "CarDealerShipAdminUserModify.php";

	// Use Modify function
	$row = Modify($array);

	// assign the infomation you get
	$UserID = $row[0];
	$Password = $row[1];
	$SuperUser = $row[2];
	$AddPermission = $row[3];
	$ModifyPermission = $row[4];
	$DeletePermission = $row[5];
	$SecurityQuestion1 = $row[6];
	$SecurityQuestion2 = $row[7];
	$SecurityQuestion3 = $row[8];
	$Email = $row[9];
	}

// When the Delete button clicked
if (isset($_POST["Delete"]))
	{

	// call CarDealerShipAdminModify.php
	require "CarDealerShipAdminUserDelete.php";

	// Use Delete function
	$row = Delete($array);

	// assign the infomation you get
	$UserID = $row[0];
	$Password = $row[1];
	$SuperUser = $row[2];
	$AddPermission = $row[3];
	$ModifyPermission = $row[4];
	$DeletePermission = $row[5];
	$SecurityQuestion1 = $row[6];
	$SecurityQuestion2 = $row[7];
	$SecurityQuestion3 = $row[8];
	$Email = $row[9];
	}

// When the Delete button clicked

if (isset($_POST["Clear"]))
	{

	// Clear all information
	$UserID = "";
	$Password = "";
	$SuperUser = "";
	$AddPermission = "";
	$ModifyPermission = "";
	$DeletePermission = "";
	$SecurityQuestion1 = "";
	$SecurityQuestion2 = "";
	$SecurityQuestion3 = "";
	$Email = "";
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
               <h1 class="text-center">User management for Admin</h1>
               </p>
            </div>
            <div class="col-md-3" >
            </div>
         </div>
         <!-- Header part end-->
         <!-- Input part start-->
         <div class="row center-block">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
               <p>
               <h3 class="text-center">This page is for admin. Able to add, Modify and Delete Users.</h3>
               </p>
               <form method="post" Name = "Time" action="CarDealerShipAdminUser.php">
                  <div class="form-group">
                     <div class="CriteriaBlock">
                        <div>
                           <ul class="Criteria">
                              <li>
                                 <label for="UserID">
                                    <p>User ID:</p>
                                 </label>
                                 <input type="text" id="UserID" name="UserID" value="<?php echo $UserID; ?>">
                              </li>
                              <li>
                                 <label for="Password">
                                    <p>Password:</p>
                                 </label>
                                 <input type="text" id="Password" name="Password" value="<?php echo $Password; ?>">
                              </li>
                              <li>
                                 <label for="SuperUser">
                                    <p>SuperUser:</p>
                                 </label>
                                 <input type="text" id="SuperUser" name="SuperUser" value="<?php echo $SuperUser; ?>">
                              </li>
                              <li>
                                 <label for="AddPermission">
                                    <p>Add Permission:</p>
                                 </label>
                                 <input type="text" id="AddPermission" name="AddPermission" value="<?php echo $AddPermission; ?>">
                              </li>
                              <li>
                                 <label for="ModifyPermission">
                                    <p>Modify Permission:</p>
                                 </label>
                                 <input type="text" id="ModifyPermission" name="ModifyPermission" value="<?php echo $ModifyPermission; ?>">
                              </li>
                              <li>
                                 <label for="DeletePermission">
                                    <p>Delete Permission:</p>
                                 </label>
                                 <input type="text" id="DeletePermission" name="DeletePermission" value="<?php echo $DeletePermission; ?>">
                              </li>
                              <li>
                                 <label for="SecurityQuestion1">
                                    <p>SecurityQuestion1:</p>
                                 </label>
                                 <input type="text" id="SecurityQuestion1" name="SecurityQuestion1" value="<?php echo $SecurityQuestion1; ?>">
                              </li>
                              <li>
                                 <label for="SecurityQuestion2">
                                    <p>SecurityQuestion2:</p>
                                 </label>
                                 <input type="text" id="SecurityQuestion2" name="SecurityQuestion2" value="<?php echo $SecurityQuestion2; ?>">
                              </li>
                              <li>
                                 <label for="SecurityQuestion3">
                                    <p>SecurityQuestion3:</p>
                                 </label>
                                 <input type="text" id="SecurityQuestion3" name="SecurityQuestion3" value="<?php echo $SecurityQuestion3; ?>">
                              </li>
                              <li>
                                 <label for=" Email">
                                    <p> Email:</p>
                                 </label>
                                 <input type="text" id=" Email" name=" Email" value="<?php echo  $Email; ?>">
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
                        <button type="submit" name="List" class="btn btn-default">List</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-3">
            </div>
         </div>
         <!-- Input part end-->
      </div>
      <div>
         <br>
         <br>
         <br>
         <br>
         <?php
            if (isset($_POST["List"]))
            	{
            
            	// call CarDealerShipAdminUserList.php
            	require "CarDealerShipAdminUserList.php";
            
            	// Use Add function
            	$row = Listshow($array);
            	ListshowTable($row);
            	}
                
            function ListshowTable($rowArray)
            	{
                print ('<link href="css/style.css" rel="stylesheet">');
                print ('<div class="row">');
                print ('<div class="col-md-1" >');
                print ('</div>');
                print ('<div class="col-md-10" >');
            	print ('<div class="center-block">');
            	print ('<h2 class="text-center">User Information List</h2>');
            	print ("
                        <table class='tableProperty'>
                        <tr>
                        <Th>UserID</Th>
                        <Th>Password</Th>
                        <Th>SuperUser</Th>
                        <Th>AddPermission</Th>
                        <Th>ModifyPermission</Th>
                        <Th>DeletePermission</Th>
                        <Th>SecurityQuestion1</Th>
                        <Th>SecurityQuestion2</Th>
                        <Th>SecurityQuestion3</Th>
                        <Th>Email</Th>
                        </tr>");
            	while ($row = mysql_fetch_array($rowArray))
            		{
            		print ("<tr>
                            <td>$row[0]</td>
                            <td>$row[1]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            <td>$row[4]</td>
                            <td>$row[5]</td>
                            <td>$row[6]</td>
                            <td>$row[7]</td>
                            <td>$row[8]</td>
                            <td>$row[9]</td>
                            </tr>");
            		}
            
            	print ("</table>");
            	}
            
            print ('</div>');
            print ('<div class="col-md-1" >');
            print ('</div>');
            print ('</div>');
            ?>
      </div>
   </body>
</html>
