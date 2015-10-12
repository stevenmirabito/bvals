<?php
 // Gets the On-Floor Housing Queue
 // - username
 // - timestamp

include 'db.php';

$db = new mysqli($host, $dbusername, $dbpassword, $dbname) or die("Connection Error: " . mysqli_error($db));

if (isset($_GET['user'])) {
    $username = $db->real_escape_string($_GET['user']);
}else{
    // Error - No ID given
    die("No Username Provided as URL Parameter.");
}

$query = "SELECT * FROM $queueTable";

if(!$result = $db->query($query)){
        die("RESULT ERROR: " . $db->error.__LINE__);
    }

$userArr = array();
$total = 0;
$userPosition = 0;
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$total++;
        array_push($userArr,$row['username']);
	}
}
for($i=0;$i<$total;$i++){
    if($userArr[$i] == $username){
        $userPosition = $i+1;   
    }
}
$userPos['totalInQueue'] = $total;
$userPos['queuePosition'] = $userPosition;

# JSON-encode the response
$json_response = json_encode($userPos);

// # Return the response
echo $json_response;

?>