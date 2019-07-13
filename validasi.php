<?php
$Username = 'haseuA';
echo 'Username = '.$Username.'<br />';
 
	if(preg_match("/^[a-zA-Z]{5,9}$/", $Username)) {
  		echo 'Username valid';
	} else {
  		echo 'Username tidak valid';
	}
	
	
$Password = 'asdaas@$d@0';
echo "<br />";
echo 'Password = '.$Password.'<br />';

 if (strlen($Password)<8) {
	echo "Password Tidak Boleh Kurang 8 Karakter";
} else{
	if(preg_match("/[a-z]\@[0-9]/", $Password)) {
		
		if(preg_match("/[A-Z]/", $Password)) {
			echo "mengandung huruf besar ";
		}
  		echo 'Password valid';
	} else {
  		echo 'Password tidak valid';
	}
}


?>
