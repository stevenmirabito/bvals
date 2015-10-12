<?php

//Freshman Evals API Call
//Author: Brandon Hudson (hudson)
//Date: 10 11 15
//Returns:
// - Packet Due (freshman_evals)
// - Eval Date/Vote Date (freshman_evals)
// - Signatures Missed (freshman_evals)
// - House Meetings Missed (house_meetings)
// - Technical Seminars (freshman_evals)
// - Social Events (freshman_evals)
// - Freshman Project Results (freshman_evals)
// - Freshman Project Comments (freshman_evals)
// - Result (freshman_evals)

include 'db.php';

$db = new mysqli($host, $dbusername, $dbpassword, $dbname) or die("Connection Error: " . mysqli_error($db));

if (isset($_GET['user'])) {
    $username = $db->real_escape_string($_GET['user']);
}else{
    // Error - No ID given
    die("No Username Provided as URL Parameter.");
}

$query = "SELECT * FROM $freshmanEvalsTable WHERE username='$username'";


if(!$result = $db->query($query)){
        die("RESULT ERROR 1: " . $db->error.__LINE__);
    }

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        $tempRow = $row;
        
        
      
        
        //Get House Meetings
        $hQuery = "SELECT * FROM $houseMeetingsTable WHERE username='$username' ";
        if(!$hResult = $db->query($hQuery)){
        die("RESULT ERROR 2: " . $db->error.__LINE__);
    }
        if($hResult ->num_rows > 0){
            $dateArr = array();
            $presentArr = array();
            $excusedArr = array();
            $commentsArr = array();
            
            while($hRow = $hResult->fetch_assoc()) {                
                
                array_push($dateArr, $hRow['date']);
                array_push($presentArr, $hRow['present']);
                array_push($excusedArr, $hRow['excused']);
                array_push($commentsArr, $hRow['comments']); 
                          
                
        }
             $tempRow['house_meetings_date'] = $dateArr;
             $tempRow['house_meetings_present'] = $presentArr;
             $tempRow['house_meetings_excused'] = $excusedArr;
             $tempRow['house_meetings_comments'] = $commentsArr;
        }
        
        
        
        
        
		$arr = $tempRow;	
	}
}
# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;



?>