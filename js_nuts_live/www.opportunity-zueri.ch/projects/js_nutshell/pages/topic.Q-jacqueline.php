<?php  
  array_key_exists('CONTEXT_DOCUMENT_ROOT', $_SERVER)?  : $_SERVER['CONTEXT_DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'];
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
?>
<link rel="stylesheet" href="/prism/prism.css">
<main>
    <div class="container">
        <h1>What is Dom Manipulation?</h1> <!-- TITLE -->
        <div class="teaser">
            <p>
                With the HTML DOM, JavaScript can access and change all the elements of an HTML document.<!-- TEASER -->
            </p>
        </div>
    
        <div class="article">
            <p>
                <!-- ARTICLE -->
            </p>
        </div>
    
        <div class="row">
            <div class="col-md-6 col-sm-12 code">
                <h4>Code:</h4>
                <pre>
                <code class="language-js">
document.getElementById('myBtn2').onclick=function(){
    document.getElementById('img1').src="ananas.jpg";

};


document.getElementById('myBtn5').onclick=function(){
    document.getElementById('img1').src="maxresdefault.jpg";

};   
                </code>
            </pre>
                <p>

                </p>
            </div>
            <div class="col-md-6 col-sm-12 output">
                <h4>Output:</h4>
                <p>
                    <img id="img11" src="/projects/js_nutshell/images/121.png" width="300px" height="350px"alt="" onclick="changeImg();">
                </p>
                <button id="Btn2" class="btn run">Run</button>
                <button id="Btn5" class="btn reset">Return</button>
            </div>
        </div>


            <div class="article">
                <p>
                    <!-- ARTICLE -->
                </p>
            </div>
        
            <div class="codeArea flex-container codeExample">
                <div class="col-md-6 col-sm-12 code">
                    <h4>Code:</h4>
                    <pre>
                    <code class="language-js">

document.getElementById('bton').onclick=function(){

document.getElementById('parf').innerHTML="I've been Changed!!!";

};

document.getElementById('bton').onclick=function(){
    document.getElementById('parf').innerHTML = "Please Change the Text?";
};
                    </code>
                    </pre>
                    <p>

                    </p>
                </div>
                <div class="col-md-6 col-sm-12 output">
                    <h4>Output:</h4>
                    <p id="parag">
                       Please Change the Text?
                    </p>
                    <button id="Btn" class="btn run">Run</button>
                    <button id="Btn6" class="btn reset">Return</button>
                </div> 
            </div>


            
    <div class="tableOfContent">
        <ul>
            <li><a href="#"></a>Link</li>
        </ul>
    </div>
</main>
<script src="/projects/js_nutshell/js/topic.Q+R-Jacqueline.js"></script>-


<?php
   require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php';
?>