function runForLoop() {
    let output = "";
    for (let i = 0; i < 3; i++) {
        //console.log(i);
        output += i + "<br>";
    }
    document.getElementById("output1").innerHTML = output;
}

function runArrayForLoop() {
    var myArr = ["Cats", "Dogs", "Birds", "Insects", "Snakes"];
    let output = "";

    for (let i = 0; i < myArr.length; i++) {
        myArr[i];
        //console.log(myArr);
        output += i + "<br>";
    }

    document.getElementById("output2").innerHTML = output;
}

function reset(div) {
    document.getElementById("output" + div).innerHTML = "";
}