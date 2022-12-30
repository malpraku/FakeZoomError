<!DOCTYPE html>
<html>
<link rel="zoom icon" type="image/x-icon" href="https://cdn.rip/u/L9728Mku-z.png" />
<title>Launch Meeting - Zoom</title>
<link rel="shortcut icon" href="https://us04st1.zoom.us/zoom.ico" />
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("https://i.ibb.co/3C6WfBc/bg.png");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
#windowtitle {
  position: absolute;
  z-index: 9;
  background-color: #D6D6D6;
  text-align: center;
  border: 2px solid #fff;
  box-shadow: 1px 1px 10px grey;
}

#windowbox {
  padding: 1px;
  cursor: move;
  z-index: 9;
  background-color: #fff;
  color: #fff;
  box-shadow: 1px 1px 10px grey;
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
  <div id="windowtitle">
  <div id="windowbox">
  <img src="https://i.ibb.co/ydSTD3C/Screen-Shot-2021-01-28-at-19-27-02.png" alt="WindowTitle" width="522" height="28">
  </div>
<img src="https://i.ibb.co/sqR7rVV/Screen-Shot-2021-01-28-at-19-27-14.png" alt="WindowBox" width="522" height="180">

</div>
  <div class="bg"></div>

<script>
//Make the DIV element draggagle:
dragElement(document.getElementById("windowtitle"));

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}

</script>

<script type="text/javascript">
window.onload = function(){ 
                alert("Created by https://github.com/TemenNsk/");
                }
</script>

</body>
</html>
