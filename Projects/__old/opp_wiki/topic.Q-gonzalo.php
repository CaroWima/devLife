<?php 
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
  ?>

    <main>
        <div class="container mb-2 w-75 mx-auto p-3">
            <h1>DOM Manipulation</h1> <!-- TITLE -->
            <div class="teaser w-75 mr-auto mb-5">
                <p>
                DOM (Document Object Model) Mapipulation is the capacity for the user to change, modify, remove and create elements via some JavaScript 
                  properties and functions. 
            </div>
        
        
            <div class="codeArea flex-container codeExample w-100 mr-auto mb-5">
                <h3>DOM Manipulation Modifying an Element</h3>
                <p>
                    In this example we change the text of a string by selecting its ID and modifying it with a function that adds the value of the input given.                       
                </p>
                <div class="col-6 code">
                    <h4>Code:</h4>
                    <p>
                        <!-- CODE -->
                        <code class="language-js">
                            <pre>
 function changeText() {
    let input = document.getElementById("input1").value
    let newText = "Hello " + input
    document.getElementById("text1").innerHTML = newText 

                }
                            </pre>
                        </code>
                    </p>
                </div>
                
                <div class="col-6 output">
                
                    <h4>Output:<input id="input1" type="text"> <p id="text1">Hello World </p></h4>
                    <p>        
                        <code class="language-html"></code>
                    </p>
                    <button class="btn" onclick="changeText()" id="button1">Run Script</button>
                    <button class="btn" name="reset1" onclick="reset(0, this);">Reset Script</button>
                </div>
            </div>

            <div class="codeArea flex-container codeExample w-100 mr-auto mb-5">
                <h3>DOM Manipulation Removing an Element</h3>
                <p>
                    In this example we remove an Element with the click of a button. It removes if for the user, but if the page is reloaded it will appear again.                       
                </p>
                <div class="col-6 code">
                    <h4>Code:</h4>
                    <p>
                        <!-- CODE -->
                        <code class="language-js">
                            <pre>
    function removeText() {
        document.getElementById("text3").remove()
            }

                            </pre>
                        </code>
                    </p>
                </div>
                
                <div class="col-6 output">
                    <h4>Output: <p id="text3">Click on "Run Script" to remove this text</p></h4>
                    <p>        
                        <code class="language-html"></code>
                    </p>
                    <button class="btn" id="button3" onclick="removeText()">Run Script</button>
                    <button class="btn" name="reset1" onclick="reset(0, this);">Reset Script</button>
                </div>
            </div>

            <div class="codeArea flex-container codeExample w-100 mr-auto mb-5">
                <h3>DOM Manipulation Adding Text to an Element</h3>
                <p>
                    In this example we we will add some text to an already existing string after giving an input.                       
                </p>
                <div class="col-6 code">
                    <h4>Code:</h4>
                    <p>
                        <!-- CODE -->
                        <code class="language-js">
                            <pre>
function addText() {
    const originalText = document.getElementById("text4").innerHTML
    const addInput = document.getElementById("input4").value
    let newOriginaText = originalText + addInput;
    

    document.getElementById("text4").innerHTML = newOriginaText
    
    
}
                            </pre>
                        </code>
                    </p>
                </div>
                
                <div class="col-6 output">
                
                    <h4>Output: <input type="text" id="input4"><p id="text4">Text will be added after this - </p></h4>
                    <p>        
                        <code class="language-html"></code>
                    </p>
                    <button class="btn" id="button4" onclick="addText()">Run Script</button>
                    <button class="btn" name="reset1" onclick="reset(0, this);">Reset Script</button>
                </div>
            </div>

            
        
            
                
        </div>

        <!-- Loading the JavaScript for the Topic -->
    <script src="/projects/js_nutshell/js/topic.Q-gonzalo.js"></script>
        
    <?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>