<?php

// Timezone set
date_default_timezone_set('PST');

// Variables definition
$VIN = $_POST["VIN"];
$Make = $_POST["Make"];
$Model = $_POST["Model"];
$Year = $_POST["Year"];
$Color = $_POST["Color"];
$Mileage = $_POST["Mileage"];
$Accidents = $_POST["Accidents"];
$TotalDamageToDate = $_POST["TotalDamageToDate"];
$Price = $_POST["Price"];
$Picutre1 = $_POST["Picutre1"];
$Picutre2 = $_POST["Picutre2"];
$Picutre3 = $_POST["Picutre3"];
$SpecialFeatures = $_POST["SpecialFeatures"];
$AddRecordTimecheckbox = $_POST["AddRecordTimecheckbox"][0];
$ShowRecordTimecheckbox = $_POST["ShowRecordTimecheckbox"][0];

// check a checkbox
if (isset($_POST["AddRecordTimecheckbox"]))
	{
	$AddRecordTime = date("Y/m/d H:i:s");
	}
  else
	{
	$AddRecordTime = "";
	}

$ShowRecordTime = $_POST["ShowRecordTime"];

// array definition
$array = array(
	$VIN,
	$Make,
	$Model,
	$Year,
	$Color,
	$Mileage,
	$Accidents,
	$TotalDamageToDate,
	$Price,
	$Picutre1,
	$Picutre2,
	$Picutre3,
	$SpecialFeatures,
	$AddRecordTime,
	$ShowRecordTime
);

// Use custome css
print ('<link href="css/style.css" rel="stylesheet">');

// When the Search button clicked
if (isset($_POST["Search"]))
	{

	// call CarDealerShipAdminSearch.php
	require "CarDealerShipAdminSearch.php";

	// Use Search function
	$row = Search($array);

	// assign the infomation you get
	$VIN = $row[0];
	$Make = $row[1];
	$Model = $row[2];
	$Year = $row[3];
	$Color = $row[4];
	$Mileage = $row[5];
	$Accidents = $row[6];
	$TotalDamageToDate = $row[7];
	$Price = $row[8];
	$Picutre1 = $row[9];
	$Picutre2 = $row[10];
	$Picutre3 = $row[11];
	$SpecialFeatures = $row[12];
	if (isset($_POST["ShowRecordTimecheckbox"]))
		{
		$ShowRecordTime = $row[13];
		}
	  else
		{
		$ShowRecordTime = "";
		}
	}

// When the Add button clicked
if (isset($_POST["Add"]))
	{

	// call CarDealerShipAdminADD.php
	require "CarDealerShipAdminADD.php";

	// Use Add function
	$row = Add($array);

	// assign the infomation you get
	$VIN = $row[0];
	$Make = $row[1];
	$Model = $row[2];
	$Year = $row[3];
	$Color = $row[4];
	$Mileage = $row[5];
	$Accidents = $row[6];
	$TotalDamageToDate = $row[7];
	$Price = $row[8];
	$Picutre1 = $row[9];
	$Picutre2 = $row[10];
	$Picutre3 = $row[11];
	$SpecialFeatures = $row[12];
	if (isset($_POST["AddRecordTimecheckbox"]))
		{
		$AddRecordTime = $row[13];
		}
	  else
		{
		$AddRecordTime = "";
		}

	if (isset($_POST["ShowRecordTimecheckbox"]))
		{
		$ShowRecordTime = $row[13];
		}
	  else
		{
		$ShowRecordTime = "";
		}
	}

// When the Modify button clicked
if (isset($_POST["Modify"]))
	{

	// call CarDealerShipAdminModify.php
	require "CarDealerShipAdminModify.php";

	// Use Modify function
	$row = Modify($array);

	// assign the infomation you get
	$VIN = $row[0];
	$Make = $row[1];
	$Model = $row[2];
	$Year = $row[3];
	$Color = $row[4];
	$Mileage = $row[5];
	$Accidents = $row[6];
	$TotalDamageToDate = $row[7];
	$Price = $row[8];
	$Picutre1 = $row[9];
	$Picutre2 = $row[10];
	$Picutre3 = $row[11];
	$SpecialFeatures = $row[12];
	if (isset($_POST["AddRecordTimecheckbox"]))
		{
		$AddRecordTime = $row[13];
		}
	  else
		{
		$AddRecordTime = "";
		}

	if (isset($_POST["ShowRecordTimecheckbox"]))
		{
		$ShowRecordTime = $row[13];
		}
	  else
		{
		$ShowRecordTime = "";
		}
	}

// When the Delete button clicked
if (isset($_POST["Delete"]))
	{

	// call CarDealerShipAdminModify.php
	require "CarDealerShipAdminDelete.php";

	// Use Delete function
	$row = Delete($array);

	// assign the infomation you get
	$VIN = $row[0];
	$Make = $row[1];
	$Model = $row[2];
	$Year = $row[3];
	$Color = $row[4];
	$Mileage = $row[5];
	$Accidents = $row[6];
	$TotalDamageToDate = $row[7];
	$Price = $row[8];
	$Picutre1 = $row[9];
	$Picutre2 = $row[10];
	$Picutre3 = $row[11];
	$SpecialFeatures = $row[12];
	if (isset($_POST["AddRecordTimecheckbox"]))
		{
		$AddRecordTime = $row[13];
		}
	  else
		{
		$AddRecordTime = "";
		}

	if (isset($_POST["ShowRecordTimecheckbox"]))
		{
		$ShowRecordTime = $row[13];
		}
	  else
		{
		$ShowRecordTime = "";
		}
	}

// When the Delete button clicked

if (isset($_POST["Clear"]))
	{

	// Clear all information
	$VIN = "";
	$Make = "";
	$Model = "";
	$Year = "";
	$Color = "";
	$Mileage = "";
	$Accidents = "";
	$TotalDamageToDate = "";
	$Price = "";
	$Picutre1 = "";
	$Picutre2 = "";
	$Picutre3 = "";
	$SpecialFeatures = "";
	$AddRecordTime = "";
	$ShowRecordTime = "";
	}

    
//---------------------------- Implement File Upload Start----------------------------

// Check if image file is a actual image or fake image
	//$target_dir = "uploads/";
	$target_file1 = basename($_FILES["fileToUpload1"]["name"]);
    $target_file2 = basename($_FILES["fileToUpload2"]["name"]);
    $target_file3 = basename($_FILES["fileToUpload3"]["name"]);
    $Picutre1 = $target_file1;
    $Picutre2 = $target_file2;
    $Picutre3 = $target_file3;
	$uploadOk1 = 1;
    $uploadOk2 = 1;
    $uploadOk3 = 1;
	$imageFileType1 = pathinfo($target_file1, PATHINFO_EXTENSION);
    $imageFileType2 = pathinfo($target_file2, PATHINFO_EXTENSION);
    $imageFileType3 = pathinfo($target_file3, PATHINFO_EXTENSION);
if (isset($_POST["submit"]))
	{
	$check1 = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    $check2 = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
    $check3 = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
	if ($check1 !== false)
		{
		echo "File is an image - " . $check1["mime"] . ".";
		$uploadOk1 = 1;
		}
	  else
		{
		echo "File is not an image.";
		$uploadOk1 = 0;
		}
	if ($check2 !== false)
		{
		echo "File is an image - " . $check2["mime"] . ".";
		$uploadOk2 = 1;
		}
	  else
		{
		echo "File is not an image.";
		$uploadOk2 = 0;
		}
	if ($check3 !== false)
		{
		echo "File is an image - " . $check3["mime"] . ".";
		$uploadOk3 = 1;
		}
	  else
		{
		echo "File is not an image.";
		$uploadOk3 = 0;
		}        
	

// Check if file already exists
if (file_exists($target_file1))
	{
	echo "Sorry, file already exists.";
	$uploadOk1 = 0;
	}
if (file_exists($target_file2))
	{
	echo "Sorry, file already exists.";
	$uploadOk2 = 0;
	}    
if (file_exists($target_file3))
	{
	echo "Sorry, file already exists.";
	$uploadOk3 = 0;
	}
    
// Check file size
if ($_FILES["fileToUpload1"]["size"] > 500000)
	{
	echo "Sorry, your file is too large.";
	$uploadOk1 = 0;
	}
if ($_FILES["fileToUpload2"]["size"] > 500000)
	{
	echo "Sorry, your file is too large.";
	$uploadOk2 = 0;
	}
if ($_FILES["fileToUpload3"]["size"] > 500000)
	{
	echo "Sorry, your file is too large.";
	$uploadOk3 = 0;
	}
    
// Allow certain file formats
if ($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg" && $imageFileType1 != "gif")
	{
        echo "<script type='text/javascript'>";
		echo "alert ('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')";
		echo "</script>";
	$uploadOk1 = 0;
	}
if ($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif")
	{
        echo "<script type='text/javascript'>";
		echo "alert ('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')";
		echo "</script>";
	$uploadOk2 = 0;
	}
if ($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg" && $imageFileType3 != "gif")
	{
        echo "<script type='text/javascript'>";
		echo "alert ('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')";
		echo "</script>";
	$uploadOk3 = 0;
	}
    
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0)
	{
		echo "<script type='text/javascript'>";
		echo "alert ('Sorry, your file was not uploaded.')";
		echo "</script>";
	// if everything is ok, try to upload file
	}
  else
	{
	if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file1))
		{
        echo "<script type='text/javascript'>";
		echo "alert ('The file')". basename($_FILES["fileToUpload1"]["name"]) . " has been uploaded.";
		echo "</script>";
		}
	  else
		{
		echo "<script type='text/javascript'>";
		echo "alert ('Sorry, there was an error uploading your file.')";
		echo "</script>";
		}
	}

if ($uploadOk2 == 0)
	{
		echo "<script type='text/javascript'>";
		echo "alert ('Sorry, your file was not uploaded.')";
		echo "</script>"; 

	// if everything is ok, try to upload file
	}
  else
	{
	if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2))
		{
            echo "<script type='text/javascript'>";
    		echo "alert ('The file')". basename($_FILES["fileToUpload2"]["name"]) . " has been uploaded.";
            echo "</script>"; 
		}
	  else
		{
		echo "<script type='text/javascript'>";
		echo "alert ('Sorry, there was an error uploading your file.')";
		echo "</script>";
		}
	}
    
if ($uploadOk3 == 0)
	{
		echo "<script type='text/javascript'>";
		echo "alert ('Sorry, your file was not uploaded.')";
		echo "</script>";
	// if everything is ok, try to upload file
	}
  else
	{
	if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3))
		{
            echo "<script type='text/javascript'>";
    		echo "alert ('The file')". basename($_FILES["fileToUpload3"]["name"]) . " has been uploaded.";
            echo "</script>"; 
		}
	  else
		{
		echo "<script type='text/javascript'>";
		echo "alert ('Sorry, there was an error uploading your file.')";
		echo "</script>";
		}        
	}
}
//---------------------------- Implement File Upload End ----------------------------

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
               <h1 class="text-center">Car Dealer Ship Admin</h1>
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
               <form method="post" Name = "Time" action="CarDealerShipAdmin.php">
                  <div class="form-group">
                     <div class="CriteriaBlock">
                        <div>
                           <ul class="CriteriaAdmin">
                              <li>
                                 <label for="VIN">
                                    <p>VIN:</p>
                                 </label>
                                 <input type="text" id="VIN" name="VIN" value="<?php echo $VIN; ?>">
                              </li>
                              <li>
                                 <label for="Make">
                                    <p>Make:</p>
                                 </label>
                                 <input type="text" id="Make" name="Make" value="<?php echo $Make; ?>">
                              </li>
                              <li>
                                 <label for="Model">
                                    <p>Model:</p>
                                 </label>
                                 <input type="text" id="Model" name="Model" value="<?php echo $Model; ?>">
                              </li>
                              <li>
                                 <label for="Year">
                                    <p>Year:</p>
                                 </label>
                                 <input type="text" id="Year" name="Year" value="<?php echo $Year; ?>">
                              </li>
                              <li>
                                 <label for="Color">
                                    <p>Color:</p>
                                 </label>
                                 <input type="text" id="Color" name="Color" value="<?php echo $Color; ?>">
                              </li>
                              <li>
                                 <label for="Mileage">
                                    <p>Mileage:</p>
                                 </label>
                                 <input type="text" id="Mileage" name="Mileage" value="<?php echo $Mileage; ?>">
                              </li>
                              <li>
                                 <label for="Accidents">
                                    <p>Accidents:</p>
                                 </label>
                                 <input type="text" id="Accidents" name="Accidents" value="<?php echo $Accidents; ?>">
                              </li>
                              <li>
                                 <label for="TotalDamageToDate">
                                    <p>Total Damage to date:</p>
                                 </label>
                                 <input type="text" id="TotalDamageToDate" name="TotalDamageToDate" value="<?php echo $TotalDamageToDate; ?>">
                              </li>
                              <li>
                                 <label for="Price">
                                    <p>Price:</p>
                                 </label>
                                 <input type="text" id="Price" name="Price" value="<?php echo $Price; ?>">
                              </li>
                              <li>
                                 <label for="Picutre1">
                                    <p>Picutre1:</p>
                                 </label>
                                 <input type="text" id="Picutre1" name="Picutre1" value="<?php echo $Picutre1; ?>">
                              </li>
                              <li>
                                 <label for="Picutre2">
                                    <p>Picutre2:</p>
                                 </label>
                                 <input type="text" id="Picutre2" name="Picutre2" value="<?php echo $Picutre2; ?>">
                              </li>
                              <li>
                                 <label for="Picutre3">
                                    <p>Picutre3:</p>
                                 </label>
                                 <input type="text" id="Picutre3" name="Picutre3" value="<?php echo $Picutre3; ?>">
                              </li>
                              <li>
                                 <label for="SpecialFeatures">
                                    <p>Special features:</p>
                                 </label>
                                 <input type="text" id="SpecialFeatures" name="SpecialFeatures" value="<?php echo $SpecialFeatures; ?>">
                              </li>
                              <li>
                                 <!--the action changes whether you check the checkbox or not-->
                                 <?php if(isset($_POST["AddRecordTimecheckbox"])){
                                    echo ('<input type="checkbox" id="AddRecordTimecheckbox" name="AddRecordTimecheckbox[]" checked="checked">');
                                    }else{
                                        echo ('<input type="checkbox" id="AddRecordTimecheckbox" name="AddRecordTimecheckbox[]">');
                                    }
                                    ?>
                                 <label for="AddRecordTime">
                                    <p>Add Record Time:</p>
                                 </label>
                                 <input type="text" id="AddRecordTime" name="AddRecordTime" disabled="disabled" value="<?php echo $AddRecordTime; ?>">                                 
                              </li>
                              <li>
                                 <!--the action changes whether you check the checkbox or not-->
                                 <?php if(isset($_POST["ShowRecordTimecheckbox"])){
                                    echo ('<input type="checkbox" id="ShowRecordTimecheckbox" name="ShowRecordTimecheckbox[]" checked="checked">');
                                    }else{
                                    echo ('<input type="checkbox" id="ShowRecordTimecheckbox" name="ShowRecordTimecheckbox[]">');
                                    }
                                    ?>   
                                 <label for="ShowRecordTime">
                                    <p>Show Record Time:</p>
                                 </label>
                                 <input type="text" id="ShowRecordTime" name="ShowRecordTime" disabled="disabled" value="<?php echo $ShowRecordTime; ?>">
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
               <br>
               <br>
               <form action="CarDealerShipAdmin.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                     <div class="CriteriaBlock">
                        <div>
                           <ul class="CriteriaAdmin">
                              <li>
                                 <label for="fileToUpload1">
                                    <p>Select Picutre1 to upload:</p>
                                 </label>
                                 <input type="file" name="fileToUpload1" id="fileToUpload1">
                              </li>
                              <li>
                                 <label for="fileToUpload2">
                                    <p>Select Picutre2 to upload:</p>
                                 </label>
                                 <input type="file" name="fileToUpload2" id="fileToUpload2">                              
                              </li>
                              <li>
                                 <label for="fileToUpload3">
                                    <p>Select Picutre3 to upload:</p>
                                 </label>
                                 <input type="file" name="fileToUpload3" id="fileToUpload3">
                              </li>
                              <li>
                              <input type="submit" value="Upload Image" class="btn btn-success" name="submit">
                              </li>
                              <br>
                              <br>
                           </ul>
                        </div>
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
