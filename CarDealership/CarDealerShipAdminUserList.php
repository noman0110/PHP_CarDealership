<?php

function Listshow($array)
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
	$sql = "SELECT * FROM Security";
	$r = mysql_query($sql, $link);

	// check whether table exists or not.
	if (!$r)
		{
		echo "<script type='text/javascript'>";
		echo "alert ('UserID table does not exist')";
		echo "</script>";
		return;
		}
	  else
		{
		// check whether data exists or not.
		$row = mysql_fetch_array($r);
		if (!$row)
			{
			// if VIN has not existed. cannot search
			echo "<script type='text/javascript'>";
			echo "alert ('UserID does not exist. Search again.')";
			echo "</script>";
			return;
			}
		  else
			{
			// if VIN has existed. cannot search
			echo "<script type='text/javascript'>";
			echo "alert ('UserID Search successfully')";
			echo "</script>";
			mysql_close($link);
			return $r;
			}
		}
	}

?>
