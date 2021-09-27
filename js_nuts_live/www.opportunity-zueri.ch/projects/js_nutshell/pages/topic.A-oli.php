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
    <h1>Connecting strings; Single Quotes - Double Quotes</h1> 

    <!-- Teaser -->
    <p>In JavaScript, Strings are values made up of text and can contain letters, numbers, symbols, punctuation, and even emojis!</p>
  </div>
      
      <!-- article -->
  <div class="article">
    <h2>Description</h2>
    <p>Strings in JavaScript are contained within a pair of either single quotation marks '' or double quotation marks "". Both quotes represent strings but be sure to choose one and STICK WITH IT. If you start with a single quote, you need to end with a single quote. There are pros and cons to using both IE single quotes tend to make it easier to write HTML within Javascript as you don’t have to escape the line with a double quote.
        Let’s say you’re trying to use quotation marks inside a string. You’ll need to use opposite quotation marks inside and outside of JavaScript single or double quotes. That means strings containing single quotes need to use double quotes and strings containing double quotes need to use single quotes.
    </p>
    

  </div>
  
      <!-- Code Area -->
      

  <div class=" row codeArea codeExample">
    <div class="col-md-6 col-sm-12 code">
      <!-- do not indent your example code!  -->
      <pre>
        <code class = " language-css">
let answer1 = "It's alright";<br>
    let answer2 = "He is called 'Johnny'";<br>
    let answer3 = 'He is called "Johnny"'; <br><br>

    document.getElementById("demo").innerHTML = answer1 + "&lt;br&gt;" + answer2 + "&lt;br&gt;" + answer3;<br>
        </code>
      </pre>
    </div>
    
    <div class="col-md-6 col-sm-12 box-output">
      <div>
        
        <button class="btn btn-run" onclick="run(this)">Run</button>
      
        <button class="btn btn-run" onclick="reset(this)">Reset</button>
        
      </div>
     
      <h2 id="outputT">Output:</h2>

        <p id="demo"></p>
        <p id="demo1"></p>
        <p id="output"></p>

    </div>

    <div class="col-md-6 col-sm-12 output">
        <h4>Pearl links:</h4>
        <p>
            <a href="https://www.w3schools.com/js/js_strings.asp">Link zu W3School</a>
        </p>
    </div>

  </div>
  
        
      
</div>

<script src="topic_in_a_nutshell.js"></script>

<script>
    function run () {
        origin = document.getElementById("output")
        origin.innerHTML =  "It's alright<br>"+"He is called 'Johnny'<br>"+'He is called "Johnny"'
        //origin.style.backgroundColor = "red"
        console.log(origin);
    }

    function reset (){
        origin = document.getElementById("output")
        origin.innerHTML =  ""
}

</script>

<?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>