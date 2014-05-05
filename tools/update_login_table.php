<?php
				include_once '../config.php';
				
				if ($conn)
				{
					mysql_select_db($dbname) or die(mysql_error());
					mysql_query("SET NAMES UTF8");
				}
				
				$sql_select_login = "SELECT * FROM tbl_login WHERE account_type_id='2'";
				$sql_select_login_execute = mysql_query($sql_select_login) or die(mysql_error());
				
				while ($login = mysql_fetch_array($sql_select_login_execute))
				{
					$update_login_univ_id = "UPDATE tbl_login SET univ_id='".$login['username']."' WHERE username='".$login['username']."'";
					mysql_query($update_login_univ_id) or die(mysql_error());
				}
?>