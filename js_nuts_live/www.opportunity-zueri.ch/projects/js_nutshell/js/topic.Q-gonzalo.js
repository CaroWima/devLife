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

const body = document.body
const div = document.createElement("div")
const strong = document.createElement("strong")
div.textContent = 'Appending elements will always set them at the bottom of the Element to which it is appended';



setTimeout(example1, 5000)



function finishSentence() {
    setTimeout((example1) => {
        let msg = "completed"
        document.getElementById('interval').innerHTML = msg  
    }, 5000);
   
} 

//setInterval executes code after every given amount of time

let c = document.getElementById('countershow');
let b = document.getElementById('timeout');

let count = 0
function startCounting () {
   c.innerHTML = ++count;
   if(c.innerHTML >= 20) {
    b.innerHTML = "Phew, you have a lot of patience..."
    }

}

function appendText1() {
    body.append(div)
}

function changeText() {
    let input = document.getElementById("input1").value

    let newText = "Hello " + input
    document.getElementById("text1").innerHTML = newText 

}

function createText() {

}

function createText() {
    let input2 = document.getElementById("input2").value
    document.getElementById("text2").innerHTML = input2
}

function removeText() {
    document.getElementById("text3").remove()
}

function addText() {
    const originalText = document.getElementById("text4").innerHTML
    const addInput = document.getElementById("input4").value
    let newOriginaText = originalText + addInput;
    

    document.getElementById("text4").innerHTML = newOriginaText
    
    
}

const whatsupText = document.getElementById("whatsup").innerText




