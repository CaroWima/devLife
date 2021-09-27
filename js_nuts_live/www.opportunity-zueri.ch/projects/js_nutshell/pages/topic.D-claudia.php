<?php 
  array_key_exists('CONTEXT_DOCUMENT_ROOT', $_SERVER)?  : $_SERVER['CONTEXT_DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'];
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
  ?>

  
  <div class="w-75 mx-auto">
      <h1>CONDITIONAL STATEMENTS</h1>
            
    <!-- Teaser -->
    <div class="teaser">
      
      <p>Very often when you write code, you want to perform 
        different actions for different decisions<br>
        You can use conditional statements in your code to do this</p>
    </div>

    <!--Code Area -->
    <div class="codeArea">
      <div class="col-md-6 col-sm-12 code">
    <h2>IF ELSE Statement 1 </h2>
    <pre class="language-css">
      <code class="language-css">
        <!-- EXAMPLE 1 ----------------------------------------------------------->
&lt;script>
  
  const hour = new Date().getHours(); 
  let greeting;

  /*  Use IF ELSE to specify a block of code to be executed
        if a specified condition is true or false. */
 
  function ExerciseD(){
    console.log(hour);
    if (hour < 18) {
        greeting = "Good day";
      } else {
        greeting = "Good evening";   
      }
    document.getElementById("ExerciseD").innerHTML = greeting;    
    
    setInnerHTML("#result-clear ExerciseD");
  
&lt;/script>
      </code>
    </pre>
</div>
<div class="col-md-6 col-sm-12 box-output">
    <div>
    <div id="ExD"></div>
    <h5>If the hour is less than 18, create a "Good day" greeting, otherwise "Good evening"</h5>
  <button class="btn" onclick="ExerciseD()">Run</button>
  <button class="btn" onClick="window.location.reload();">Clear</button>
  <p id="ExerciseD" class="result-text">&nbsp;</p>
</div>
</div>
<div class="codeArea">
  <div class="col-md-6 col-sm-12 code"> 
    <h2>IF ELSE Statement 2 </h2>
    <pre class="language-css">
      <code class="language-css">
        <!-- EXAMPLE 2 ----------------------------------------------------------->
&lt;script>

function changeImage() {
  var image = document.getElementById("myImage");
  if (image.src.match("bulbon")) {
    image.src = "pic_bulboff.png";
  } else {
    image.src = "pic_bulbon.png";
  }
}
&lt;/script>
      </code>
    </pre>
  </div>
  <div>
  <div class="col-md-6 col-sm-12 code">
    <div id="changeImage">
    <h5>Click the light bulb to turn on/off the light.</h5>
    <div>
    <h2 id="outputT">Output:</h2>
      <p id="output">
  <img id="myImage" onclick="changeImage()" src="/projects/js_nutshell/images/pic_bulboff.png" width="100" height="180">
  </p>
</div>
</div>

<br><br>

<!--<div class="col-6-md col-12-sm output">
                <h4>Output:</h4>
              <input id="btn" type="button" class="btn btn-run" value="Run" onclick="totalDays()">
              <input type="button" value="Reset" class="btn btn-run" onclick="reset()">
              <div id="output"></div>            </div>
            </div>
            <div>
-->
 <div class="toc mb-5">

    <h3>More Examples</h3>
  <a href="topic.D-jerome.php"> If Else Examples- Jerome</a>
  <br><br>

  <h3>More Info</h3>

      <a href=""></a>
      <a href="https://www.w3schools.com/js/js_if_else.asp" target="_blank" >If Else w3 school</a>
      
    </div>
    
  <script src="../js/topic.D-claudia.js"></script>
  
  
  
  <?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>