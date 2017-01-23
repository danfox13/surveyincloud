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
$q1Comment = $_POST["q1Comment"];
$q2Comment = $_POST["q2Comment"];
$q3Comment = $_POST["q3Comment"];
$q4Comment = $_POST["q4Comment"];
$q5Comment = $_POST["q5Comment"];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    header('Location: error.php');
} 

// $sql = "INSERT INTO heroku_686d4942c2b2587.surveyresponse (name, event, q1, q1Comment, q2, q2Comment, q3, q3Comment, q4, q4Comment, q5, q5Comment, comments)
// VALUES ('${name}', '${event}', '${q1}', '${q1Comment}', '${q2}', '${q2Comment}', '${q3}','${q3Comment}', '${q4}', '${q4Comment}', '${q5}', '${q5Comment}', '${comments}')";

// if ($conn->query($sql) === TRUE) {
//     header('Location: complete.php');
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//     //header('Location: error.php');
// }

$stmt = $conn->prepare('INSERT INTO heroku_686d4942c2b2587.surveyresponse (name, event, q1, q1Comment, q2, q2Comment, q3, q3Comment, q4, q4Comment, q5, q5Comment, comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');


$row = $stmt->bind_param("s,s,s,s,s,s,s,s,s,s,s,s,s", $name, $event, $q1, $q1Comment, $q2, $q2Comment, $q3, $q3Comment, $q4, $q4Comment, $q5, $q5Comment, $comments);

$stmt->execute();

if ($conn->query($sql) === TRUE) {
	$conn->close();
    header('Location: complete.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
    //header('Location: error.php');
}



?>