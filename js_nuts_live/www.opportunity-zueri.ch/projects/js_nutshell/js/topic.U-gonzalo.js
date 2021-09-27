// DOM Manipulation, append, appendChild, innerText, innerHTML, textContent, getAttribute, setAttribute, .style. , classList (.add, .remove, .toggle), 


// const body = document.body
// const div = document.querySelector('div')
// const hi = document.querySelector('#hi')
// const bye = document.querySelector('#bye')

// console.log(hi.getAttribute('title '))

// hi.setAttribute('id', 'hello2')
// hi.setAttribute('title', 'this is not a title')

// hi.classList.add('class1')
// // hi.classList.remove()
// // hi.classList.toggle()

// hi.style.backgroundColor = "red"
// bye.style.backgroundColor = "yellow"

// const div = document.createElement('div')
// const strong = document.createElement('strong')

// strong.innerText = "Hello World 2"

// div.append(strong)

// body.append("Hello World")

// body.append(div)

//innerHTML can add HTML elements to the site

//div.innerHTML = '<strong>Hello World 2</strong>'

// innerText adds the text in the HTML, but only whats visible

//div.innerText = "Hello World 2"

// textContent addds the tet in the HTML including whats invisible

//div.textContent = 'Hello World 3'

//const div = document.querySelector('div')

//console.log(div.textContent)
//console.log(div.innerText


//NEXT TOPIC

//setInterval, setTimeout

//They are time events that allow execution of code at specific time intervals

//setTimeout executes code once after a set amount of time
  

//setInterval executes code after every given amount of time

function finishSentence() {
    setTimeout((example1) => {
        let msg = "completed"
        document.getElementById('interval').innerHTML = msg  
    }, 5000);
   
} 

let c = document.getElementById('countershow');
let b = document.getElementById('timeout');

let count = 0
function startCounting () {
   c.innerHTML = ++count;
   if(c.innerHTML >= 20) {
    b.innerHTML = "Phew, you have a lot of patience..."
    }

}





