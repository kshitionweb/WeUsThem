// Inserting contacts into table
<?php
	
	$link = mysqli_connect("localhost", "root", "", "weusthem");  
	//$sql = "INSERT INTO contacts (first_name, last_name, email, phone) VALUES ('Peter', 'Parker', 'peterparker@mail.com', '+91798372646')";

	$savedata = file_get_contents("php://input");
    $request = json_decode($savedata);

    $first_name = $request->first_name;
    $last_name = $request->last_name;
    $email = $request->email;
    $phone = $request->phone;

	$query = "INSERT INTO contacts(first_name, last_name,email, phone) VALUES ('$first_name', '$last_name', '$email', '$phone')"; 
    
    if(mysqli_query($link, $query)) {
        echo "Contact Saved Successfully";
    }
    else {
        echo "Failed";
    }
}

?>