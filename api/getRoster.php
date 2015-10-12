<?php

//Gets all On-Floor Members, their rooms, and housing points
//Author: Henry Saniuk (henry)
//Date: 10 11 15

// -Get a list of all rooms on floor
// -Count up housing points for each room
// -Return said information

include 'db.php';

$db = new mysqli($host, $dbusername, $dbpassword, $dbname) or die("Connection Error: " . mysqli_error($db));

$query = "SELECT t1.room_number AS room_number, t1.roommate1, t1.roommate2, t3_1.housing_points AS 'roommate1_housing', t3_2.housing_points AS 'roommate2_housing' FROM $rosterTable t1 INNER JOIN $membersTable t3_1 ON t1.roommate1 = t3_1.username INNER JOIN $membersTable t3_2 ON t1.roommate2 = t3_2.username WHERE t1.year = 'current'";


if(!$result = $db->query($query)){
        die("RESULT ERROR: " . $db->error.__LINE__);
    }

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        $temp = array();
        $temp['room_number'] = $row['room_number'];
        $temp['roommate1'] = $row['roommate1'];
        $temp['roommate2'] = $row['roommate2'];
        $temp['roommate1_housing'] = (int) $row['roommate1_housing'];
        $temp['roommate2_housing'] = (int) $row['roommate2_housing'];
        $temp['total_housing_points'] = $temp['roommate1_housing_points'] + $temp['roommate2_housing_points'];
		$arr[] = $temp;
	}
}

# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;

?>