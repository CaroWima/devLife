<?php 
require_once '../config.php';
require_once 'header.inc.php';
?>
<link rel="stylesheet" href="/prism/prism.css">
<main>
    <div class="container">
        <h1>What is Style Manipulation?</h1> <!-- TITLE -->
        <div class="teaser">
            <p>
                The HTML DOM allows JavaScript to change the style of HTML elements.<!-- TEASER -->
            </p>
        </div>
    
        <div class="article">
            <p>
                <!-- ARTICLE -->
            </p>
        </div>
    
        <div class="codeArea flex-container codeExample">
            <div class="col-6 code">
                <h4>Code:</h4>
                <pre>
                <code class="language-js">
function stylemani1(origin) {
    document.getElementById('parag2').style.color="#ff5bf8";
    document.getElementById('parag2').style.fontSize="45px";
    document.getElementById('parag2').style.fontStyle="italic";

    console.log(origin.style.backgroundColor = "#25FF6C");
    console.log(origin.style.nextElementSibling.backgroundColor="#25FF6C");

    console.log(origin.previousElementSibling);


};
                </code>
            </pre>
                <p>

                </p>
            </div>
            <div class="col-6 output">
                <h4>Output:</h4>
                <p id="parag2">
Some people never go crazy. What truly horrible lives they must lead.

We are here to laugh at the odds and live our lives so well that Death will tremble to take us.

I don't hate people. I just feel better when they aren't around.
                </p>
                <button id="Btn4" class="btn run" onclick="stylemani1(this);">Run</button>
                <button id="Btn5" class="btn reset" onclick="stylemani2(this);">Reset</button>
            </div>
        </div>


            <div class="article">
                <p>
                    <!-- ARTICLE -->
                </p>
            </div>

            
    <div class="tableOfContent">
        <ul>
            <li><a href="#"></a>Link</li>
        </ul>
    </div>
</main>
<script src="/projects/js_nutshell/js/topic.Q+R-Jacqueline.js"></script>

<?php
    require_once 'footer.inc.php';
?>