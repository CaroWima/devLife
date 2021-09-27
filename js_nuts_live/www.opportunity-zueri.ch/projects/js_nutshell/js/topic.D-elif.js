////-----example 1:

function pressed(){
    var text = document.getElementById("inp").value;
    if (text === "Frau"){
        document.getElementById("output1").innerHTML = "Sehr geehrte Frau";
    }
    else if (text==="Herr"){
        document.getElementById("output1").innerHTML = "Sehr geehrter Herr";
    }

}
setInnerHTML("#result-text-1", text);
    

/////-----example 2:
function calc ()
        {
            var n1 = parseFloat (document.getElementById('n1').value);
            var n2 = parseFloat (document.getElementById('n2').value);
            
            var oper = document.getElementById('operators').value;

            if(oper === '+')
            {
                document.getElementById('result').value = n1+n2;
            }

            if(oper === '-')
            {
                document.getElementById('result').value = n1-n2;
            }

            if(oper === '/') 
            {
                document.getElementById('result').value = n1/n2;
            }

            if(oper === 'X')
            {
                document.getElementById('result').value = n1*n2;
            }
        }        
        
    setInnerHTML("#result-text-2", calc);


        // HELPER FUNCTIONS ----------------------------------------------------------------

function setInnerHTML(selector, text) {
    let elem = document.body.querySelector(selector);
    if (elem) elem.innerHTML = text;
}

function clearResultText(n) {
    setInnerHTML("#result-text-" + n, '&nbsp;');
}