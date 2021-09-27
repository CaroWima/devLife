///------------WEDPLATFORM CODE---------------------------------------////
//....to start....///

if (window.localStorage) { // checks if browser support localStorage
    if (localStorage['testKey']) { // checks if value exists
    console.log('Value exist on page load in localstorage for key testKey : ', localStorage['testKey']);
    }
    localStorage['testKey'] = 'Hi again!'; // stores value in localstorage
} else {
console.log('your browser dont support localstorage');// in our case it does support and
                                                //to find it do to inspector => Application
}

/* global document, window */
var valueSetHandler = function() {
    /** read the values from the form */
    var key = document.getElementById('key').value,
    value = document.getElementById('value').value;
    /** save value under key in localStorage */
    window.localStorage.setItem(key, value);
},
   
    clearStorageHandler = function() {
    window.localStorage.clear();
};

/** register event Listeners for button clicks */
document.getElementById('set-local').addEventListener('click', valueSetHandler);
    
document.getElementById('clearAll').addEventListener('click', clearStorageHandler);


        

///----CAREER KARMA CODE---------------------------------------////
//----declaring variebles------//
var nameField = document.getElementById("name"); 
var emailField = document.getElementById("email"); 
var feedbackField = document.getElementById("feedback");

var saveButton = document.getElementById("saveButton"); 
var retrieveButton = document.getElementById("retrieveButton");
var clearButton = document.getElementById("clear");

////-----making buttons react onclick----///
function  saveResponses () { 	
    localStorage.setItem("name", nameField.value); 	
    localStorage.setItem("email", emailField.value);    	
    localStorage.setItem("feedback", feedbackField.value); 
}
saveButton.addEventListener("click", saveResponses);

function  retrieveResponses () { 	
    nameField.value = localStorage.getItem("name");    	
    emailField.value = localStorage.getItem("email");     	
    feedbackField.value = localStorage.getItem("feedback");
}  

retrieveButton.addEventListener("click", function(e) 
        { e.preventDefault();retrieveResponses();clear();
});

            ///-----MY TRY-----------------------------////

            ///-------switch function method------///
            function data(origin){
            switch (origin) {
                case 0://// saving "key" and it "value" in localStorage
                    var input = document.getElementById("textMe");
                    localStorage.setItem("text", input.value);
                        var storedValue = localStorage.getItem("text");
                        document.getElementById('outputMe').innerHTML = storedValue = "NOW YOU'R SAVED";
                        break;


                case 1:/// clears typing area, but keeps data in localStorage
                    input = document.getElementById("textMe");
                    input.value = "";
                    document.getElementById('outputMe').innerHTML = "CAN TYPE AGAIN";
                    break;


                case 2:/// gets data from localStorage and displays at typing area
                    var lastText = localStorage.getItem("text");
                    console.log("last text  =" + lastText);
                    document.getElementById('textMe').value = lastText;
                    document.getElementById('outputMe').innerHTML = "LOOK I REMEMBER YOU";
                    break;


                case 3:///  clears all data from localStorage
                    input = document.getElementById("textMe");
                    input.value = "";
                    localStorage.clear();
                    document.getElementById('outputMe').innerHTML = "NOW IT IS EMTY";
                    break;

                default:

                    break;
            }

            }


