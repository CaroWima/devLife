
function myFunction() {
    var day;
    switch (new Date().getDay()) {
      case 0:
        day = "Sunday";
        break;
      case 1:
        day = "Monday";
        break;
      case 2:
        day = "Tuesday";
        break;
      case 3:
        day = "Wednesday";
        break;
      case 4:
        day = "Thursday";
        break;
      case 5:
        day = "Friday";
        break;
      case  6:
        day = "Saturday";
        break;
      default:
        day = "Unknown Day";
    }
    document.getElementById("result-text-1").innerHTML = "Today is " + day;
  }

  function Weekend() {
    var text;
    switch (new Date().getDay()) {
      case 1:
      case 2:
      case 3:
      default:
        text = "Looking forward to the Weekend";
        break;
      case 4:
      case 5:
        text = "Soon it is Weekend";
        break;
      case 0:
      case 6:
        text = "It is Weekend";
    }
    document.getElementById("result-text-2").innerHTML = text;
  }