<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);


echo $_POST["name"];
echo $_POST["event"];
echo $_POST["q1"];
echo $_POST["q2"];
echo $_POST["q3"];
echo $_POST["q4"];
echo $_POST["q5"];
echo $_POST["comments"];
echo "<br/>";
echo $url["user"];
?>