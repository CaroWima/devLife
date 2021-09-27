  
  
  const hour = new Date().getHours(); 
  let greeting;
  
  function ExerciseD(){
    console.log("Hour: "+hour);
    if (hour < 18) {
        greeting = "Good day";
      } else {
        greeting = "Good evening";   
      }
    document.getElementById("ExerciseD").innerHTML = greeting;    
    
    setInnerHTML("#ExerciseD",greeting);
  }

 
  
  function changeImage() {
    var image = document.getElementById("myImage");
    if (image.src.match("bulbon")) {
      image.src = "../images/pic_bulboff.png";
    } else {
      image.src = "../images/pic_bulbon.png";
    }
  }