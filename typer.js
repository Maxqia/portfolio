var i = 0;
var speed = 100; /* The speed/duration of the effect in milliseconds */
var block = "█";
var element = document.getElementById("typewriter");
var txt = element.innerHTML;
var curtxt = "";
element.innerHTML = block;
setTimeout(typeWriter, speed);

function typeWriter() {
  if (i < txt.length) {
        console.log(i);
        curtxt += txt.charAt(i);
        element.innerHTML = curtxt + block;
        i++;
        
        var nextSpeed = speed;
        if (txt.charAt(i) == ' ') nextSpeed += 35;
        setTimeout(typeWriter, nextSpeed);
  } else {
    
  }
}