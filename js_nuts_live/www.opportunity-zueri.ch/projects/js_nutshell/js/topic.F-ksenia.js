//  DO....WHILE FUNCTIONS ----------------------------------------------------
//  Example 1:
// program to display numbers
function topicT1() {
    var result = '';
    var i = 0;
    do {
       i += 1;
       result += i + ' ';
    }
    while (i > 0 && i < 5);
    // Despite i == 0 this will still loop as it starts off without the test
    
    console.log(result);
    
    setInnerHTML("#result-text-1", result);
}
    
//Example 2:
// program to display numbers
function topicT2() {
    let i = 1;
    const n = 5;
    
    // do...while loop from 1 to 5
    do {
        console.log(i);
        i++;
    } while(i <= n);
    
    setInnerHTML("#result-text-2", i);
}
    
// HELPER FUNCTIONS -------------------------------------------------------------

function setInnerHTML(selector, text) {
    let elem = document.body.querySelector(selector);
    if (elem) elem.innerHTML = text;
}

function clearResultText(n) {
    setInnerHTML("#result-text-" + n, '&nbsp;');
}