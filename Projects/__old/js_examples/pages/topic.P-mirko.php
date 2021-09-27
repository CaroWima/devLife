<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Js Dataobject</title>
        <link rel="stylesheet" href="/css/basic.css">
        <link rel="stylesheet" href="/css/prism.css">
    </head>
    <body>
        <main>

<!-- TO BE DELETED BEFORE MERGING -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Js Try Catch</title>
        <link rel="stylesheet" href="basic.css">
        <link rel="stylesheet" href="css/prism.css">
    </head>
    <body>
    <!-- DELETE UNTIL HERE -->
    <main>
        <div class="container">
            <h1>Js Try Catch</h1> <!-- TITLE -->
            <div class="teaser">
                <p>
                Like the name tells us, try catch lets us try code and catch for example errors, catch will store those errors in an object.
                If your not familiar with objects check out <a href="js_dataobject.php">our</a> short introduction to objects in JavaScript.
                </p>
            </div>
        
            <div class="article tryCatch">
                <h2>Try, Catch, Throw, Finally</h2>
                <p>
                For the simplest try catch we do not need throw or finally. With throw you are able to throw your own errors. And finally is used to run code after the the try catch block has run, regardless of the result:
                If you like to know more about the catch-block and how to use finally take a look at <a href="https://www.w3schools.com/js/js_errors.asp">w3schools</a> or <a href="https://developer.mozilla.org/de/docs/Web/JavaScript/Reference/Statements/try...catch">developer.mozilla.org</a>.
                </p>
            </div>
        
            <div class="codeArea flex-container codeExample">
                <h3>Try and Catch Example 1</h3>
                <p>
                    In this exaple we will use to try to run a not defined function abracadabra. The catch will then store the error and we will output the error message.
                </p>
                <div class="col-6 code">
                    <h4>Code:</h4>
                    <p>
                        <!-- CODE -->
                        <code class="language-js"><pre>
/* Run function */
function run() {  
/* The run function is trying to run a function called abracadabra which does not exist */
try {
    abracadabra();
    } catch(error) {
        document.getElementbyId('output').innerHTML = error;
    }
}
                            </pre></code>
                    </p>
                </div>
                <div class="col-6 output">
                    <h4>Output:</h4>
                    <p>        
                        <code class="language-html"></code>
                    </p>
                    <button name="run1" onclick="runScript(0, this);">Run Script</button>
                    <button name="reset1" onclick="reset(0, this);">Reset Script</button>
                </div>
            </div>



            <div class="article arrays">
                <h2>Try, Catch and Throw</h2>
                <p>
                Now lets throw in our own error.
                </p>
            </div>
        
            <div class="codeArea flex-container codeExample">
                <h3>Try, Catch and Throw Example 1</h3>
                <p>
                Lets define a variable number and give it the value of 13, the tryblock then will throw in a error if
                the number is not greater then 100.
                </p>
                <div class="col-6 code">
                    <h4>Code:</h4>
                    <p>
                        <!-- CODE -->
                        <code class="language-js"><pre>
/* Creating an array person and storing some data in it */
let number = 13;

/* Run function */
function run() {
    try {
        if(number&lt;100) throw "x is smaller then 100";
    } catch(error) {
        document.getElementbyId('output').innerHTML = output;
    }
                        </pre></code>
                    </p>
                </div>
                <div class="col-6 output">
                    <h4>Output:</h4>
                    <p>        
                        <code class="language-html"></code>
                    </p>
                    <button name="run2" onclick="runScript(1, this);">Run Script</button>
                    <button name="reset2" onclick="reset(1, this);">Reset Script</button>
                </div>
            </div>
        </div>

        <div class="tableOfContent">
            <ul>
                <li><a href="#"></a>Link</li>
            </ul>
        </div>




            </div>

            <div class="tableOfContent">
                <ul>
                    <li><a href="#"></a>Link</li>
                </ul>
            <div>
        </main>
    </body>
    <!-- Loading the JavaScript for the Topic -->
    <script src="/js/topic.P-mirko.js"></script>
    <script defer src="/js/prism.js"></script>
</html>