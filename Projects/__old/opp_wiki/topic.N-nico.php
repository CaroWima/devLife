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
      <p>Javascript events</p>
    </div>

    <!-- article -->
    <div class="article">
      <h2>How it works:</h2>

      <p>
      Javascript events are functions that are executed in response to an event. <br>
      on this page, i display two forms this can take. The first example <br>
      is an onclick function hardcoded into the HTML, the second example <br>
      is done with an event listener, so javascript is actively listening, <br>
      waiting for a certain event to take place, in this case the event is <br>
      the text in example two being clicked. 
      </p>

      <h3>Example</h3>

      <p id="ExN2">This text has an onclick function attached to it,<br>
      but it is added to it from outside, by the javascript file,<br>
      instead of being attached in the html itself. below you see the code that<br>
      makes this possible.
      </p>
    </div>

    <!-- Code Area -->
    <div class="codeArea">
      <h2>The Code for the above function:</h2>

      <p>
        Here, we first find the paragraph by its ID, then we tell javascript <br>
        to change it when it is clicked.
      </p>

      <div class="codeArea flex-container codeExample">
              <div class="col-12 code">
                <pre>
                  <code class = "language-css">
                  function ExN(){
                    document.getElementById("ExN2").addEventListener("click", function(){
                      document.getElementById("ExN2").innerHTML="This was an externally applied onclick event."
                    })
                  }
                  ExN()
                  </code>
                </pre>
              </div>
      </div>

      
    </div>
    <script src="../js/topic.N-nico.js"></script>
    <?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php';?>