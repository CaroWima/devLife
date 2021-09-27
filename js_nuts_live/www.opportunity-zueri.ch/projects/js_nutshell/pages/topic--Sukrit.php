<?php  
  array_key_exists('CONTEXT_DOCUMENT_ROOT', $_SERVER)?  : $_SERVER['CONTEXT_DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'];
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';;

  // Used to add related links to the table content 
  $rel_links = [
    'topic.A.name.php',
    'topic.A.name.php'
  ];

?>

<div class="container">
  <div class="teaser">
    <!-- YOUR SUBJECT TITLE -->
    <h1>Operator</h1> 

    <!-- Teaser -->
    <p>I use the Operator to built a simple Calculator</p>
  </div>
      
      <!-- article -->
  <div class="article">
    <h2>A simple calculator</h2>
    <p>
    The num1 and num2 variabel are those two number that you add in.
    </p>
    <h3>Note</h3>
    <p>
    1. The first version of the code is link with a HTML tags <br>
    3. The second code will only print in the console
    </p>
  </div>
      <!-- Code Area -->
  <div class=" row codeArea codeExample">
    <div class="col-md-6 col-sm-12 code">
      <!-- do not indent your example code!  -->
      <pre>
        <code class = "language-js">
function Math(){
  num1 = document.getElementById("firstNumber").value;
  num2 = document.getElementById("secondNumber").value;
  document.getElementById("result").innerHTML = +num1 + +num2;
}
let x = 5;
let y = 2;
let z = x + y;
console.log(z);
        </code>
      </pre>
    </div>
    
    <div class="col-md-6 col-sm-12 box-output">
     
      <h2 id="outputT">Output:<div id="result"></div></h2>
      <p id="output"><form>
      First Number : &nbsp;&nbsp;&nbsp; <input type="number" id="firstNumber"/><br>
      Second Number : <input type="number" id="secondNumber"/><br> <br>
      <input class="btn" type="button" onclick="MathAdd()" value="Add"/>
      <input class="btn" type="button" onclick="MathSub()" value="Subtract"/>
      <input class="btn" type="button" onclick="MathMult()" value="Multiply"/>
      <input class="btn" type="button" onclick="MathDiv()" value="Divide"/>
      <input class="btn" type="button" onclick="MathModulo()" value="Modulo"/>
    </form>
        
      </p>
    </div>
  </div>
  
        
      
</div>
<script src="../js/functionSukrit.js"></script>
<?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>
