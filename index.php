<?php 
/*
Plugin Name: Excel Sheet Downloader2
Author: Sourabh Kumar Sharma
Description: This is a plugin that is used to generate the Excel Sheet from the database
*/
?>
<?php

class XLSGenerate
{

	function createXLS($tblname)
	{
		$countt = 1; /* this variable is used in the condition where if the value is 1 then we will extract the column name from the resultant query object */
		global $funcCls;
		$totDat  = $funcCls->generateXLS($tblname);
		$listDat = '';
		/* The below if block of code is to get the column names */
		if ( $countt == 1 )
		{
			foreach($totDat as $eachDat)
			{
				$tempBuf = '';
				/* The below foreach block of code with iterate through each value in the object */
				foreach($eachDat as $key => $value)
				{
					$tempBuf = $tempBuf.$key."\t";
				}
				$tempBuf = $tempBuf."\n";
				$colNm   = $tempBuf;
				$countt++;
				break; /*Once we extract the column name from the first loop just break-out from the loop*/
			}
		}
		$tempBuf = '';
		$tempBuf = $tempBuf.$colNm; /*Append the column name headings here*/
		/* This first foreach loop for the main array of the objects, in each of the array of objects there are values that belong to single user */
		foreach($totDat as $eachDat)
		{
			/* The below foreach block of code with iterate through each value in the object */
			foreach($eachDat as $key => $value)
			{
				
				$tempBuf = $tempBuf.$value."\t";
			}
			$tempBuf = $tempBuf."\n";
			$listDat = $listDat.$tempBuf;
			$tempBuf = '';
		}
		return $listDat;
	}

}

?>