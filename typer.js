var i = 0;
var speed = 100; /* The speed/duration of the effect in milliseconds */
var block = "█";
var blank = " ";
var element = document.getElementById("typewriter");
var txt = element.innerHTML;
var curtxt = "";

var blinkTime = 600; // in ms
var blinkInterval = null;
element.innerHTML = block;
setTimeout(typeWriter, typerand());

function typeWriter() {
  if (i < txt.length) {
      curtxt += txt.charAt(i);
      element.innerHTML = curtxt + block;
      i++;

      var nextSpeed = typerand();
      if (txt.charAt(i) == ' ') nextSpeed -= 35;
      setTimeout(typeWriter, nextSpeed);
  } else {
      blinkInterval = setInterval(blinkCursor, blinkTime);
  }
}

var blink = false;
var blinkCount = 1; // starts off blinking
function blinkCursor() {
  if(blink) {
    element.innerHTML = curtxt + block;
    blinkCount++;
  } else {
    element.innerHTML = curtxt + blank;
  }
  blink = !blink;

  if(blinkCount >= 10) { // stop at 10 (gnome does this if you're wondering where it came from)
    clearInterval(blinkInterval);
  }
}


// https://stackoverflow.com/a/49434653/12495318
function randn_bm(min, max, skew) {
  let u = 0, v = 0;
  while(u === 0) u = Math.random(); //Converting [0,1) to (0,1)
  while(v === 0) v = Math.random();
  let num = Math.sqrt( -2.0 * Math.log( u ) ) * Math.cos( 2.0 * Math.PI * v );

  num = num / 10.0 + 0.5; // Translate to 0 -> 1
  if (num > 1 || num < 0) num = randn_bm(min, max, skew); // resample between 0 and 1 if out of range
  num = Math.pow(num, skew); // Skew
  num *= max - min; // Stretch to fill range
  num += min; // offset to min
  return num;
}

function typerand() {
  return randn_bm(60000/500,60000/1500, 1);
}
