
<html>
   <head>
      <meta http-equiv="content-type" charset="utf-8">
      <!-- Bootstrap CSS -->
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <?php
      
      $VIN = $_GET["VIN"];
      $Make = $_GET["Make"];      
      $Model = $_GET["Model"];
      $Year = $_GET["Year"];
      $Color = $_GET["Color"];
      $Mileage = $_GET["Mileage"];
      $Accidents = $_GET["Accidents"];
      $TotalDamageTodate = $_GET["TotalDamageTodate"];
      $Price = $_GET["Price"];
      $Picture1 = $_GET["Picture1"];
      $Picture2 = $_GET["Picture2"];
      $Picture3 = $_GET["Picture3"];
      $SpecialFeatures = $_GET["SpecialFeatures"];
      ?>
      <div>
         <div class="row" id="HeaderTitle">
            <div class="col-md-4" >
            </div>
            <div class="col-md-4" >
               <p>
               <h1 class="text-center">Car Dealer Ship Details</h1>
               </p>
            </div>
            <div class="col-md-4" >
            </div>
         </div>
         <div class="row center-block">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
               <p>
               <h3 class="text-center">Check the all information of the car!!</h3>
               </p>
               <form method="post" Name = "Time" action="CarDealerShipAdmin.php">
                  <div class="form-group">
                     <div class="CriteriaBlock">
                        <div>
                           <ul class="Criteria">
                              <li>
                                 <label for="VIN">
                                    <p>VIN:</p>
                                 </label>
                                 <input type="text" id="VIN" name="VIN" value="<?php echo $VIN; ?>" disabled="disabled">
                              </li>
                              <li>
                                 <label for="Make">
                                    <p>Make:</p>
                                 </label>
                                 <input type="text" id="Make" name="Make" value="<?php echo $Make; ?>" disabled="disabled">
                              </li>
                              <li>
                                 <label for="Model">
                                    <p>Model:</p>
                                 </label>
                                 <input type="text" id="Model" name="Model" value="<?php echo $Model; ?>" disabled="disabled">
                              </li>
                              <li>
                                 <label for="Year">
                                    <p>Year:</p>
                                 </label>
                                 <input type="text" id="Year" name="Year" value="<?php echo $Year; ?>" disabled="disabled">
                              </li>
                              <li>
                                 <label for="Color">
                                    <p>Color:</p>
                                 </label>
                                 <input type="text" id="Color" name="Color" value="<?php echo $Color; ?>" disabled="disabled">
                              </li>
                              <li>
                                 <label for="Mileage">
                                    <p>Mileage:</p>
                                 </label>
                                 <input type="text" id="Mileage" name="Mileage" value="<?php echo $Mileage; ?>" disabled="disabled">
                              </li>
                              <li>
                                 <label for="Accidents">
                                    <p>Accidents:</p>
                                 </label>
                                 <input type="text" id="Accidents" name="Accidents" value="<?php echo $Accidents; ?>" disabled="disabled">
                              </li>
                              <li>
                                 <label for="TotalDamageToDate">
                                    <p>Total Damage to date:</p>
                                 </label>
                                 <input type="text" id="TotalDamageToDate" name="TotalDamageToDate" value="<?php echo $TotalDamageTodate; ?>" disabled="disabled">
                              </li>
                              <li>
                                 <label for="Price">
                                    <p>Price:</p>
                                 </label>
                                 <input type="text" id="Price" name="Price" value="<?php echo $Price; ?>" disabled="disabled">
                              </li>
                              <li>
                                 <label for="Picture1">
                                    <p>Picture1:</p>
                                 </label>
                                 <!--<input type="text" id="Picture1" name="Picture1" value="<?php// echo $Picture1; ?>" disabled="disabled">-->
                                 <img class="ImageDetail" src="<?php  echo $Picture1; ?>" alt="Image">
                              </li>
                              <li>
                                 <label for="Picture2">
                                    <p>Picture2:</p>
                                 </label>
                                 <!--<input type="text" id="Picture2" name="Picture2" value="<?php// echo $Picture2; ?>" disabled="disabled">-->
                                 <img class="ImageDetail" src="<?php echo $Picture2; ?>" alt="Image">
                              </li>
                              <li>
                                 <label for="Picture3">
                                    <p>Picture3:</p>
                                 </label>
                                 <!--<input type="text" id="Picture3" name="Picture3" value="<?php// echo $Picture3; ?>" disabled="disabled">-->
                                 <img class="ImageDetail" src="<?php echo $Picture3; ?>" alt="Image">
                              </li>
                              <li>
                                 <label for="SpecialFeatures">
                                    <p>Special features:</p>
                                 </label>
                                 <input type="text" id="SpecialFeatures" name="SpecialFeatures" value="<?php echo $SpecialFeatures; ?>" disabled="disabled">
                              </li>
                              <!--<li>
                                 <input type="checkbox" id="AddRecordTimecheckbox" name="AddRecordTimecheckbox" value="AddRecordTimecheckbox">     
                                 <label for="AddRecordTime">
                                    <p>Add Record Time:</p>
                                 </label>
                                 <input type="text" id="AddRecordTime" name="AddRecordTime" disabled="disabled">                                 
                              </li>
                              <li>
                                 <input type="checkbox" id="ShowRecordTimecheckbox" name="ShowRecordTimecheckbox" value="ShowRecordTimecheckbox">
                                 <label for="ShowRecordTime">
                                    <p>Show Record Time:</p>
                                 </label>
                                 <input type="text" id="ShowRecordTime" name="ShowRecordTime" disabled="disabled">
                              </li>-->
                           </ul>
                        </div>
                     </div>
                     <!--<div class="pull-right">-->
                        <!--<button type="submit" class="btn btn-primary">Search</button>-->
                        <!--<button type="submit" class="btn btn-success">ADD</button>
                        <button type="submit" class="btn btn-warning">Modify</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                     </div>-->
                  </div>
               </form>
            </div>
            <div class="col-md-3">
            </div>
         </div>
      </div>
   </body>
</html>