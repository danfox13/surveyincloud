<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);


$name = $_POST["name"];
$event = $_POST["event"];
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];
$comments = $_POST["comments"];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    header('Location: error.php');
} 

$sql = "INSERT INTO heroku_686d4942c2b2587.surveyresponse (name, event, q1, q2, q3, q4, q5, comments)
VALUES ('${name}', '${event}', '${q1}', '${q2}', '${q3}', '${q4}', '${q5}', '${comments}')";

if ($conn->query($sql) === TRUE) {
    header('Location: complete.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //header('Location: error.php');
}

$conn->close();


?>