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


    <!-- Teaser -->
    <div class="teaser">
      <p>What is Javascript let?</p>
    </div>

    <!-- article -->
    <div class="article">
      <h2>How it works:</h2>

      <p>
      Let, in javascript, is an alternate method of declaring variables. However, <br>
      the variables you declare via let have two main differences to ones declared with var. <br>
      the first difference is that they can only be referenced locally, for example, only within<br>
      the function that they are declared in. <br>
      the second is that they cannot be overwritten. <br>
      this means that if you declare let a=50 and later on let a=20, a will still be 50
      </p>

      <h3>Example</h3>

      <p id="ExL" onclick="ExL()">
      When you click on this text, it will be replaced with the value of x.
      </p>
    </div>

    <!-- Code Area -->
    <div class="codeArea">
      <h2>The Code for the above function:</h2>

      <p>
        Here, we declare x to be 50 via the let declaration:
      </p>

      <div class="codeArea flex-container codeExample">
              <div class="col-12 code">
                <pre>
                  <code class = "language-css">
                  function ExL(){
                    let x = 50;
                    document.getElementById("ExL").innerHTML=x
                  }
                  </code>
                </pre>
              </div>
      </div>

      
    </div>
    <script src="../js/topic.L-nico.js"></script>
   
    <?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php'; ?>