<?php
// Conditionals for a given user
//Author: Brandon Hudson (hudson)
//Date: 10 11 15

include 'db.php';

$db = new mysqli($host, $dbusername, $dbpassword, $dbname) or die("Connection Error: " . mysqli_error($db));

if (isset($_GET['user'])) {
    $username = $db->real_escape_string($_GET['user']);
    $query = "SELECT * FROM $conditionalTable WHERE username='$username'";
}else{
    $query = "SELECT * FROM $conditionalTable";
   
}

if(!$result = $db->query($query)){
        die("RESULT ERROR: " . $db->error.__LINE__);
    }

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;	
	}
}
# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;

?>