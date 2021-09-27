<?php 
  require_once  $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once  $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
  ?>
<main>
    <div class="container mb-2 w-75 mx-auto p-3">
        <h1>For Loops</h1> <!-- TITLE -->
        <div class="teaser w-75 mr-auto mb-5">
            <p>
                Loops are used to do something repeatedly. For instance lets say we get a list of 50 blog posts from the database and we want to print their titles on our page. Instead of writing the code 50 times, we would instead use a loop to make this happen.
            </p>
        </div>
    
        <div class="article tryCatch w-75 mr-auto mb-5">
            <p>
                Let's run through an amount of numbers:
            </p>
        </div>


        <!-- EXAMPLE ONE -->
        <h3>Example 1:</h3>
        <p></p>
        <div class="codeArea flex-container codeExample w-100 mr-auto mb-5">
            
            <div class="col-lg-6 col-12 code">
                <p>
                    <!-- CODE -->
                    <code class="language-js">
                        <pre>
/* Run function*/
function runForLoop() {
    let output = "";
    for (let i = 0; i < 3; i++) {
        //console.log(i);
        output += i + " ";
    }
    document.getElementById("output1").innerHTML = output;
}
                        </pre>
                    </code>
                </p>
            </div>

            <div class="col-12 col-lg-6 output">
                <h4>Output:</h4>
                <p>
                    <!-- OUTPUT HERE -->
                    <code class="language-html" id="output1"></code>
                </p>
                <button button class="btn run" onclick="runForLoop()">Run</button>
                <button button class="btn reset" onclick="reset(1)">Reset</button>
            </div>
        </div>




        <!-- SECOND EXAMPLE WITH ARRAYS -->
        <div class="article arrays">
            <h2>For loops & Arrays</h2>
            <p>
                The "for loop" can also be used for Arrays: Let's loop through an Array with it
            </p>
        </div>

        <h3>Example 2:</h3>
        <p></p>
        <div class="codeArea flex-container codeExample">
            
            <!-- CODE -->
            <div class="col-lg-6 col-12 code">
                <p>
                    <code class="language-js">
                        <pre>
function runArrayForLoop() {
    var myArr = ["Cats", "Dogs", "Birds", "Insects", "Snakes"];
    let output = "";

    for (let i = 0; i < myArr.length; i++) {
        myArr[i];
        //console.log(myArr);
        output += i + " ";
    }

    document.getElementById("output2").innerHTML = output;
}
                        </pre>
                    </code>
                </p>
            </div>
            <div class="col-lg-6 col-12 output">
                <h4>Output:</h4>
                <p>
                    <code class="language-html" id="output2"></code>
                </p>
                <button class="btn run" onclick="runArrayForLoop()">Run</button>
                <button class="btn reset" onclick="reset(2)">Reset</button>
            </div>
        </div>
    </div>
</main>
<script src="/projects/js_nutshell/js/topic.G-carolina.js"></script>
<?php include $_SERVER['HOME'].'/projects/js_nutshell/inc/footer.inc.php'; ?>