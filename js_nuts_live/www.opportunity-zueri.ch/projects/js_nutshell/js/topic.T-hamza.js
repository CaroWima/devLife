  function run(no) {
    //console.log(no);
    let output = document.getElementById('run'+no);


    switch (no) {
      case 0:
        var now = new Date();
        output.innerHTML = now;

        break;
      case 1:
        var dateString = new Date("November 13, 2015 10:11:00")
        output.innerHTML = dateString;

        break;
      case 2:
        var newDate = new Date(2018, 10, 20, 11, 12, 4);
        output.innerHTML = newDate;

        break;
      case 3:
        var x = new Date(0);
        output.innerHTML = x;
        break;

        break;
      case 4:
        var sec = new Date("0000887711119100");
        output.innerHTML = sec;
        break;
    
      default:
        console.log("Switch ERROR");
        break;
    }

    
  }


  function reset(no) {
    //console.log(no);
    let output = document.getElementById('run'+no);


    switch (no) {
      case 0:
        output.innerHTML = "";

        break;
      case 1:
        output.innerHTML = "";

        break;
      case 2:
        output.innerHTML = "";

        break;
      case 3:
        var x = new Date(0);
        output.innerHTML = "";
        break;

        break;
      case 4:
        output.innerHTML = "";
        break;
    
      default:
        output.innerHTML = "";
        break;
    }

    
  }