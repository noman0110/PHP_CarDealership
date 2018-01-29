<?php
$SuperUser = $_GET["SuperUser"];
?>
<html>
   <head>
      <meta http-equiv="content-type" charset="utf-8">
      <!-- Bootstrap CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <!-- Custome CSS -->
      <link href="css/style.css" rel="stylesheet">
      <!-- Paypal -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://www.paypalobjects.com/api/checkout.js"></script>      
   </head>
   <body>
      <div>
         <!-- Header part start-->
         <div class="row" id="HeaderTitle">
            <div class="col-md-4" >
            </div>
            <div class="col-md-4" >
               <p>
               <h1 class="text-center">Car Dealer Ship</h1>
               </p>
            </div>
            <div class="col-md-4" >
            </div>
         </div>
         <!-- Header part end-->
         <!-- search part start -->
         <?php if($SuperUser==1){
            echo('<link href="css/style.css" rel="stylesheet">');
            echo('<br>');
            echo('<div id="AdminButton">');
            echo('<div class="row center-block">');
            echo('   <p>');
            echo('   <h2 class="text-center">These buttons can be seen by Only admin.</h2>');
            echo('   </p> ');
            echo('   <div class="col-md-2" >');
            echo('   </div>');
            echo('   <div class="col-md-2" >');
            echo('      <form method="post" Name = "Time" action="CarDealerShipAdmin.php" >');
            echo('         <button type="submit" name="AdminCarInfo" class="btn btn-info">AdminCarInfo</button>');
            echo('      </form>');
            echo('   </div>');
            echo('   <div class="col-md-1" >');
            echo('   </div>');            
            echo('   <div class="col-md-2" >');
            echo('      <form method="post" Name = "Time" action="CarDealerShipAdminUser.php" >');
            echo('         <button type="submit" name="AdminUserInfo" class="btn btn-info">AdminUserInfo</button>');
            echo('      </form>');
            echo('   </div>');
            echo('   <div class="col-md-1" >');
            echo('   </div>');            
            echo('   <div class="col-md-2" >');
            echo('<form method="post" Name = "Subscirber" action="CarDealerShipSubscirberAdmin.php">');
            echo('<div class="pull-right">');
            echo('         <button type="submit" class="btn btn-info" name="Subscirber">Go to SubscirberAdmin</button>');
            echo('      </form>');
            echo('   </div>');
            echo('   </div>');
            echo('   <div class="col-md-2" >');
            echo('   </div>');
            echo('</div>');
            echo('</div>');  
         };
         ?>   
         
         <div class="row center-block">
            
            <div class="col-md-1" >
            <!--<?php 
               //echo('<form method="post" Name = "Paypal" action="CarDealerShipPaypal.php">');
               //echo('   <div class="pull-left">');
               //echo('         <button type="submit" class="btn btn-info" name="Paypalbutton">Go to Paypal</button>');
               //echo('   </div>');
               //echo('</form>');
               
               ?>-->
            <div id="paypal-button" style="width: 200px"></div>
            </div>
            <div class="col-md-10" >
               <p>
               <h2 class="text-center">Type the information into the below criteria.</h2>
               </p> 
               
               <form method="post" Name = "Time" action="CarDealerShip.php" >
                  <div class="form-group">
                     <div class="CriteriaBlock">
                        <ul class="list-inline center-block">
                           <li>
                              <label>
                                 <p>Make:</p>
                              </label>
                              <input type="text" id="Make" name="Make">
                           </li>
                           <li>
                              <label>
                                 <p>Model:</p>
                              </label>
                              <input type="text" id="Model" name="Model">
                           </li>
                           <li>
                              <label>
                                 <p>Year:</p>
                              </label>
                              <input type="text" id="Year" name="Year">
                           </li>
                           <li>
                              <label>
                                 <p>Mileage:</p>
                              </label>
                              <input type="text" id="Mileage" name="Mileage">
                           </li>
                           <li>
                              <label>
                                 <p>Accidents:</p>
                              </label>
                              <input type="text" id="Accidents" name="Accidents">
                           </li>
                           <li>
                              <label>
                                 <p>Total Damage to date:</p>
                              </label>
                              <input type="text" id="TotalDamageToDate" name="TotalDamageToDate">
                           </li>
                           <li>
                              <label>
                                 <p>Price:</p>
                              </label>
                              <input type="text" id="Price" name="Price">
                           </li>
                        </ul>
                     </div>
                     
                     <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Search</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-1">
               <?php if($SuperUser!=1){
               echo('<form method="post" Name = "Subscirber" action="CarDealerShipSubscirberUser.php">');
               echo('   <div class="pull-right">');
               echo('         <button type="submit" class="btn btn-info" name="Subscirber">Go to SubscirberUser</button>');
               echo('   </div>');
               echo('</form>');
               }
               ?>               
            </div>
         </div>
         <!-- search part end -->
      </div>
      <script>
         paypal.Button.render({
           env: 'sandbox', // Or 'sandbox',
         
           commit: true, // Show a 'Pay Now' button
         
           style: {
         size: 'responsive',
         color: 'gold',
         shape: 'pill',
         label: 'checkout'
         },
         
         client: {
                sandbox:    'AZDxjDScFpQtjWTOUtWKbyN_bDt4OgqaF4eYXlewfBP4-8aqX3PiV8e1GWU6liB2CUXlkA59kJXE7M6R',
                production: '<insert production client id>'
            },
            
            payment: function(data, actions) {
         
                // Make a call to the REST api to create the payment
                return actions.payment.create({
                    payment: {
                        transactions: [
                            {
                                amount: { total: '0.01', currency: 'USD' }
                            }
                        ]
                    }
                });
            },
         
         // onAuthorize() is called when the buyer approves the payment
            onAuthorize: function(data, actions) {
         
                // Make a call to the REST api to execute the payment
                return actions.payment.execute().then(function() {
                    window.alert('Payment Complete!');
                });
            },
         
           onCancel: function(data, actions) {
             /* 
              * Buyer cancelled the payment 
              */
           },
         
           onError: function(err) {
             /* 
              * An error occurred during the transaction 
              */
           }
         }, '#paypal-button');
      </script>
   </body>
</html>
<?php
$SuperUser = $_GET["SuperUser"];
// Variables definition
$Make = $_POST["Make"];
$Model = $_POST["Model"];
$Year = $_POST["Year"];
$Mileage = $_POST["Mileage"];
$Accidents = $_POST["Accidents"];
$TotalDamageToDate = $_POST["TotalDamageToDate"];
$Price = $_POST["Price"];

// Use custome css
print ('<link href="css/style.css" rel="stylesheet">');

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
$sql = "SELECT * FROM CarInformation WHERE 1=1";

if ($Make != "")
	{
	$sql.= " AND Make = '" . $Make . "'";
	}

if ($Model != "")
	{
	$sql.= " AND Model = '" . $Model . "'";
	}

if ($Year != "")
	{
	$sql.= " AND Year = '" . $Year . "'";
	}

if ($Mileage != "")
	{
	$sql.= " AND Mileage = '" . $Mileage . "'";
	}

if ($Accidents != "")
	{
	$sql.= " AND Accidents = '" . $Accidents . "'";
	}

if ($TotalDamageToDate != "")
	{
	$sql.= " AND TotalDamageToDate = '" . $TotalDamageToDate . "'";
	}

if ($Price != "")
	{
	$sql.= " AND Price = '" . $Price . "'";
	}

// Execute sql
$r = mysql_query($sql, $link);

// check whether information exists or not.
if (!$r)
	{
	print ("<h3><font color=red>CarInformation does not exist</font></h3>");
   
	}

// Create a table
print ('<div class="row center-block">');
print ('<div class="col-md-1" >');
print ("</div>");
print ('<div class="col-md-10">');
print ('<h2 class="text-center">Car List</h2>');
print ('<h4 class="text-right">Click the photo for detail</h4>');
print ('<table class="tableProperty"');
print ('<tr>');
print ('<Th>VIN</Th>');
print ('<Th>Make</Th>');
print ('<Th>Model</Th>');
print ('<Th>Year</Th>');

// print ('<Th>Color</Th>');
print ('<Th>Mileage</Th>');
print ('<Th>Accidents</Th>');
print ('<Th>Total Damage to date</Th>');
print ('<Th>Price</Th>');
print ('<Th>Picture1</Th>');

// print ('<Th>Picture2</Th>');
// print ('<Th>Picture3</Th>');
// print ('<Th>Special Features</Th>');
print ('</tr>');

while ($row = mysql_fetch_array($r))
	{
	$directoryimg1 = $row[9];
	$directoryimg2 = $row[10];
	$directoryimg3 = $row[11];
	print ("<tr>");
	print ("<td>$row[0]</td>
          <td>$row[1]</td>
          <td>$row[2]</td>
          <td>$row[3]</td>

          <td>$row[5]</td>
          <td>$row[6]</td>
          <td>$row[7]</td>
          <td>$row[8]</td>");
	print ('<td><a href="CarDealerShipUser.php?VIN=' . $row[0] . '&Make=' . $row[1] . '&Model=' . $row[2] . '&Year=' . $row[3] . '&Color=' . $row[4] . '&Mileage=' . $row[5] . '&Accidents=' . $row[6] . '&TotalDamageTodate=' . $row[7] . '&Price=' . $row[8] . '&Picture1=' . $row[9] . '&Picture2=' . $row[10] . '&Picture3=' . $row[11] . '&SpecialFeatures=' . $row[12] . '"><img class="Image" src="');
	print ($directoryimg1);
	print ('" alt="image"></a></td>');

	//	print ('<td><img class="Image" src="');
	//   print ($directoryimg2);
	//   print ('" alt="image"></td>');
	//   print ('<td><img class="Image" src="');
	//   print ($directoryimg3);
	//   print ('" alt="image"></td>');
	//	print ("<td>$row[12]</td></tr>");
   
	}
print ("</div>");
print ('<div class="col-md-1"></div>');
print ("</div>");
mysql_close($link);

//$_SESSION["SuperUser"] = $SuperUser;
//echo $_SESSION["SuperUser"];
//$SuperUser = $_SESSION["SuperUser"];
//echo "Here2";
//if (isset($_POST["Subscirber"]))
//	{
//      $url = "http://localhost/CarDealership/CarDealerShipSubscirber.php?SuperUser=".$SuperUser;
//      echo $url;
//      header("Location: ".$url);
//   }
?>