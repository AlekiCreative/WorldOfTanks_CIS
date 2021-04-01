<?php

	

	function DB_CONN($id,$column,$table){
		
		//Inializace MySQL database
		$DB_SERVER = "localhost";
		$DB_USER = "root";
		$DB_PASS = "";
		$DB_NAME = "cis";
		
		$return_data = array();
		
		$conn = mysqli_connect($DB_SERVER,$DB_USER,$DB_PASS,$DB_NAME);

		// Check connection
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
   
		//$id = $_SESSION['account_id'];
        $q = 	'SELECT * FROM `'.$table.'` WHERE `'.$column.'`="'.$id.'"';
		
	
        if ($result = $conn->query($q)) {
				
                /* fetch object array */
                while ($row = $result->fetch_row()) {
					
					
					for ($a = 0; $a<count($row);$a++){
						
						$return_data[$a] = $row[$a];
						
					}
/*
                   $_SESSION['db_id'] = $row[0];
                   $_SESSION['account_id'] = $row[1];
                   $_SESSION['clan_id'] = $row[2];
                   $_SESSION['account_name'] = $row[3];
                   $_SESSION['update_time'] = $row[4];
                   $_SESSION['setting'] = $row[5];
                   $_SESSION['joined_at'] = $row[6];
                   $_SESSION['role'] = $row[7];
                   $_SESSION['global_rating'] = $row[8];
                   $_SESSION['trees_cut'] = $row[9];
                   $_SESSION['random'] = $row[10];
                   $_SESSION['vehicles'] = $row[11];
                   $_SESSION['archievements'] = $row[12];
                 */   
                }
                /* free result set */
                $result->close();
            }

            /* close connection */
            $conn->close();
	return $return_data;		
	}
    
             ?>