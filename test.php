<?php
	try
		{
			$conn = new PDO("sqlsrv:Server=DESKTOP-BLQ3M1P\SQLEXPRESS;Database=test", "DESKTOP-BLQ3M1P\Rowen Forman", "biss");
			$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}

		catch(Exception $e)
		{
			die (print_r($e->getMessage()));
		}

?>