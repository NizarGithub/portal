<?php
   include "koneksi-cu.php";
   
   $db = new mysqli($server,$user,$password,$database);
	
	if(!$db) {
		echo 'Could not connect to the database.';
	} else {
	
		if(isset($_POST['queryString'])) {
			$queryString = $db->real_escape_string($_POST['queryString']);
			
			if(strlen($queryString) >0) {

				$query = $db->query("SELECT * FROM akun WHERE kodeakun LIKE '$queryString%' order by kodeakunurut asc");
				
				if($query) {
				echo '<ul>';
					while ($result = $query ->fetch_object()) {
	         			echo '<li onClick="fill(\''.addslashes($result->namaakun).'\'); fill2(\''.addslashes($result->kodeakun).'\');">'.$result->kodeakun.'&nbsp;&nbsp;'.$result->namaakun.'</li>';
	         		
					}
					
					if(empty($result)){
						echo "&nbsp;&nbsp;&nbsp;&nbsp;Nomor Perkiraan ini belum ada<br>";
					}
				echo '</ul>';
					
				} else {
					echo 'OOPS we had a problem :(';
				}
			} else {
				// do nothing
			}
		} else {
			echo 'There should be no direct access to this script!';
		}
	}
?>