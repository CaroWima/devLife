<?php 
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';

?>


<div class="container">

    <!-- article -->
    <div class="article">
      <h2>If / Else If / Else</h2>

      <p>
        The if / else if / else statements is probably one of the most frequently used statements in JavaScript.
        The if / else if / else statement executes a statement or block of code if their conditions are satisfied. 
        The following is a simple example of these statements:
      </p>

      <h3>Let's talk about weight, baby!</h3>

      <p>
        A good Example for if / else if / else Conditions is the BMI.
        Once the BMI is calculated you can easily set up the condition which will let the customer know
        if they have a normal weight or if they're overweighted or underweighted.
      </p>
    </div>

    <!-- Code Area -->
    <div class="codeArea">
    <div>
        <h4>Gewicht (in kg)</h3>
        <input id="Gewicht" type="number" maxlength="3"/>
        </select>
    </div>
    <br>
    <div>
        <h4>Grösse (in m)</h3>
        <input id="Grösse" type="number" maxlength="3"/>
    </div>

            <div class="codeArea flex-container codeExample">
              <div class="col-6-md col-12-sm code">
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
              
            <div class="col-6-md col-12-sm .ml-4 output">
              <input id="btn" type="button" class="btn btn-run" value="Run" onclick="BMI()">
              <input type="button" value="Reset" class="btn btn-run" onclick="resetbmi()">
              <h4>Output:</h4>
              <div id="outputbmi"></div>
            </div>
          </div>

    </div>
</div>
    <script type="text/javascript" src="/projects/js_nutshell/js/topic.jerome.js"></script>
    <?php include $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>