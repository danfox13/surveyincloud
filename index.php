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
      <b>Please enter your name or Net ID:</b> <i>(Leave blank if you wish to remain anonymous)</i><input placeholder="Name or Net ID" id="name" type="text" tabindex="1" autofocus>
    </fieldset>
    <fieldset>
      <b>Which event did you attend?</b><input placeholder="Event" id="event" type="text" required>
    </fieldset>
    <br/>
    <fieldset>
      <b>Please take a moment to rate the following statements</b> <i>(1 is strongly disagree; 5 is strongly agree)</i>
      <br/>
      Kick Off 2017 was informative and I'm glad I attended?
      <div class="radio">
        <input type="radio" name="q1" value="1"> 1&nbsp&nbsp
        <input type="radio" name="q1" value="2"> 2&nbsp&nbsp
        <input type="radio" name="q1" value="3"> 3&nbsp&nbsp
        <input type="radio" name="q1" value="4"> 4&nbsp&nbsp
        <input type="radio" name="q1" value="5"> 5&nbsp&nbsp
      </div>
    </fieldset>
    <fieldset>
      I feel informed about the highlights and challenges from 2016?
      <div class="radio">
        <input type="radio" name="q2" value="1"> 1&nbsp&nbsp
        <input type="radio" name="q2" value="2"> 2&nbsp&nbsp
        <input type="radio" name="q2" value="3"> 3&nbsp&nbsp
        <input type="radio" name="q2" value="4"> 4&nbsp&nbsp
        <input type="radio" name="q2" value="5"> 5&nbsp&nbsp
      </div>
    </fieldset>

    <fieldset>
      I understand the HMRC Account Strategy and the part I can play?
      <div class="radio">
        <input type="radio" name="q3" value="1"> 1&nbsp&nbsp
        <input type="radio" name="q3" value="2"> 2&nbsp&nbsp
        <input type="radio" name="q3" value="3"> 3&nbsp&nbsp
        <input type="radio" name="q3" value="4"> 4&nbsp&nbsp
        <input type="radio" name="q3" value="5"> 5&nbsp&nbsp
      </div>
    </fieldset>
    <fieldset>
      I am clear about how we are supporting our people?
      <div class="radio">
        <input type="radio" name="q4" value="1"> 1&nbsp&nbsp
        <input type="radio" name="q4" value="2"> 2&nbsp&nbsp
        <input type="radio" name="q4" value="3"> 3&nbsp&nbsp
        <input type="radio" name="q4" value="4"> 4&nbsp&nbsp
        <input type="radio" name="q4" value="5"> 5&nbsp&nbsp
      </div>
    </fieldset>
    <fieldset>
      I understand how and why we are trying to drive integration across the wider Capgemini?
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
    <b>Are the any other questions and/or comment you would like to ask or know more about?</b>
      <textarea id="comments" placeholder="Please enter you comments or questions..."></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

</body>
</html>