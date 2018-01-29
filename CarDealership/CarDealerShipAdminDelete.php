<?php

function Delete($array)
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

			// if VIN has not existed. cannot delete
			echo "<script type='text/javascript'>";
			echo "alert ('This CarInformation does not exist. You can not delete it.')";
			echo "</script>";
			mysql_close($link);
			return;
			}
		  else
			{

			// if VIN has already existed. can delete
			$sqlDel = "DELETE FROM CarInformation WHERE VIN =" . $array[0];

			// }Confirm messgae before you delete.
			echo "<script type='text/javascript'>";
			echo " var flag = confirm ('Are you sure you want to delete?');";
			echo " if (flag == true){";
			$r = mysql_query($sqlDel, $link);
			echo "alert ('CarInformation Update success.')";
			echo "}else{";
			echo "alert ('CarInformation Update Canceled.')";
			echo "};";
			echo "</script>";
			mysql_close($link);
			return $row;
			}
		}
	}

?>