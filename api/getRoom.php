<?php

include 'db.php';

$db = new mysqli($host, $dbusername, $dbpassword, $dbname) or die("Connection Error: " . mysqli_error($db));

if (isset($_GET['user'])) {
    $username = $db->real_escape_string($_GET['user']);
}else{
    // Error - No ID given
    die("No Username Provided as URL Parameter.");
}

$cQuery = "SELECT * FROM $rosterTable WHERE year='$roomCurrent' AND (roommate1='$username' OR roommate2='$username')";

$nQuery = "SELECT * FROM $rosterTable WHERE year='$roomNext' AND (roommate1='$username' OR roommate2='$username')";

if(!$cResult = $db->query($cQuery)){
        die("RESULT ERROR: " . $db->error.__LINE__);
    }

$arr = array();
if($cResult->num_rows > 0) {
	while($crow = $cResult->fetch_assoc()) {
		$arr['current'] = $crow;	
	}
}
else{
    $arr['current'] = array();   
    
}

if(!$nResult = $db->query($nQuery)){
        die("RESULT ERROR: " . $db->error.__LINE__);
    }


if($nResult->num_rows > 0) {
	while($nrow = $nResult->fetch_assoc()) {
		$arr['next'] = $nrow;	
	}
}
else{
    $arr['next'] = array();   
    
}

# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;

?>