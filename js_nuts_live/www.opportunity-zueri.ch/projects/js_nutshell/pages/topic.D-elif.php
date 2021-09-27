<?php  
  array_key_exists('CONTEXT_DOCUMENT_ROOT', $_SERVER)?  : $_SERVER['CONTEXT_DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'];
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
?>

<main>
<body>
<div class="w-75 mx-auto">
    <h3>If-else</h3>

    <!-- EXAMPLE 1 ----------------------------------------------------------->
    <h3>Example 1: </h3>
    <pre class="language-css">
      <code class="language-css">
&lt;script>
function pressed(){
            var text = document.getElementById("inp").value;
            if (text === "Frau"){
                document.getElementById("output1").innerHTML = "Sehr geehrte Frau";
            }
            else if (text==="Herr"){
                document.getElementById("output1").innerHTML = "Sehr geehrter Herr";
            }

        }
&lt;/script>
      </code>
    </pre>
    <div class="grid-container">
            <div class="item1">
                <h3>if - else if - else</h3>
                <div>
                    <h4>Please choose your gender</h4>
                    <!-- <input type="text" id="inp"/> -->
                    <select name="inp" id="inp">
                        <option value="Frau">Frau</option>
                        <option value="Herr">Herr</option>
                    </select>

                    <button onclick="pressed()">Click</button>
                    <p>
                        <div id="output1"></div>
                    </p>
                </div>
            </div>

  <div>
    <button  class="btn" onclick=pressed();">Run</button>
    <button   class="btn" onclick=clearResultText(1);">Clear</button>
    <p id="result-text-1" class="result-text">&nbsp;</p>
  </div>

  <!-- EXAMPLE 2 ----------------------------------------------------------->
  <h3>Example 2: </h3>
  
  <pre class="language-css">
    <code class="language-css">
&lt;script>
function calc ()
        {
            var n1 = parseFloat (document.getElementById('n+').value);
            var n2 = parseFloat (document.getElementById('n+').value);
            
            var oper = document.getElementById('operators').value;

            if(oper === '+')
            {
                document.getElementById('result').value = n1+n2;
            }

            if(oper === '-')
            {
                document.getElementById('result').value = n1-n2;
            }

            if(oper === '/') 
            {
                document.getElementById('result').value = n1/n2;
            }

            if(oper === 'X')
            {
                document.getElementById('result').value = n1*n2;
            }
        }
&lt;/script>
    </code>
  </pre>
  <div class="item2">
                <h3>Calculator</h3>
                    <input type="text" id="n1"/><br/><br/>
                    <input type="text" id="n2"/><br/><br/>
                    <input type="text" id="result">
                
                    <select id="operators">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="X">X</option>
                    </select>
                    <button onclick="calc();">=</button>
            </div>

<div>
  <button class="btn" onclick="calc();">Run</button>
  <button  class="btn" onclick=clearResultText(2);">Clear</button>
  <p id="result-text-2" class="result-text">&nbsp;</p>
</div>

  <!-- RELATED MATERIAL ---------------------------------------------------->
  <h3>Related Topics</h3>
  <p></p>

  <h3>More Examples</h3>
  <a href="#">Claudia</a><br>
  <a href="#">Jerome</a><br>

  <h3>More Info</h3>
  <a href="https://www.youtube.com/watch?v=rjLHje_SkE4"></a>If Else!<br>
  <a href="https://www.youtube.com/watch?v=oDUjP4N_MtQ">Calculator!</a>
</div>
</body>
<script src="/projects/js_nutshell/js/topic.D-elif.js"></script>
    
<?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php'; ?>
    </main>