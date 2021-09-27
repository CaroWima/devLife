/*document.getElementById('Btn').onclick=function(){
    alert("");

}*/
document.getElementById('Btn2').onclick=function(){
    document.getElementById('img11').src="/projects/js_nutshell/images/122.png";

};


document.getElementById('Btn5').onclick=function(){
    document.getElementById('img11').src="/projects/js_nutshell/images/121.png";

};

document.getElementById('Btn').onclick=function(){
   
 document.getElementById('parag').innerHTML="<b>I've been Changed!!!<b>";

};

document.getElementById('Btn6').onclick=function(){
    document.getElementById('parag').innerHTML = "Please Change the Text?";
};

function stylemani1(origin) {
    document.getElementById('parag2').style.color="#ff5bf8";
    // document.getElementById('parag2').style.fontFamily="Verdana";
    document.getElementById('parag2').style.fontSize="28px";
    document.getElementById('parag2').style.fontStyle="italic";

    console.log(origin.style.backgroundColor = "#25FF6C");
    console.log(origin.nextElementSibling.style.backgroundColor="#25FF6C");


    console.log(origin.previousElementSibling);


};

function stylemani2(origin) {
    document.getElementById('parag2').style.color="black";
    document.getElementById('parag2').style.fontSize="16px";
    // document.getElementById('parag2').style.fontFamily="Times New Roman";
    document.getElementById('parag2').style.fontStyle="normal"
    
    console.log(origin.style.backgroundColor= "#FFF");
    console.log(origin.previousElementSibling.style.backgroundColor= "#FFF");


    console.log(origin.previousElementSibling);
}

/*document.getElementById('Btn4').onclick=function(){
    document.getElementById('parag2').style.color="blue";
    document.getElementById('parag2').style.fontSize="45px";
    
};*/

/*
document.getElementById('Btn4').onclick=function(){
    document.getElementById('parag2').style.display="none";
};
*/
/*document.getElementById('parag').innerHTML="<b>Change the Text<b>";*/

/*function Btn3Click(){
    alert("button2");
}*/



