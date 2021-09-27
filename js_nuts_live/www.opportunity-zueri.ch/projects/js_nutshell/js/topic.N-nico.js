function ExN(){
  /*in this first line, we grab the element that is the paragraph written for example 2.
    we add to it an event listener that waits for it to be clicked. when it is clicked, 
    the function is executed.*/
  document.getElementById("ExN2").addEventListener("click", function(){
    /* below, you see the function. This function again grabs the element that is the paragraph, 
    and changes its inner html, so the text you see, to a different, preset text.*/
    document.getElementById("ExN2").innerHTML="This was an externally applied onclick event."
  })
}
/*once the function is written, we have to execute it, so that it starts listening for the event.*/
ExN()