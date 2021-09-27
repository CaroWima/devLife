<?php
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
?>
<main>
    <div class="container">
        <h1>Connecting strings; Single Quotes - Double Quotes</h1> <!-- TITLE -->
        <div class="teaser">
            <p>
            In JavaScript, Strings are values made up of text and can contain letters, numbers, symbols, punctuation, and even emojis!
            </p>
        </div>
    
        <div class="article">
            <p>
            Strings in JavaScript are contained within a pair of either single quotation marks '' or double quotation marks "". Both quotes represent strings but be sure to choose one and STICK WITH IT. If you start with a single quote, you need to end with a single quote. There are pros and cons to using both IE single quotes tend to make it easier to write HTML within Javascript as you don’t have to escape the line with a double quote.
            Let’s say you’re trying to use quotation marks inside a string. You’ll need to use opposite quotation marks inside and outside of JavaScript single or double quotes. That means strings containing single quotes need to use double quotes and strings containing double quotes need to use single quotes.
            </p>
        </div>
    
        <div class="codeArea flex-container mw-100 codeExample">
            <div class="col-md-6 col-sm-12 code">
                <h4>Code:</h4>
                <p>
                let answer1 = "It's alright";<br>
                let answer2 = "He is called 'Johnny'";<br>
                let answer3 = 'He is called "Johnny"'; <br><br>

                document.getElementById("demo").innerHTML = answer1 + "&lt;br&gt;" + answer2 + "&lt;br&gt;" + answer3;<br>
                </p>
            </div>
            <div class="col-md-6 col-sm-12 output">
                <h4>Output:</h4>
                <p>
                    <p id="demo"></p>
                    <p id="demo1"></p>
                    <!-- OUTPUT HERE -->
                </p>
                <button class="btn run" onclick="run(this)">Run</button>
                <button class="btn reset" onclick="reset(this)">Reset</button>
            </div>
        </div>
    </div>

    <div class="tableOfContent">
        <ul>
            <li><a href="#"></a>Link</li>
        </ul>
    </div>
</main>

<script src="topic_in_a_nutshell.js"></script>

<script>
    function run (origin) {
        origin = origin.previousElementSibling;
        origin.innerHTML =  "It's alright<br>"+"He is called 'Johnny'<br>"+'He is called "Johnny"'
        //origin.style.backgroundColor = "red"
        console.log(origin);
    }
</script>
<?php 
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
?>