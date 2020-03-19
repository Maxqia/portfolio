var i = 0;
var speed = 100; /* The speed/duration of the effect in milliseconds */
var element = document.getElementById("typewriter");
var txt = element.innerHTML;
element.innerHTML = null;
typeWriter();

function typeWriter() {
  if (i < txt.length) {
        element.innerHTML += txt.charAt(i);
        i++;
        
        var nextSpeed = speed;
        if (txt.charAt(i) == ' ') nextSpeed += 35;
        setTimeout(typeWriter, nextSpeed);
  } else {
    
  }
}