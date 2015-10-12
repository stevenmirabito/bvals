<?php

// -Active
// -On-Floor Status
// -Voting
// -Housing Points
// -alumniable
// -committee meetings

include 'db.php';

$db = new mysqli($host, $dbusername, $dbpassword, $dbname) or die("Connection Error: " . mysqli_error($db));

if (isset($_GET['user'])) {
    $username = $db->real_escape_string($_GET['user']);
}else{
    // Error - No ID given
    die("No Username Provided as URL Parameter.");
}

$query = "SELECT * FROM $membersTable WHERE username='$username'";

if(!$result = $db->query($query)){
        die("RESULT ERROR: " . $db->error.__LINE__);
    }

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr = $row;
	}
}

//Cast to int
$arr['on_floor'] = (int) $arr['on_floor'];
$arr['voting'] = (int) $arr['voting'];
$arr['active'] = (int) $arr['active'];

# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;

?>