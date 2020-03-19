var i = 0;
var speed = 100; /* The speed/duration of the effect in milliseconds */
var block = "█";
var element = document.getElementById("typewriter");
var txt = element.innerHTML;
var curtxt = "";

var blinkTime = 600; // in ms
var blinkInterval = null;
element.innerHTML = block;
setTimeout(typeWriter, speed);

function typeWriter() {
  if (i < txt.length) {
      curtxt += txt.charAt(i);
      element.innerHTML = curtxt + block;
      i++;

      var nextSpeed = speed;
      if (txt.charAt(i) == ' ') nextSpeed += 35;
      setTimeout(typeWriter, nextSpeed);
  } else {
      blinkInterval = setInterval(blinkCursor, blinkTime);
      setTimeout(stopBlink, blinkTime)
  }
}

var blink = false;
var blinkCount = 1; // starts off blinking
function blinkCursor() {
  console.log(blink);
  if(blink) {
    element.innerHTML = curtxt + block;
    blinkCount++;
  } else {
    element.innerHTML = curtxt;
  }
  blink = !blink;
  
  if(blinkCount >= 10) { // stop at 10 (gnome does this if you're wondering where it came from)
    clearInterval(blinkInterval);
  }
}