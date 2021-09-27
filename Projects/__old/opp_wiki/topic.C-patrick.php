<?php 
 require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/projects/js_nutshell/config.php'; 
 require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/projects/js_nutshell/inc/header.inc.php';

  // Used to add related links to the table content 
  $rel_links = [
    'topic.A.name.php',
    'topic.A.name.php'
  ];
?>
  <h1>Maths</h1>

    <!-- Teaser -->
    <div class="teaser">
      <p>Do you like maths? No? Well you came to the right place, then! =3</p>
    </div>

    <!-- article -->
    <div class="article">
      <h5>(life lessons included)</h5>
      <small>
        <i>
          <p>Maths is great, everybody loves math. When you're a child, you wanted to go to school asap bc of the math lessons and so did everyone else.</p>
          <p>All the more unfortunate is the state of how teachers nowadays do not give you a the slightest idea of what it's good for, where you can use it.</p>
          <p>But, i hear you say, maths is awesome and you can use it anywhere...right? Well...absolutely!</p>
          <p>Sometimes it's easy to see, sometimes you have to put some thought into it and sometimes it's quite far-fetched, but still, it's doable.</p>
          <p>And that's exactly the spirit you need!</p>
        </i>
      </small>
    </div>

    <!-- Code Area 1 -->
    <div class="codeArea">
      <h2>Addition</h2>
      <div class="codeArea flex-container codeExample">
        <div class="col-6 code">
          <pre>
            <code class = "language-css">
1 + 2 =
/*This is for when you want to add two floats or integers together.*/
            </code>
          </pre>
        </div>
              
        <div class="col-6 output">
          <h4>Output:</h4>    
          <div id="calcAdd"></div>
          <button class="btn btn-run" onclick="calcAdd(0)">Run</button>
          <button class="btn btn-run" onclick="calcAdd(1)">Reset</button>
        </div>
      </div>
    </div>

    <!-- Code Area 2 -->
    <div class="codeArea">
      <h2>Subtraction</h2>
      <div class="codeArea flex-container codeExample">
        <div class="col-6 code">
          <pre>
            <code class = "language-css">
3 - 4 =
/*This is for when you want to find out how much smaller the second argument 
is than the first one or what their difference is.*/
            </code>
          </pre>
        </div>
              
        <div class="col-6 output">
          <h4>Output:</h4>
          <div id="calcSub"></div>
          <button class="btn btn-run" onclick="calcSub(0)">Run</button>
          <button class="btn btn-run" onclick="calcSub(1)">Reset</button>
        </div>
      </div>    
    </div>

    <!-- Code Area 3 -->
    <div class="codeArea">
      <h2>Multiplication</h2>
      <div class="codeArea flex-container codeExample">
        <div class="col-6 code">
          <pre>
            <code class = "language-css">
5 * 6 =
/*This is for when you want to multiply two numbers by eachother or when you want 
to count the number of fields in a rectangle with sides as given.*/
            </code>
          </pre>
        </div>
              
        <div class="col-6 output">
          <h4>Output:</h4>
          <div id="calcMul"></div>
          <button class="btn btn-run" onclick="calcMul(0)">Run</button>
          <button class="btn btn-run" onclick="calcMul(1)">Reset</button>
        </div>
      </div>    
    </div>

    <!-- Code Area 4 -->
    <div class="codeArea">
      <h2>Division</h2>
      <div class="codeArea flex-container codeExample">
        <div class="col-6 code">
          <pre>
            <code class = "language-css">
7 / 8 =
/*This is for when you want to find out how many times the second argument can be 
fitted into the first one.*/
            </code>
          </pre>
        </div>
              
        <div class="col-6 output">
          <h4>Output:</h4>
          <div id="calcDiv"></div>
          <button class="btn btn-run" onclick="calcDiv(0)">Run</button>
          <button class="btn btn-run" onclick="calcDiv(1)">Reset</button>
        </div>
      </div>    
    </div>

    <!-- Code Area 5 -->
    <div class="codeArea">
      <h2>Exponentiation</h2>
      <div class="codeArea flex-container codeExample">
        <div class="col-6 code">
          <pre>
            <code class = "language-css">
9 ** 10 =
/*This is for when you want to do many multiplications after eachother with the 
same numbers.*/
            </code>
          </pre>
        </div>
        
        <div class="col-6 output">
          <h4>Output:</h4>
          <div id="calcExp"></div>
          <button class="btn btn-run" onclick="calcExp(0)">Run</button>
          <button class="btn btn-run" onclick="calcExp(1)">Reset</button>
        </div>
      </div>    
    </div>

    <!-- Code Area 6 -->
    <div class="codeArea">
      <h2>Remainder</h2>
      <div class="codeArea flex-container codeExample">
        <div class="col-6 code">
          <pre>
            <code class = "language-css">
11 % 12 =
/*This is for when you want to find out what the remainder is if you divide the 
first argument by the second one.*/
            </code>
          </pre>
        </div>
        
        <div class="col-6 output">
          <h4>Output:</h4>
          <div id="calcRem"></div>
          <button class="btn btn-run" onclick="calcRem(0)">Run</button>
          <button class="btn btn-run" onclick="calcRem(1)">Reset</button>
        </div>
      </div>
    </div>

    <!-- the java script stuff -->
    <script>
      function calcAdd(opt) {       

        let x = 1 + 2;
        document.getElementById("calcAdd").innerHTML = x;

        if (opt == 0) {
          document.getElementById('calcAdd').innerHTML = x;
        } else {
          document.getElementById('calcAdd').innerHTML = "";
        }
      }

      function calcSub(opt) {
        let y = 3 - 4;
        document.getElementById("calcSub").innerHTML = y;
        if (opt == 0) {
          document.getElementById('calcSub').innerHTML = y;
        } else {
          document.getElementById('calcSub').innerHTML = "";
        }
      }

      function calcMul(opt) {
        let z = 5 * 6;
        document.getElementById("calcMul").innerHTML = z;
        if (opt == 0) {
          document.getElementById('calcMul').innerHTML = z;
        } else {
          document.getElementById('calcMul').innerHTML = "";
        }
      }

      function calcDiv(opt) {
        let a = 7 / 8;
        document.getElementById("calcDiv").innerHTML = a;
        if (opt == 0) {
          document.getElementById('calcDiv').innerHTML = a;
        } else {
          document.getElementById('calcDiv').innerHTML = "";
        }
      }

      function calcExp(opt) {
        let b = 9 ** 10;
        document.getElementById("calcExp").innerHTML = b;
        if (opt == 0) {
          document.getElementById('calcExp').innerHTML = b;
        } else {
          document.getElementById('calcExp').innerHTML = "";
        }
      }

      function calcRem(opt) {
        let c = 11 % 12;
        document.getElementById("calcRem").innerHTML = c;
        if (opt == 0) {
          document.getElementById('calcRem').innerHTML = c;
        } else {
          document.getElementById('calcRem').innerHTML = "";
        }
      }
    </script>
    <?php include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/projects/js_nutshell/inc/footer.inc.php'; ?>