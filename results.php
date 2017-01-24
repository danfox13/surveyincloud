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



$sql = "SELECT * FROM heroku_686d4942c2b2587.surveyresponse;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

	echo "name, event, q1, q1Comment, q2, q2Comment, q3, q3Comment, q4, q4Comment, q5, q5Comment, comments <br/>"

    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
       echo $row["name"] + "," +  $row["event"] + "," +  $row["q1"] + "," +  $row["q1Comment"] + "," +  $row["q2"] + "," +  $row["q2Comment"] + "," +  $row["q3"] + "," +  $row["q3Comment"] + "," +  $row["q4"] + "," +  $row["q4Comment"] + "," +  $row["q5"] + "," +  $row["q5Comment"] + "," +  $row["comments"] + "<br/>";  
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>