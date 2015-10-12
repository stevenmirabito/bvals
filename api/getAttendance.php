<?php

//get the attendance for a user
//Author: Brandon Hudson (hudson)
//Date: 10 11 15

include 'db.php';

$db = new mysqli($host, $dbusername, $dbpassword, $dbname) or die("Connection Error: " . mysqli_error($db));

if (isset($_GET['user'])) {
    $username = $db->real_escape_string($_GET['user']);
}else{
    // Error - No ID given
    die("No Username Provided as URL Parameter.");
}

$query = "SELECT * FROM $attendanceTable WHERE username='$username'";


if(!$result = $db->query($query)){
        die("RESULT ERROR 1: " . $db->error.__LINE__);
    }

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        $tempRow = $row;
        
        $CID = $row['committee_id'];
      
        
        //Get House Meetings
        $cQuery = "SELECT * FROM $committeesTable WHERE ID='$CID'";
        if(!$cResult = $db->query($cQuery)){
        die("RESULT ERROR 2: " . $db->error.__LINE__);
    }
        if($cResult ->num_rows > 0){
            
            
            while($cRow = $cResult->fetch_assoc()) {                
                
             $tempRow['committee_name'] = $cRow['committee_name'] ;
                  
        }
            
        }
         
		$arr[] = $tempRow;	
	}
}
# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;

?>