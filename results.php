<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "SELECT * FROM heroku_686d4942c2b2587.surveyresponse";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

	echo "name, event, q1, q1Comment, q2, q2Comment, q3, q3Comment, q4, q4Comment, q5, q5Comment, comments <br/>";


	while($row = $result->fetch_assoc()){

		echo $row["name"];
		echo ", ";
		echo $row["event"]; 
		echo ", "; 
		echo $row["q1"];
		echo ", ";
		echo $row["q1Comment"];
		echo ", "; 
		echo $row["q2"];
		echo ", "; 
		echo $row["q2Comment"];
		echo ", "; 
		echo $row["q3"];
		echo ", ";
		echo $row["q3Comment"];
		echo ", ";
		echo $row["q4"];
		echo ", ";
		echo $row["q4Comment"];
		echo ", ";
		echo $row["q5"];
		echo ", ";
		echo $row["q5Comment"];
		echo ", "; 
		echo $row["comments"];
		echo "<br/>"; 

	}
} else {
    echo "0 results";
}

mysqli_close($conn);
?>