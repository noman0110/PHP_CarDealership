<?php

function Add($array)
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

			// if VIN has not existed. can add
			$sqlIns = "INSERT INTO Subscribers(
            SubscriberID,
            Password,
            Name,
            LastName,
            Gender,
            Birthdate,
            SuiteNo,
            Street,
            City,
            ProvState,
            Country,
            Postalcode,
            Phone,
            Cellphone,
            Email,
            AlternativeEmail
            )VALUES (" . $array[0] . "," . $array[1] . "," . "'" . $array[2] . "'," . "'" . $array[3] . "'," . "'" . $array[4] . "'," . $array[5] . ",". $array[6] . ","
            . "'" . $array[7] . "'," . "'" . $array[8] . "'," . "'" . $array[9] . "'," . "'" . $array[10] . "'," . "'" . $array[11] . "'," . $array[12] . ","
            . $array[13] . "," . "'" . $array[14] . "'," . "'" . $array[15] . "'". ")";
            $r = mysql_query($sqlIns, $link);
			echo "<script type='text/javascript'>";
			echo "alert ('Subscribers add success.')";
			echo "</script>";
			mysql_close($link);
			return $array;
			}
		  else
			{
			// if VIN has already existed. can not add
			echo "<script type='text/javascript'>";
			echo "alert ('This Subscribers has already existed. You can not add it.')";
			echo "</script>";
			mysql_close($link);
			return;
			}
		}
	}

?>
