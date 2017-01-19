<html>
<head>
  <title>Kick Off 2017 - Feedback</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>  

<div class="container">  
  <form id="contact" action="submit.php" method="post">
    <h3>Kick Off 2017 Branding</h3>
    <br/>
    <fieldset>
      <b>Please enter your Net ID:</b> <i>(Leave blank if you wish to remain anonymous)</i><input placeholder="Net ID" name="name" type="text" tabindex="1" autofocus>
    </fieldset>
    <fieldset>
      <b>Which event did you attend?</b><br/>
      <select id="event" name="event" placeholder="Please select your event" required="true">
        <!-- <option value="">Please select your event</option> -->
        <?php
          $date=date('Y-m-d H:i:s');
          if($date>'2017-01-19 20:40:00'){
            echo '<option value="testEvent">Test - 19/01/17 - 8:40pm</option>';
          }
          if($date>'2017-01-19 20:50:00'){
            echo '<option value="testEvent2">Test - 19/01/17 - 8:50pm</option>';
          }
          if($date>'2017-01-24 09:00:00'){
            echo '<option value="telford20170124-9am">Telford - 24/01/17 - 9:00am</option>';
          }
          if($date>'2017-01-24 13:00:00'){
            echo '<option value="telford20170124-1pm">Telford - 24/01/17 - 1:00pm</option>';
          }
          if($date>'2017-01-24 15:30:00'){
            echo '<option value="telford20170124-3-30pm">Telford - 24/01/17 - 3:30pm</option>';
          }
          if($date>'2017-01-25 09:00:00'){
            echo '<option value="telford20170125-9am">Telford - 25/01/17 - 9:00am</option>';
          }
          if($date>'2017-01-25 13:00:00'){
            echo '<option value="telford20170125-1pm">Telford - 25/01/17 - 1:00pm</option>';
          }
          if($date>'2017-01-25 15:30:00'){
            echo '<option value="telford20170125-3-30pm">Telford - 25/01/17 - 3:30pm</option>';
          }
          if($date>'2017-01-26 09:00:00'){
            echo '<option value="telford20170126-9am">Telford - 26/01/17 - 9:00am</option>';
          }
          if($date>'2017-01-26 13:00:00'){
            echo '<option value="telford20170126-1pm">Telford - 26/01/17 - 1:00pm</option>';
          }
          if($date>'2017-01-26 15:30:00'){
            echo '<option value="telford20170126-3-30pm">Telford - 26/01/17 - 3:30pm</option>';
          }
          if($date>'2017-01-30 13:00:00'){
            echo '<option value="worthing20170130-1pm">Worthing - 30/01/17 - 1:00pm</option>';
          }
          if($date>'2017-01-30 15:30:00'){
            echo '<option value="worthing20170130-3-30pm">Worthing - 30/01/17 - 3:30pm</option>';
          }
          if($date>'2017-01-31 09:30:00'){
            echo '<option value="london20170131-9-30am">London - 31/01/17 - 9:30am</option>';
          }
          if($date>'2017-01-31 15:30:00'){
            echo '<option value="southend20170131-3-30pm">Southend - 31/01/17 - 3:30pm</option>';
          }
          if($date>'2017-02-01 10:00:00'){
            echo '<option value="aston20170201-10am">Aston - 01/02/17 - 10:00am</option>';
          }
          if($date>'2017-02-01 12:30:00'){
            echo '<option value="aston20170201-12-30am">Aston - 01/02/17 - 12:30pm</option>';
          }
          if($date>'2017-02-02 10:00:00'){
            echo '<option value="newcastle20170202-10am">Newcastle - 02/02/17 - 10:00am</option>';
          }        
        ?>
      </select>
    </fieldset>
    <br/>
    <fieldset>
      <b>Please take a moment to rate the following statements</b> <i>(1 is strongly disagree; 5 is strongly agree)</i>
      <br/>
      Kick Off 2017 was informative and I'm glad I attended
      <div class="radio">
        <input type="radio" name="q1" value="1"> 1&nbsp&nbsp
        <input type="radio" name="q1" value="2"> 2&nbsp&nbsp
        <input type="radio" name="q1" value="3"> 3&nbsp&nbsp
        <input type="radio" name="q1" value="4"> 4&nbsp&nbsp
        <input type="radio" name="q1" value="5"> 5&nbsp&nbsp
      </div>
    </fieldset>
    <fieldset>
      I feel informed about the highlights and challenges from 2016
      <div class="radio">
        <input type="radio" name="q2" value="1"> 1&nbsp&nbsp
        <input type="radio" name="q2" value="2"> 2&nbsp&nbsp
        <input type="radio" name="q2" value="3"> 3&nbsp&nbsp
        <input type="radio" name="q2" value="4"> 4&nbsp&nbsp
        <input type="radio" name="q2" value="5"> 5&nbsp&nbsp
      </div>
    </fieldset>

    <fieldset>
      I understand the HMRC Account Strategy and the part I can play
      <div class="radio">
        <input type="radio" name="q3" value="1"> 1&nbsp&nbsp
        <input type="radio" name="q3" value="2"> 2&nbsp&nbsp
        <input type="radio" name="q3" value="3"> 3&nbsp&nbsp
        <input type="radio" name="q3" value="4"> 4&nbsp&nbsp
        <input type="radio" name="q3" value="5"> 5&nbsp&nbsp
      </div>
    </fieldset>
    <fieldset>
      I am clear about how we are supporting our people
      <div class="radio">
        <input type="radio" name="q4" value="1"> 1&nbsp&nbsp
        <input type="radio" name="q4" value="2"> 2&nbsp&nbsp
        <input type="radio" name="q4" value="3"> 3&nbsp&nbsp
        <input type="radio" name="q4" value="4"> 4&nbsp&nbsp
        <input type="radio" name="q4" value="5"> 5&nbsp&nbsp
      </div>
    </fieldset>
    <fieldset>
      I understand how and why we are trying to drive integration across the wider Capgemini
      <div class="radio">
        <input type="radio" name="q5" value="1"> 1&nbsp&nbsp
        <input type="radio" name="q5" value="2"> 2&nbsp&nbsp
        <input type="radio" name="q5" value="3"> 3&nbsp&nbsp
        <input type="radio" name="q5" value="4"> 4&nbsp&nbsp
        <input type="radio" name="q5" value="5"> 5&nbsp&nbsp
      </div>
    </fieldset>
    <fieldset>
    <br/>
    <b>Are there any other questions and/or comments you would like to ask or know more about?</b>
      <textarea name="comments" placeholder="Please enter your comments or questions..."></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

</body>
</html>