<?php 
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';

  $rel_links = [
    'topic.A.name.php',
    'topic.A.name.php'
  ];
  ?>
<main>
    <body>
        <div class="w-75 mx-auto">
            <h1><strong>Local Storage!</strong></h1>
                <p>A hard drive or solid state drive. </p>
                <br>
                <img src="../images/localStorage.png" alt="screenshot of localStorage application"/>
                <br>
                <br>
                <p>To store local data, today’s browsers support a local storage and a session storage. 
                    The difference session storage is only available per tab,
                    stored data is deleted once you close the tab with the application. 
                    The local storage data will be there as long until you delete it.
                </p>
                <hr>   
                <h3>LocalStorage has four methods</h3>
                <ol>
                    <li>localStorage.setItem("data",data)</li>
                    <li>localStorage.getItem("data")</li>
                    <li>localStorage.removeItem("data")</li>
                    <li>localStorage.remove()</li>
                </ol>
            
        <!---------KEY FELD........................................-->          
                <h2>Example 1:</h2>
                <h3>Key and Value</h3> 
                <br>
                <form>
                    <label for="key">Key:</label><br>
                    <input style="margin-bottom:20px;" type="text" id="key" value=""><br>
                    
                    <label for="value">Value:</label><br>
                    <input style="margin-bottom:20px;" type="text" id="value" value=""><br><br>
            
                    <button class="btn" type="button" id="set-local">Save to localStorage</button>
            <!--- this piese doesnt work
                <form>
                    <label for="get-key">Key:</label>
                    <input type="text" id="get-key" value="">
                    <button type="button" id="get-local">Get from localStorage</button>
                    <output id="output"></output>
                </form> 
            -->
                    <button class="btn" type="button" id="clearAll">Clear localStorage</button>
                </form>
                <br>
                <hr>
        <!-------COMMENT FELD.............................-------->                                              
                <h2> Example 2:</h2>         	
                <h3>Customer Feedback</h3>  
                <br>               	
                <form >             
                    <label for="name">Name: </label>             	
                    <input id="name" type="text" /><br /><br />              	
                    <label for="email">Email: </label>             
                    <input id="email" type="email" /><br /><br />              	
                    <label for="feedback">Message: </label><br /><br />       
                    <textarea id="feedback"></textarea><br /><br />     
                    <button class="btn" id="saveButton">Save form</button>             
                    <button class="btn" id="retrieveButton">Retrieve form</button> 
                    <button class="btn" id="clear">Clear</button>    
                </form>   
                <br>
                <hr> 
        <!---------MY TRY........................................-->              
                <h2>Example 3: my try</h2>
                <h3>Says what it does :)</h3>
                <br>
                <section>
                    <textarea rows="2" cols="30" id="textMe" style="margin-bottom:20px;" placeholder="try me..."></textarea><br>
                        <button class="btn" onclick="data(0)" id="saveMe">Save</button>
                        <button class="btn" onclick="data(1)" id="resetMe">Clear Field</button>
                        <button class="btn" onclick="data(2)" id="getMe">Get</button>
                        <button class="btn" onclick="data(3)" id="clearMe">Clear All</button><br>
                    <textarea rows="2" cols="30"id="outputMe" style="margin-top:20px" placeholder="output"></textarea><br>
                </section>
                <br>
                <hr>
                <br>
        <!-- RELATED MATERIAL ---------------------------------------------------->
                <h3>Related Topics</h3>
                <p>Web Storage, Session Storage, Cookies</p>

                <h3>More Info</h3>
                <a href="https://webplatform.github.io/docs/apis/web-storage/Storage/localStorage/">Webplatform Source</a><br>
                <a href="https://careerkarma.com/blog/javascript-localstorage/">CareerKarma Source</a>
        </div><!--cls""--->

        <script src="/projects/js_nutshell/js/topic.T-ksenia.js"></script>
  
        <?php require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>
    </body>
</main>
    