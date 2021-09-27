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
    <h1>Js Object</h1> 

    <!-- Teaser -->
    <p>Another method to store data besides using simple variables or arrays.</p>
  </div>
      
      <!-- article -->
  <div class="article">
    <h2>Object</h2>
    <p>
    In object it's possible to store more then only data values in it. For now we will only look on how
    we can use them to store data values. If you like to learn more about objects in Js check out 
    <a href="https://www.w3schools.com/js/js_objects.asp">w3schools</a> and/or 
    <a href="https://developer.mozilla.org/de/docs/Web/JavaScript/Reference/Global_Objects/Object">developer.mozilla.org</a>
    </p>
    
    

    <h3>Object Example 1</h3>
    <p>
    Creating a Dataobject and using it to output the values:
    </p>
  </div>
  
      <!-- Code Area -->
      

  <div class=" row codeArea codeExample">
    <div class="col-md-6 col-sm-12 code">
      <!-- do not indent your example code!  -->
      <pre>
        <code class = " language-js">
/* Creating a dataobject */
let obj = {
"name":"Hans",
"lastname": "Muster",
"email":"hans.muster@mail.me"
};

/* Creating an array of all keys in the dataobject */
console.log(Object.keys(obj));

/* Creating an array of all values in the dataobject */
console.log(Object.values(obj));

/* Creating an array of arrays with key and value */
console.log(Object.entries(obj));

/* Output single values */
console.log(obj.name);
console.log(obj.lastname);
console.log(obj.email);


let text = "";

text += "Name: " + obj.name + "&lt;br&gt;";
text += "Lastame: " + obj.lastname + "&lt;br&gt;";
text += "Email: " + obj.email + "&lt;br&gt;";


/* Run function */
function run() {  /* Creating an array person and storing some data in it */
let number = 13;

/* Run function */
function run() {
    try {
        if(number&lt;100) throw "x is smaller then 100";
    } catch(error) {
        document.getElementbyId('output').innerHTML = output;
    }
        </code>
      </pre>
    </div>
    
    <div class="col-md-6 col-sm-12 box-output">
      <div>
        <button class="btn btn-run" name="run1" onclick="runScript(5, this);">Run Script</button>
        <button class="btn btn-run" name="reset1" onclick="reset(5, this);">Reset Script</button>
      </div>
     
      <h2 id="outputT">Output:</h2>
      <p id="output"></p>
    </div>
  </div>

  <br>
  <br>
  <br>


  <div class="article">
    <h3>Object Example 2</h3>
    <p>
    Starting with an empty dataobject and adding new keys and values to it.
    </p>
  </div>
  
      <!-- Code Area -->
      

  <div class=" row codeArea codeExample">
    <div class="col-md-6 col-sm-12 code">
      <!-- do not indent your example code!  -->
      <pre>
        <code class = " language-js">
        /* Creating an empty dataobject */
let obj = {};

/* adding new keys and values */
obj.name = "Hanae";
obj.lastname = "Satō"
obj.mail = "hs@mail.jp"

let text = "";

text += "Name: " + obj.name + "&lt;br&gt;";
text += "Lastame: " + obj.lastname + "&lt;br&gt;";
text += "Email: " + obj.email + "&lt;br&gt;";


/* Run function */
function run() {  
document.getElementbyId('output').innerHTML = text;
}
        </code>
      </pre>
    </div>
    
    <div class="col-md-6 col-sm-12 box-output">
      <div>
        <button class="btn btn-run" name="run1" onclick="runScript(6, this);">Run Script</button>
        <button class="btn btn-run" name="reset1" onclick="reset(6, this);">Reset Script</button>
      </div>
     
      <h2 id="outputT">Output:</h2>
      <p id="output"></p>
    </div>
  </div>
  
        
      
</div>
<script src="/projects/js_nutshell/js/topic.M-mirko.js"></script>

<?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>
