<?php  
  array_key_exists('CONTEXT_DOCUMENT_ROOT', $_SERVER)?  : $_SERVER['CONTEXT_DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'];
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
  ?>


  
  <div class="w-75 mx-auto">

      <h1>SWITCH STATEMENT</h1>

     
    <!-- Teaser -->
    <div class="teaser">
      <p>The switch statement executes a block of code depending on different cases.</p>
 
    </div>

   
    <!--Code Area -->
    <h3>Example 1: Week Day Number to specify Week Day Name</h3>
      <div class="codeArea">
      <div class="col-6-md col-12-sm output">
    <pre class="language-css">
      <code class="language-css">
        <!-- EXAMPLE 1 ----------------------------------------------------------->
&lt
  
function myFunction() {
    var day
    switch (new Date().getDay()) {
      case 0:
        day = "Sunday";
        break;
      case 1:
        day = "Monday";
        break;
      case 2:
        day = "Tuesday";
        break;
      case 3:
        day = "Wednesday";
        break;
      case 4:
        day = "Thursday";
        break;
      case 5:
        day = "Friday";
        break;
      case  6:
        day = "Saturday";
        break;
      default:
        day = "Unknown Day";
    }
    document.getElementById("myfunction").innerHTML = "Today is " + day;
  }
&lt;

      </code>
    </pre>
    </div>
  <div class="col-6-md col-12-sm output">
  <h5>Click the button to display a message based on what day it is.</h5>
    <button class="btn" onclick="myFunction();">Run</button>  
    <button class="btn" onClick="window.location.reload();">Clear</button>
    <p id="result-text-1" class="result-text">&nbsp;</p>
    <div id="output"></div> 

</div>           

 <!-- EXAMPLE 2 ----------------------------------------------------------->
  <h3>Example 2: Different cases uses the same code</h3>
  
  <pre class="language-css">
    <code class="language-css">
&lt

  function myFunction() {
  var text;
  switch (new Date().getDay()) {
    case 1:
    case 2:
    case 3:
    default:
      text = "Looking forward to the Weekend";
      break;
    case 4:
    case 5:
      text = "Soon it is Weekend";
      break;
    case 0:
    case 6:
      text = "It is Weekend";
  }
  document.getElementById("myFunction").innerHTML = text;
}
&lt;
    </code>
  </pre>

<div class="col-6-md col-12-sm output">
  <div>
  <h5>Click the button to display a message.</h5>
  <button class="btn" onclick="Weekend();">Run</button>
  <button class="btn" onClick="window.location.reload();">Clear</button>
  <p id="result-text-2" class="result-text">&nbsp;</p>
  <div id="output"></div> 
</div>

    <div class="toc">

    <h3>More Examples</h3>
  <a href="topic.K-jerome.php">Switch Cases - Jerome</a>

    <br><br>
    <h3>More Info</h3>
 
  <a href="https://www.javascripttutorial.net/javascript-switch-case/", _blank> Switch Statements JSTutorial</a>
  
    </div>
     </div>
     
     <script src="../js/topic.K-claudia.js"></script>

    
     <?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>


