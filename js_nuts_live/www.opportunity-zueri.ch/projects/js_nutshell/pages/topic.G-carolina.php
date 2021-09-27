<?php  
  array_key_exists('CONTEXT_DOCUMENT_ROOT', $_SERVER)?  : $_SERVER['CONTEXT_DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'];
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';

  // Used to add related links to the table content 
  $rel_links = [
    'topic.A.name.php',
    'topic.A.name.php'
  ];

?>

<div class="container">
  <div class="teaser">
    <!-- YOUR SUBJECT TITLE -->
    <h1>For Loops</h1> 

    <!-- Teaser -->
    <p>
      Loops are used to do something repeatedly. For instance lets say we get a list of 50 blog posts from the database and we want to print their titles on our page. Instead of writing the code 50 times, we would instead use a loop to make this happen.
    </p>
  </div>
      
      <!-- article -->
  <div class="article">
    <p>
      Let's run through an amount of numbers:
    </p>
  </div>
  
      <!-- Code Area -->
      
  <!-- EXAMPLE ONE -->
  <h3>Example 1:</h3>
  <div class=" row codeArea codeExample">
    <div class="col-md-6 col-sm-12 code">
      <!-- do not indent your example code!  -->
      <pre>
        <code class = "language-css">
/* Run function*/
function runForLoop() {
let output = "";
for (let i = 0; i < 3; i++) {
    //console.log(i);
    output += i + "<br>";
}
document.getElementById("output1").innerHTML = output;
} 
        </code>
      </pre>
    </div>
    
    <div class="col-md-6 col-sm-12 box-output">
      <div>
        
        <button class="btn btn-run" onclick="runForLoop()">Run</button>
      
        <button class="btn btn-run" onclick="reset(1)">Reset</button>
        
      </div>
     
      <h2 id="outputT">Output:</h2>
      <p id="output1"></p>
    </div>
  </div>
  
       <!-- article -->
  <div class="article">
  <h2>For loops & Arrays</h2>
  <p>
      The "for loop" can also be used for Arrays: Let's loop through an Array with it
  </p>
  </div>
  
      <!-- Code Area -->
      
  <!-- EXAMPLE TWO -->
  <h3>Example 2:</h3>
  <div class=" row codeArea codeExample">
    <div class="col-md-6 col-sm-12 code">
      <!-- do not indent your example code!  -->
      <pre>
        <code class = "language-css">
function runArrayForLoop() {
var myArr = ["Cats", "Dogs", "Birds", "Insects", "Snakes"];
let output = "";

for (let i = 0; i < myArr.length; i++) {
    myArr[i];
    //console.log(myArr);
    output += i + "<br>";
}

document.getElementById("output2").innerHTML = output;
}
        </code>
      </pre>
    </div>
    
    <div class="col-md-6 col-sm-12 box-output">
      <div>
        
        <button class="btn btn-run" onclick="runArrayForLoop()">Run</button>
      
        <button class="btn btn-run" onclick="reset(2)">Reset</button>
        
      </div>
     
      <h2 id="outputT">Output:</h2>
      <p id="output2"></p>
    </div>
  </div>
  
        
      
</div>
<script src="../js/topic.G-carolina.js"></script>
<?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>
