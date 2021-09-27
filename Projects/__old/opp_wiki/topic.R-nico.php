<?php 
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
      <p>Css style manipulation via Javascript</p>
    </div>

    <!-- article -->
    <div class="article">
      <h2>How it works:</h2>

      <p>
        Changing css styles with javascript functions is<br>
        fairly straightforward. all it takes is an event<br>
        that calls a function, which in turn selects the<br>
        element to manipulate and gives it the desired new <br>
        style.
      </p>

      <h3>Example</h3>

      <p id="ExR" onclick="ExR()">Clicking onto this text calls a function that will change this<br>
        text's color to red. the function is called via a simple onclick<br>
        function that is hardcoded into the html, and the function itself<br>
        explained below. 
      </p>
    </div>

    <!-- Code Area -->
    <div class="codeArea" >
      <h2>The Code for a function that changes css styles:</h2>

      <div class="codeArea flex-container mw-100 codeExample">
              <div class="col-12 code">
                <pre>
                  <code class = "language-css">
                  function ExR(){
                    document.getElementById("ExR").style.color = "red";
                  }
                  ExN()
                  </code>
                </pre>
              </div>
      </div>
    </div>
    <script src="../js/topic.R-nico.js"></script>
    <?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php';?>