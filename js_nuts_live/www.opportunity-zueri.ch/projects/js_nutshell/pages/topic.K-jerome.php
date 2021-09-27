<?php  
  array_key_exists('CONTEXT_DOCUMENT_ROOT', $_SERVER)?  : $_SERVER['CONTEXT_DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'];
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';

  // Used to add related links to the table content 
  $rel_links = [
    'topic.K-claudia.php',
  ];

?>

<div class="container">
  <div class="teaser">
    <!-- YOUR SUBJECT TITLE -->
    <h1>Switch</h1> 

    <!-- Teaser -->
    <p>A switch statement is a control statement that executes a set of logic based on the result of a comparison between a controlling expression and the labels specified in the switch block.</p>
  </div>
      
      <!-- article -->
  <div class="article">
    <h2>Switch Example</h2>
    <p>
    Aa an example i created a function which determs how many days a month has. (including leap years)
    </p>
  </div>
  <h3>Wieviele Tage hat dieser Monat?</h3>

  <h4>Wähle den Monat</h4>
      <select style="width: 280px" id="Month" name="Month">
          <option selected="">Please Select</option>
          <option value=1>January</option>
          <option value=2>February</option>
          <option value=3>March</option>
          <option value=4>April</option>
          <option value=5>May</option>
          <option value=6>June</option>
          <option value=7>July</option>
          <option value=8>August</option>
          <option value=9>September</option>
          <option value=10>October</option>
          <option value=11>November</option>
          <option value=12>December</option>
      </select>

  <div>
    <br>
      <h4>Wähle das Jahr</h4>
      <input id="Year" type="number" maxlength="4"/>
  </div>
  
      <!-- Code Area -->
      
  <div class=" row codeArea codeExample">
    <div class="col-md-6 col-sm-12 code">
    
      <!-- do not indent your example code!  -->
      <pre>
        <code class = "language-js">
function totalDays() {

var month = document.getElementById('Month').value
var year = document.getElementById('Year').value
var dayCount = 12;

switch (month) { 
  
case "1": case "3": case "5": case "7": case "8": case "10": case "12": 
  dayCount = 31;
  break;

case "4": case "6": case "9": case "11": 
  dayCount = 30;
  break;

case "2": 	
  if (year % 4 == 0) 
    dayCount = 29;
    else dayCount = 28;
  break;
default:
  dayCount = "Error"; 	
  console.log(month);
  break;
}

document.getElementById('output').innerHTML = 
"Der ausgewählte Monat hat "+dayCount+" Tage";
} 
        </code>
      </pre>
    </div>
    
    <div class="col-md-6 col-sm-12 box-output">
      <div>
        
        <button class="btn btn-run" onclick="totalDays()">Run</button>
      
        <button class="btn btn-run" onclick="reset()">Reset</button>
        
      </div>
     
      <h2 id="outputT">Output:</h2>
      <p id="output"></p>
    </div>
  </div>
  
  <h3>More Examples</h3>
<a href="./topic.K-claudia.php">Claudia - Switch</a><br>
<p style="height:1px;"></p-->

<h3>More Info</h3>
<a href="https://www.w3schools.com/js/js_switch.asp" target="_blank">w3schools</a><br>
<p style="height:1px;"></p>

        
      
</div>
<script type="text/javascript" src="/projects/js_nutshell/js/topic.jerome.js"></script>
<?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>
