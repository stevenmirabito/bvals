<?php

//Gets all On-Floor Members
//Author: Brandon Hudson (hudson)
//Date: 10 11 15

// -Active
// -On-Floor Status
// -Voting
// -Housing Points
// -alumniable
// -committee meetings

include 'db.php';

$db = new mysqli($host, $dbusername, $dbpassword, $dbname) or die("Connection Error: " . mysqli_error($db));


$query = "SELECT * FROM $membersTable WHERE on_floor='1'";

if(!$result = $db->query($query)){
        die("RESULT ERROR: " . $db->error.__LINE__);
    }

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        $row['housingPoints'] = $row['housing_points'];
        $row['on_floor'] = (int) $arr['on_floor'];
        $row['voting'] = (int) $arr['voting'];
        $row['active'] = (int) $arr['active'];
		$arr[] = $row;
	}
}

# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;


?>