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
	$sql = "SELECT * FROM Security WHERE UserID = " . $array[0];
	$r = mysql_query($sql, $link);

	// check whether table exists or not.
	if (!$r)
		{
		echo "<script type='text/javascript'>";
		echo "alert ('UserID does not exist.')";
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
			echo "alert ('This UserID does not exist. You can not update it.')";
			echo "</script>";
			mysql_close($link);
			return;
			}
		  else
			{

			// if VIN has already existed. can update
			$sqlUpd = "UPDATE Security SET " . "UserID =" . $array[0] . "," . "Password = '" . $array[1] . "'," . "SuperUser =" . $array[2] . "," . "AddPermission =" . $array[3] . "," . "ModifyPermission = " . $array[4] . "," . "DeletePermission =" . $array[5] . "," . "SecurityQuestion1 = '" . $array[6] . "'," . "SecurityQuestion2 ='" . $array[7] . "'," . "SecurityQuestion3 ='" . $array[8] . "'," . "Email = '" . $array[9] . "'" . " WHERE UserID = " . $array[0];
			$r = mysql_query($sqlUpd, $link);
			echo "<script type='text/javascript'>";
			echo "alert ('UserID Update success.')";
			echo "</script>";
			mysql_close($link);
			return $array;
			}
		}
	}

?>
