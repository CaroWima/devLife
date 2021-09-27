<?php 
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
  ?>

    <main>
        <div class="container mb-2 w-75 mx-auto p-3">
            <h1>setTimeout</h1> <!-- TITLE -->
            <div class="teaser w-75 mr-auto mb-5">
                <p>
                setTimeout executes code once after a set amount of time. The code can be a string, a function, or any code.
            </div>
        
        
            <div class="codeArea flex-container codeExample mw-100 mr-auto mb-5">
                <h3>setTimeout Example</h3>
                <p>
                    In this example we execute a code that finishes a simple sentence after a wait period of 5 seconds. Its a simple example but demonstrates the basics of the setTimeout                    
                </p>
                <div class="col-6 code">
                    <h4>Code:</h4>
                    <p>
                        <!-- CODE -->
                        <code class="language-js">
                            <pre>
function finishSentence() {
    \\ Here we call setTimeout and we make an arrow function
    \\ where we declare the message and select where it will be shown.
    setTimeout((example1) => {
        let msg = "completed"
        document.getElementById('interval').innerHTML = msg  
    }, 5000);
   
} 
                            </pre>
                        </code>
                    </p>
                </div>
                
                <div class="col-6 output">
                
                    <h4>Output:
                     <span>After 5 seconds this text will be </span>
                     <span id="interval"></span><br></h4>
                    <p>        
                        <code class="language-html"></code>
                    </p>
                    <button class="btn" onclick="finishSentence()">Run Script</button>
                    <button class="btn" name="reset1" onclick="reset(0, this);">Reset Script</button>
                </div>
            </div>

            <div class="codeArea flex-container codeExample mw-100 mr-auto mb-5">
                <h3>setInterval</h3>
                <p>
                In this example we execute a code that starts counting one second at a time after the click of a button. It can be stopped and resumed whenver you want .                       
                </p>
                <div class="col-6 code">
                    <h4>Code:</h4>
                    <p>
                        <!-- CODE -->
                        <code class="language-js">
                            <pre>
let c = document.getElementById('countershow');
let b = document.getElementById('timeout');

let count = 0
function startCounting () {
   c.innerHTML = ++count;
    }

}

                            </pre>
                        </code>
                    </p>
                </div>
                
                <div class="col-6 output">
                    <h4>Output: <p id="countershow">Click Start Counter and I will start counting!</p><br></h4>
                    <p>        
                        <code class="language-html"></code>
                    </p>
                    <button class="btn" onclick="Timer = setInterval(startCounting, 1000)">Run Script</button>
                    <button class="btn" onclick="clearInterval(Timer)">Stop Script</button>
                </div>
            </div>

            

            
        
            
                
        </div>

        <!-- Loading the JavaScript for the Topic -->
    <script src="/projects/js_nutshell/js/topic.U-gonzalo.js"></script>
        
    <?php
        require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php';
    ?>