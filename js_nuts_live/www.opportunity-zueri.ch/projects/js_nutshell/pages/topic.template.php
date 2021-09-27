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
    <h1>TITLE</h1> 

    <!-- Teaser -->
    <p>Short summary of your subject</p>
  </div>
      
      <!-- article -->
  <div class="article">
    <h2>Article title/ subtitle</h2>
    <p>
      Icing jelly beans I love gummi bears wafer pudding jelly-o cotton candy.
      Dragée cotton candy cake I love halvah powder donut. Powder halvah
      pastry chocolate cake pudding I love I love croissant I love.
    </p>
    
    

    <h3>Heading 3 More Bla stuff</h3>
    <p>
      I love macaroon dragée liquorice pudding fruitcake I love jelly. I love
      dessert danish jelly marzipan pastry muffin marzipan. Jelly bonbon sweet
      bonbon jelly-o donut powder.
    </p>
  </div>
  
      <!-- Code Area -->
      

  <div class=" row codeArea codeExample">
    <div class="col-md-6 col-sm-12 code">
      <!-- do not indent your example code!  -->
      <pre>
        <code class = " language-css">
let a = 4;
let b = 17;

/*  statement string with math expression placeholders that
    will be replaced by their respective results */
let statement = `Twenty-one is ${a + b} and not ${2 * a + b}.`;

console.log(statement);  
        </code>
      </pre>
    </div>
    
    <div class="col-md-6 col-sm-12 box-output">
      <div>
        
        <button class="btn btn-run" onclick="run(this)">Run</button>
      
        <button class="btn btn-run" onclick="reset(this)">Reset</button>
        
      </div>
     
      <h2 id="outputT">Output:</h2>
      <p id="output">(DELETE THIS TEXT) THIS IS WHERE YOUR CODE WILL BE PUT OUT (UNTIL HERE)</p>
    </div>
  </div>
  
        
      
</div>

<?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>
