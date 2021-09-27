<?php
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
?>
<main>
  <div class="w-75 mx-auto">  
    <h1>Do... while</h1>
    
    <img src="../images/fchart.png" alt="Flowchart of JavaScript do...while loop"/>

    <p>
        The do...while statement creates a loop that executes 
        a specified statement until the test condition evaluates to false. 
        The condition is evaluated after executing the statement, 
        resulting in the specified statement executing at least once.
    </p>
    <div class="codeArea flex-container mw-100 codeExample">
    <h3>Syntax</h3>
    <div class="row">
    <pre class="language-css">
      <code class="language-js">
            &lt;script>
            do
              statement
            while (condition);
            &lt;/script>
          </code>
        </pre>

    <!-- EXAMPLE 1 ----------------------------------------------------------->
    <h3>In the following example, the do...while loop iterates at least once and 
      reiterates until i is no longer less than 5</h3>
        <pre class="language-css">
          <code class="language-js">
            &lt;script>
            var result = '';
            var i = 0;
            do {
              i += 1;
              result += i + ' ';
            }
            while (i > 0 && i < 5);
            // Despite i == 0 this will still loop as it starts off without the test

            console.log(result);

            &lt;/script>
          </code>
        </pre>

        <div>
          <button class="btn" onclick="topicT1();">Run</button>
          <button class="btn" onclick="clearResultText(1);">Clear</button>
          <p id="result-text-1" class="result-text">&nbsp;</p>
        </div>

  <!-- EXAMPLE 2 ----------------------------------------------------------->
  <h3>Display Numbers from 1 to 5</h3>

  <pre class="language-css">
    <code class="language-js">
  &lt;script>
  // program to display numbers
  let i = 1;
  const n = 5;

  // do...while loop from 1 to 5
  do {
      console.log(i);
      i++;
  } while(i <= n);

  &lt;/script>
      </code>
    </pre>

<div>
  <button class="btn" onclick="topicT2();">Run</button>
  <button class="btn" onclick="clearResultText(2);">Clear</button>
  <p id="result-text-2" class="result-text">&nbsp;</p>
</div>

  <!-- RELATED MATERIAL ---------------------------------------------------->
  <h3>Related Topics</h3>
  <p>Loops, While Loop, Infinite while Loop, For Loop</p>

  <h3>More Examples</h3>
  <a href="#">...</a><br>
  <a href="#">...</a><br>

  <h3>More Info</h3>
  <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/do...while#using_do...while">Statement - Do...While</a><br>
  <a href="https://www.programiz.com/javascript/while-loop">JavaScript while and do...while Loop</a>

  <script src="/projects/js_nutshell/js/topic.F-ksenia.js"></script>
  </div>
   
  <?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>

</main>
</div><!--row-->
</div><!--codeArea-->
