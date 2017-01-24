<html>
<head>
  <title>Kick Off 2017 - Feedback</title>
  <link rel="stylesheet" href="styles.css">

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

?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawQ1);
      google.charts.setOnLoadCallback(drawQ2);
      google.charts.setOnLoadCallback(drawQ3);
      google.charts.setOnLoadCallback(drawQ4);
      google.charts.setOnLoadCallback(drawQ5);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawQ1() {
      	<?php
      	$sqlq1 = "SELECT q1, COUNT(*) as count FROM heroku_686d4942c2b2587.surveyresponse WHERE q1 IS NOT NULL GROUP BY q1 order by q1 asc";
		$resultq1 = mysqli_query($conn, $sqlq1);
		
		if (mysqli_num_rows($resultq1) > 0) {
    		// output data of each row
			$chartString = "var data = google.visualization.arrayToDataTable([['Rating', 'Votes', { role: 'style'}],";
			while($rowq1 = $resultq1->fetch_assoc()){
				$chartString .= "['" . $rowq1["q1"] . "'," . $rowq1["count"] . ", 'blue'],";
			}
			$chartString .= "]);";
			echo $chartString;
		}
      	?>

        // Set chart options
        var options = {'title':'Kick Off 2017 was informative and Im glad I attended',
                       'width':500,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('q1Chart'));
        chart.draw(data, options);
      }

      function drawQ2() {
      	<?php
      	$sqlq2 = "SELECT q2, COUNT(*) as count FROM heroku_686d4942c2b2587.surveyresponse WHERE q2 IS NOT NULL GROUP BY q2 order by q2 asc";
		$resultq2 = mysqli_query($conn, $sqlq2);
		
		if (mysqli_num_rows($resultq2) > 0) {
    		// output data of each row
			$chartString = "var data = google.visualization.arrayToDataTable([['Rating', 'Votes', { role: 'style'}],";
			while($rowq2 = $resultq2->fetch_assoc()){
				$chartString .= "['" . $rowq2["q2"] . "'," . $rowq2["count"] . ", 'blue'],";
			}
			$chartString .= "]);";
			echo $chartString;
		}
      	?>

        // Set chart options
        var options = {'title':'I feel informed about the highlights and challenges from 2016',
                       'width':500,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('q2Chart'));
        chart.draw(data, options);
      }

      function drawQ3() {
      	<?php
      	$sqlq3 = "SELECT q3, COUNT(*) as count FROM heroku_686d4942c2b2587.surveyresponse WHERE q3 IS NOT NULL GROUP BY q3 order by q3 asc";
		$resultq3 = mysqli_query($conn, $sqlq3);
		
		if (mysqli_num_rows($resultq3) > 0) {
    		// output data of each row
			$chartString = "var data = google.visualization.arrayToDataTable([['Rating', 'Votes', { role: 'style'}],";
			while($rowq3 = $resultq3->fetch_assoc()){
				$chartString .= "['" . $rowq3["q3"] . "'," . $rowq3["count"] . ", 'blue'],";
			}
			$chartString .= "]);";
			echo $chartString;
		}
      	?>

        // Set chart options
        var options = {'title':'I understand the HMRC Account Strategy and the part I can play',
                       'width':500,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('q3Chart'));
        chart.draw(data, options);
      }

      function drawQ4() {
      	<?php
      	$sqlq4 = "SELECT q4, COUNT(*) as count FROM heroku_686d4942c2b2587.surveyresponse WHERE q4 IS NOT NULL GROUP BY q4 order by q4 asc";
		$resultq4 = mysqli_query($conn, $sqlq4);
		
		if (mysqli_num_rows($resultq4) > 0) {
    		// output data of each row
			$chartString = "var data = google.visualization.arrayToDataTable([['Rating', 'Votes', { role: 'style'}],";
			while($rowq4 = $resultq4->fetch_assoc()){
				$chartString .= "['" . $rowq4["q4"] . "'," . $rowq4["count"] . ", 'blue'],";
			}
			$chartString .= "]);";
			echo $chartString;
		}
      	?>

        // Set chart options
        var options = {'title':'I am clear about how we are supporting our people',
                       'width':500,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('q4Chart'));
        chart.draw(data, options);
      }

      function drawQ5() {
      	<?php
      	$sqlq5 = "SELECT q5, COUNT(*) as count FROM heroku_686d4942c2b2587.surveyresponse WHERE q5 IS NOT NULL GROUP BY q5 order by q5 asc";
		$resultq5 = mysqli_query($conn, $sqlq5);
		
		if (mysqli_num_rows($resultq5) > 0) {
    		// output data of each row
			$chartString = "var data = google.visualization.arrayToDataTable([['Rating', 'Votes', { role: 'style'}],";
			while($rowq5 = $resultq5->fetch_assoc()){
				$chartString .= "['" . $rowq5["q5"] . "'," . $rowq5["count"] . ", 'blue'],";
			}
			$chartString .= "]);";
			echo $chartString;
		}
      	?>

        // Set chart options
        var options = {'title':'Im clear how we are going to drive greater integration with wider Capgemini',
                       'width':500,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('q5Chart'));
        chart.draw(data, options);
      }

    </script>



</head>

<body>  

<div class="results">

<div id="q1Chart"></div>&nbsp&nbsp<div id="q2Chart"></div>





<?php
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
  
</div>

</body>
</html>