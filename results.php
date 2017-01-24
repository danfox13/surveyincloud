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

	echo '<table border="1"><tr><th>Net ID</th><th>Event</th><th>Q1</th><th>Q1 Comment</th><th>Q2</th><th>Q2 Comment</th><th>Q3</th><th>Q3 Comment</th><th>Q4</th><th>Q4 Comment</th><th>Q5</th><th>Q5 Comment</th><th>Comments</th></tr>';


	while($row = $result->fetch_assoc()){

		echo "<tr><td>";
		echo $row["name"];
		echo "</td><td>";
		echo $row["event"]; 
		echo "</td><td>"; 
		echo $row["q1"];
		echo "</td><td>";
		echo $row["q1Comment"];
		echo "</td><td>"; 
		echo $row["q2"];
		echo "</td><td>"; 
		echo $row["q2Comment"];
		echo "</td><td>"; 
		echo $row["q3"];
		echo "</td><td>";
		echo $row["q3Comment"];
		echo "</td><td>";
		echo $row["q4"];
		echo "</td><td>";
		echo $row["q4Comment"];
		echo "</td><td>";
		echo $row["q5"];
		echo "</td><td>";
		echo $row["q5Comment"];
		echo "</td><td>"; 
		echo $row["comments"];
		echo "</td></tr>"; 

	}

	echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>