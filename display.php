// Fetching contacts to display into list
<?php  
	 $link = mysqli_connect("localhost", "root", "", "weusthem");  
	 $output = array();  
	 $query = "SELECT * FROM contacts";  
	 $result = mysqli_query($link, $query);  
	 if(mysqli_num_rows($result) > 0) {  
	      while($row = mysqli_fetch_array($result)) {  
	           $output[] = $row;  
	      }  
	      echo json_encode($output);  
	 }  
 ?>  