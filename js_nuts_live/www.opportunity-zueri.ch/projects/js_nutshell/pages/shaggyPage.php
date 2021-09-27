<?php 
  require_once $_SERVER['HOME'].'/projects/js_nutshell/config.php';
  require_once 'header.inc.php';

?>


    <!-- Teaser -->
    <div class="teaser">
      <p>If / Else If / Else</p>
    </div>

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
      <h2>Heading 2 Code area stuff</h2>

      <p>
        Cheesecake lollipop jelly-o brownie powder marshmallow icing carrot cake
        chocolate bar. I love cake muffin tootsie roll bear claw jujubes
        marshmallow oat cake topping. Tart gummi bears sesame snaps I love
        pastry.
      </p>

            <div class="codeArea flex-container codeExample">
              <div class="col-6 code">
                <pre>
                  <code class = "language-css">
let a = 4;
let b = 17;

/*  statement string with math expression placeholders that
    will be replaced by their respective results */
let statement = `Twenty-one is ${a + b} and not ${2 * a + b}.`;

console.log(statement);  
                </code>
              </pre>
            </div>
              
            <div class="col-6 output">
              <h4>Output:</h4>
              <p>
                 <!-- OUTPUT HERE -->
              </p>
              <button class="btn btn-run" onclick="run(this)">Run</button>
              <button class="btn btn-run" onclick="reset(this)">Reset</button>
            </div>
          </div>

    <!-- Table of Content -->
    <div class="toc">
      <ul>
        <li><a href="#">link 1</a></li>
        <li><a href="#">link 2</a></li>
        <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
        <li><a href="#">link 5</a></li>
        <li><a href="#">link 6</a></li>
      </ul>
    </div>

    <?php include 'footer.inc.php'; ?>