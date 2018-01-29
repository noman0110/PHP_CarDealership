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
	$sql = "SELECT * FROM Subscribers WHERE SubscriberID = " . $array[0];
	$r = mysql_query($sql, $link);

	// check whether table exists or not.
	if (!$r)
		{
		echo "<script type='text/javascript'>";
		echo "alert ('Subscribers does not exist.')";
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
			echo "alert ('This Subscribers does not exist. You can not update it.')";
			echo "</script>";
			mysql_close($link);
			return;
			}
		  else
			{

			// if VIN has already existed. can update
			$sqlUpd = "UPDATE Subscribers SET "
            . "SubscriberID =" . $array[0] . ","
            . "Password = " . $array[1] . ","
            . "Name ='" . $array[2] . "',"
            . "LastName ='" . $array[3] . "',"
            . "Gender = '" . $array[4] . "',"
            . "Birthdate =" . $array[5] . ","
            . "SuiteNo = " . $array[6] . ","
            . "Street ='" . $array[7] . "',"
            . "City ='" . $array[8] . "',"
            . "ProvState = '" . $array[9] . "',"
            . "Country = '" . $array[10] . "',"
            . "Postalcode = '" . $array[11] . "',"
            . "Phone = " . $array[12] . ","
            . "Cellphone = " . $array[13] . ","
            . "Email = '" . $array[14] . "',"
            . "AlternativeEmail = '" . $array[15] . "'"
            . " WHERE SubscriberID = " . $array[0];
            //echo $sqlUpd;
			$r = mysql_query($sqlUpd, $link);
			echo "<script type='text/javascript'>";
			echo "alert ('Subscribers Update success.')";
			echo "</script>";
			mysql_close($link);
			return $array;
			}
		}
	}

?>
