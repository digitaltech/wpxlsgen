<?php session_start();
/*This is the page that contains all the database related functions that will be called by our plugin file, in our case now index.php*/

class Func
{
	function generateXLS($tblnm)
	{
		global $wpdb;
		$sql    = "SELECT * FROM $tblnm";
		$result = $wpdb->get_results($sql);
		return $result;
	}
}

?>