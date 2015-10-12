<?php

//Spring Evals API Call
// Author: Brandon Hudson (hudson)
// Date: 10 11 15
// Returns:
// - Committee Meetings (members) +
// - House Meetings (house_meetings)+
// - House Meeting Comments (house_meetings)+
// - Major Projects (major_project) +
// - Comments (spring_evals) +
// - Result (spring_evals) +
// AND MORE!

include 'db.php';

$db = new mysqli($host, $dbusername, $dbpassword, $dbname) or die("Connection Error: " . mysqli_error($db));

if (isset($_GET['user'])) {
    $username = $db->real_escape_string($_GET['user']);
}else{
    // Error - No ID given
    die("No Username Provided as URL Parameter.");
}

$query = "SELECT * FROM $springEvalsTable WHERE username='$username'";

if(!$result = $db->query($query)){
        die("RESULT ERROR 1: " . $db->error.__LINE__);
    }

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        $tempRow = $row;
      
        //Get House Meetings
        $houseMeetingQuery = "SELECT * FROM $houseMeetingsTable WHERE username='$username' ";
        if(!$houseMeetingsResult = $db->query($houseMeetingQuery)){
        die("RESULT ERROR 2: " . $db->error.__LINE__);
    }
        if($houseMeetingsResult ->num_rows > 0){
            $dateArr = array();
            $presentArr = array();
            $excusedArr = array();
            $commentsArr = array();
            
            while($hmRow = $houseMeetingsResult->fetch_assoc()) {
                
                array_push($dateArr, $hmRow['date']);
                array_push($presentArr, $hmRow['present']);
                array_push($excusedArr, $hmRow['excused']);
                array_push($commentsArr, $hmRow['comments']);   
                
                // Get Major Project Info
                $tempRow2 = $tempRow;
      
        //Get Major Project Info
        $mpQuery = "SELECT * FROM $majorProjectsTable WHERE username='$username'";
        if(!$mpResult = $db->query($mpQuery)){
        die("RESULT ERROR 3: " . $db->error.__LINE__);
    }
        if($mpResult ->num_rows > 0){
            while($mpRow = $mpResult->fetch_assoc()) {
                
                $tempRow2['major_project_timestamp'] = $mpRow['timestamp'];
                $tempRow2['major_project_committee'] = $mpRow['project_committee'];
                $tempRow2['major_project_name'] = $mpRow['project_name'];
                $tempRow2['major_project_description'] = $mpRow['project_description'];
                $tempRow2['major_project_status'] = $mpRow['status'];
                
                //Get Committee Info
                $tempRow3 = $tempRow2;
                    
                $memberQuery = "SELECT * FROM $membersTable WHERE username='$username'";
        if(!$memResult = $db->query($memberQuery)){
        die("RESULT ERROR 4: " . $db->error.__LINE__);
    }
        if($memResult ->num_rows > 0){
            while($memRow = $memResult->fetch_assoc()) {
                
                $tempRow3['committee_mtgs'] = $memRow['committee_mtgs'];
                
            }
        }                
                //End Get Committee Info
   
        }
        }   
                
                //End Get Major Project Info
    
        }
            
            $tempRow3['house_meeting_date'] = $dateArr;
            $tempRow3['house_meeting_present'] = $presentArr;
            $tempRow3['house_meeting_excused'] = $excusedArr;
            $tempRow3['house_meeting_comments'] = $commentsArr;
        }

		$arr = $tempRow3;	
	}
}
# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;

?>