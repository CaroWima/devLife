<?php 
  array_key_exists('CONTEXT_DOCUMENT_ROOT', $_SERVER)?  : $_SERVER['CONTEXT_DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'];
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';

  // Used to add related links to the table content 
  $rel_links = [
    'topic.D-claudia.php',
  ];

?>

<div class="container">
  <div class="teaser">
    <!-- YOUR SUBJECT TITLE -->
    <h1>If / Else If / Else</h1> 

    <!-- Teaser -->
    <p> The if / else if / else statements is probably one of the most frequently used statements in JavaScript.
        The if / else if / else statement executes a statement or block of code if their conditions are satisfied. 
        The following is a simple example of these statements:</p>
  </div>
      
      <!-- article -->
  <div class="article">
    <h2>Let's talk about weight, baby!</h2>
    <p>
        A good Example for if / else if / else Conditions is the BMI.
        Once the BMI is calculated you can easily set up the condition which will let the customer know
        if they have a normal weight or if they're overweighted or underweighted.
    </p>
  </div>
  <div>
        <h3>Gewicht (in kg)</h3>
        <input id="Gewicht" type="number" maxlength="3"/>
        </select>
    </div>
    <br>
    <div>
        <h3>Grösse (in m)</h3>
        <input id="Grösse" type="number" maxlength="3"/>
    </div>
  
      <!-- Code Area -->
      
  <div class=" row codeArea codeExample">
    <div class="col-md-6 col-sm-12 code">
    
      <!-- do not indent your example code!  -->
      <pre>
        <code class = "language-js">
function BMI() {
var gewicht = document.getElementById('Gewicht').value
var grösse = document.getElementById('Grösse').value

let bmi = gewicht / (grösse*grösse)

if (bmi < 18.5){
document.getElementById('outputbmi').innerHTML = "Sie sind Untergewichtig!";
}
else if (bmi >= 18.5 && bmi < 24.9) {
document.getElementById('outputbmi').innerHTML = "Sie haben ein Normalgewicht";
}
else {
document.getElementById('outputbmi').innerHTML = "Sie haben Übergewicht!";
	}
}

function resetbmi() {
	document.getElementById('outputbmi').innerHTML = "";
}
        </code>
      </pre>
    </div>
    
    <div class="col-md-6 col-sm-12 box-output">
      <div>
        
        <button class="btn btn-run" onclick="BMI()">Run</button>
      
        <button class="btn btn-run" onclick="resetbmi()">Reset</button>
        
      </div>
     
      <h2 id="output">Output:</h2>
      <p id="output"></p>
    </div>
    <div>

<h3>More Examples</h3>
<a href="./topic.D-claudia.php">Claudia - If / Elseif / Else</a><br>
<p style="height:1px;"></p-->

<h3>More Info</h3>
<a href="https://www.w3schools.com/js/js_if_else.asp" target="_blank">w3schools</a><br>
<p style="height:1px;"></p>

</div>
  </div>
  
        
      
</div>
<script type="text/javascript" src="/projects/js_nutshell/js/topic.jerome.js"></script>
<?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>
