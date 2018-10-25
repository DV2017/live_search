<?php
//fetch.php
//query data from database and send it to user browser
include 'db.php';

//$output = '';

if(isset($_POST["query"])){

 	$search = mysqli_real_escape_string($conn, $_POST["query"]);
 	
 	$query = "
 			SELECT name FROM birds 
  			WHERE name LIKE '%".$search."%'
 			";

	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result) > 0){
 		$output .= '
  			<div class="table-responsive">
   			<table class="table table bordered">
    		<tr>
     		<th>name</th>
    		</tr>
 			';
 
 		while($row = mysqli_fetch_array($result)) {
  			$output .= '
   			<tr>
    		<td>'.$row["name"].'</td>
   			</tr>
  			';
 		}
 		echo $output;
	}else
	{
 		echo 'Data Not Found';
	}
} 

?>