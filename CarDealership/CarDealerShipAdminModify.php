<?php

function Modify($array)
	{

	// Connect with mysql
	$link = mysql_connect("localhost", "root", "mysql");

	// chech whether mysql has been installed or not.
	if (!$link)
		{
		die("<h3><font color=red>You must install MySQL</font></h3>");
		return;
		}

	// Connect with DB
	$db_selected = mysql_select_db("CarDealership", $link);
	mysql_select_db("CarDealership", $link);

	// check whether db exists or not.
	if (!$db_selected)
		{
		print ("<h3><font color=red>Database does not exist.</font></h3>");
		return;
		}

	// Create sql VIN input
	$sql = "SELECT * FROM CarInformation WHERE VIN = " . $array[0];
	$r = mysql_query($sql, $link);

	// check whether table exists or not.
	if (!$r)
		{
		echo "<script type='text/javascript'>";
		echo "alert ('CarInformation does not exist.')";
		echo "</script>";
		return;
		}
	  else
		{

		// check whether data exists or not.
		$row = mysql_fetch_array($r);
		if (!$row)
			{

			// if VIN has not existed. cannot update
			echo "<script type='text/javascript'>";
			echo "alert ('This CarInformation does not exist. You can not update it.')";
			echo "</script>";
			mysql_close($link);
			return;
			}
		  else
			{

			// if VIN has already existed. can update
			$sqlUpd = "UPDATE CarInformation SET " . "VIN =" . $array[0] . "," . "Make = '" . $array[1] . "'," . "Model ='" . $array[2] . "'," . "Year =" . $array[3] . "," . "Color = '" . $array[4] . "'," . "Mileage =" . $array[5] . "," . "Accidents = '" . $array[6] . "'," . "TotalDamageToDate ='" . $array[7] . "'," . "Price =" . $array[8] . "," . "Picture1 = '" . $array[9] . "'," . "Picture2 = '" . $array[10] . "'," . "Picture3 = '" . $array[11] . "'," . "SpecialFeatures = '" . $array[12] . "'," . "RecordTime = '" . $array[13] . "'" . " WHERE VIN = " . $array[0];
			$r = mysql_query($sqlUpd, $link);
			echo "<script type='text/javascript'>";
			echo "alert ('CarInformation Update success.')";
			echo "</script>";
			mysql_close($link);
			return $row;
			}
		}
	}

?>
