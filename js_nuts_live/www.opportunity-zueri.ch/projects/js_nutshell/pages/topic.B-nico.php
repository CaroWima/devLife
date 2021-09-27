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
      <p>Display strings and values of Variables via Inner HTML</p>
    </div>

    <!-- article -->
    <div class="article">
      <h2>How it works:</h2>

      <p>
      Displaying strings from Javascript in HTML is fairly simple. <br>
      you simply find the element you want to change the inner HTML of<br>
      and change its inner html via an innerHTML command.
      </p>

      <h3>Explanation</h3>

      <p id="ExB" onclick="ExB()">
      When you click on this text, its inner HTML will be changed.<br> 
      this is because the onclick function attached to this text <br>
      has an .innerHTML command attached to it.  see the image of the code below
      </p>
    </div>

    <!-- Code Area -->
    <div class="codeArea">
      <h2>The Code for the above function:</h2>

      <p>
        We simply choose the element we want to change the inner html of <br>
        and then we set it up to change when clicked. 
      </p>

      <div class="codeArea flex-container codeExample">
              <div class="col-12 code">
                <pre>
                  <code class = "language-css">
                  function ExB(){
                    document.getElementById("ExB").innerHTML="The inner HTML of this paragraph has now changed."
                  } 
                  </code>
                </pre>
              </div>
      </div>

      
    </div>
    <script src="../js/topic.B-nico.js"></script>
    <?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';?>