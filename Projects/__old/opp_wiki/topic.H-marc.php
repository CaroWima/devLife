<?php
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/projects/js_nutshell/config.php';
require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/projects/js_nutshell/inc/header.inc.php';
?>

<main>
    <div class="container">
        <h1>Array Methods</h1> <!-- TITLE -->
        <div class="teaser">
            <p>
                <!-- TEASER -->
                In this section we take a look at some methods used in connection with arrays.
                Whether push, pop, shift, unshift, sort, or forEach; through a brief explanation, followed by a sample
                of each method in code, we will try to shine some light on their purpose and usage.
                If you are unfamiliar with the basics of arrays, please check out this
                <a href="https://javascript.info/array" target="_blank">link</a>.
            </p>
        </div>

        <div class="article">
            <p>
                <!-- ARTICLE -->
            <ul>
                <li>Push<p>The push() method adds new items to the end of an array. It changes the length of
                        the array and returns the new length.</p>
                </li>

                <li>Pop<p>The pop() method removes the last element of an array.

                        It changes the length of the array & returns the element it removes.</p>
                </li>

                <li>Shift<p>The shift() method removes the first item of an array.It changes the original
                        array.

                        It returns the element it removes.</p>
                </li>

                <li>Unshift<p>The unshift() method adds new items to the beginning of an array, and returns
                        the new length.

                        It overwrites the original array.</p>
                </li>

                <li>Sort<p>The sort() method sorts the elements of an array.

                        The sort order can be either alphabetic or numeric, and either ascending (up) or
                        descending (down). By default, the sort() method sorts the values as strings in alphabetical
                        and ascending order. This works well for strings ("Apple" comes before "Banana").
                        However, if numbers are sorted as strings, "25" is bigger than "100", because "2" is bigger than "1".
                        Because of this, the sort() method will produce an incorrect result when sorting numbers.
                        It overwrites the original array.</p>
                </li>

                <li>forEach<p>The forEach() method calls a function once for each element in an array, in order.
                        That means, that the function will be executed upon every element in an array individually.

                        It is not executed for array elements without values.</p>
                </li>
            </ul>

            </p>
        </div>

        <div class="codeArea flex-container mw-100 py-3 codeExample">
            <div class="col-md-6 col-sm-12 code">
                <h4>Code:</h4>
                <pre>
                  <code class = "language-css">
                    <!-- CODE -->
        function myFunction() {

            const birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];
            birds.push("Eagle", "Magpie", "Owl");

            document.getElementById('myId').innerHTML = birds;
        }<br>


            // Adds Eagle, Magpie, and Owl to the end of the birds array.
                  </code>
                </pre>
            </div>

            <div class="col-md-6 col-sm-12 output">
                <h4>Output:</h4>

                <!-- OUTPUT HERE -->
                <div id="run1">

                </div>

                <button class="btn run" onclick="run1(0)">Run</button>
                <button class="btn reset" onclick="run1(1)">Reset</button>
            </div>
        </div>

        <div class="codeArea flex-container mw-100 py-3 codeExample">
            <div class="col-md-6 col-sm-12 code">
                <h4>Code:</h4>
                <pre>
                  <code class = "language-css">
                    <!-- CODE -->
        function myFunction() {

            const birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];
            birds.pop();

            document.getElementById('myId').innerHTML = birds;
        }<br>


            // Removes Duck from the end of the birds array.
                  </code>
                </pre>
            </div>

            <div class="col-md-6 col-sm-12 output">
                <h4>Output:</h4>

                <!-- OUTPUT HERE -->
                <div id="run2">

                </div>

                <button class="btn run" onclick="run2(0)">Run</button>
                <button class="btn reset" onclick="run2(1)">Reset</button>
            </div>
        </div>

        <div class="codeArea flex-container mw-100 py-3 codeExample">
            <div class="col-md-6 col-sm-12 code">
                <h4>Code:</h4>
                <pre>
                  <code class = "language-css">
                    <!-- CODE -->
        function myFunction() {

            const birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];
            birds.shift();

            document.getElementById('myId').innerHTML = birds;
        }<br>


            // Removes Sparrow from the beginning of the birds array.
                  </code>
                </pre>
            </div>

            <div class="col-md-6 col-sm-12 output">
                <h4>Output:</h4>

                <!-- OUTPUT HERE -->
                <div id="run3">

                </div>

                <button class="btn run" onclick="run3(0)">Run</button>
                <button class="btn reset" onclick="run3(1)">Reset</button>
            </div>
        </div>

        <div class="codeArea flex-container mw-100 py-3 codeExample">
            <div class="col-md-6 col-sm-12 code">
                <h4>Code:</h4>
                <pre>
                  <code class = "language-css">
                    <!-- CODE -->
        function myFunction() {

            const birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];
            birds.unshift("Kiwi");

            document.getElementById('myId').innerHTML = birds;
        }<br>


            // Adds Kiwi to the beginning of the birds array.
                  </code>
                </pre>
            </div>

            <div class="col-md-6 col-sm-12 output">
                <h4>Output:</h4>

                <!-- OUTPUT HERE -->
                <div id="run4">

                </div>

                <button class="btn run" onclick="run4(0)">Run</button>
                <button class="btn reset" onclick="run4(1)">Reset</button>
            </div>
        </div>

        <div class="codeArea flex-container mw-100 py-3 codeExample">
            <div class="col-md-6 col-sm-12 code">
                <h4>Code:</h4>
                <pre>
                  <code class = "language-css">
                    <!-- CODE -->
        function myFunction() {

            const birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];
            birds.sort();

            document.getElementById('myId').innerHTML = birds;
        }<br>


            // Alphabetically orders the birds array in ascending order.
                  </code>
                </pre>
            </div>

            <div class="col-md-6 col-sm-12 output">
                <h4>Output:</h4>

                <!-- OUTPUT HERE -->
                <div id="run5">

                </div>

                <button class="btn run" onclick="run5(0)">Run</button>
                <button class="btn reset" onclick="run5(1)">Reset</button>
            </div>
        </div>

        <div class="codeArea flex-container mw-100 py-3 codeExample">
            <div class="col-md-6 col-sm-12 code">
                <h4>Code:</h4>
                <pre>
                  <code class = "language-css">
                    <!-- CODE -->
        function myFunction() {

            let output = "";

            let text = "My favourite bird is the ";
            let birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];


            birds.forEach(element => {
            output += text + element + ".";});

            document.getElementById("myId").innerHTML = output;
        }<br>

            // Applies myFunction() function on each item in the birds array.
                  </code>
                </pre>
            </div>
            <div class="col-md-6 col-sm-12 output">
                <h4>Output:</h4>

                <!-- OUTPUT HERE -->
                <div id="run6">

                </div>

                <button class="btn run" onclick="run6(0)">Run</button>
                <button class="btn reset" onclick="run6(1)">Reset</button>
            </div>
        </div>
    </div>


</main>

<script>
    //function push()

    function run1(opt) {
        const birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];
        birds.push("Eagle", "Magpie", "Owl");

        if (opt == 0) {
            document.getElementById('run1').innerHTML = birds;
        } else {
            document.getElementById('run1').innerHTML = "";
        }
    }

    //function pop()
    function run2(opt) {
        const birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];
        birds.pop();

        if (opt == 0) {
            document.getElementById('run2').innerHTML = birds;
        } else {
            document.getElementById('run2').innerHTML = "";
        }
    }

    //function shift()
    function run3(opt) {
        const birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];
        birds.shift();

        if (opt == 0) {
            document.getElementById('run3').innerHTML = birds;
        } else {
            document.getElementById('run3').innerHTML = "";
        }
    }

    //function unshift()
    function run4(opt) {
        const birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];
        birds.unshift("Kiwi");

        if (opt == 0) {
            document.getElementById('run4').innerHTML = birds;
        } else {
            document.getElementById('run4').innerHTML = "";
        }
    }

    //function sort()
    function run5(opt) {
        const birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];
        birds.sort();

        if (opt == 0) {
            document.getElementById('run5').innerHTML = birds;
        } else {
            document.getElementById('run5').innerHTML = "";
        }
    }

    //function forEach()
    function run6(opt) {

        let output = "";

        let text = "My favourite bird is the ";
        let birds = ["Sparrow", "Swallow", "Raven", "Swan", "Duck"];


        birds.forEach(element => {
            output += text + element + ".<br>";
        });

        if (opt == 0) {
            document.getElementById('run6').innerHTML = output;
        } else {
            document.getElementById('run6').innerHTML = "";
        }
    }
</script>

<?php include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/projects/js_nutshell/inc/footer.inc.php'; ?>