<?php

//Gets the entire housing queue
//Author: Brandon Hudson (hudson)
//Date: 10 11 15


include 'db.php';

$db = new mysqli($host, $dbusername, $dbpassword, $dbname) or die("Connection Error: " . mysqli_error($db));



$query = "SELECT * FROM $queueTable";

if(!$result = $db->query($query)){
        die("RESULT ERROR: " . $db->error.__LINE__);
    }

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        $tempRow = $row;
        
        $username = $row['username'];
      
        
        //Get House Meetings
        $cQuery = "SELECT * FROM $membersTable WHERE username='$username'";
        if(!$cResult = $db->query($cQuery)){
        die("RESULT ERROR 2: " . $db->error.__LINE__);
    }
        if($cResult ->num_rows > 0){
            
            
            while($cRow = $cResult->fetch_assoc()) {                
                
             $tempRow['housingPoints'] = $cRow['housing_points'] ;
             
                          
                
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

