@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
body,
html {
  margin: 0;
  padding: 0;
  height: 100%;
  width: 100%;
}

*,
*:before,
*:after {
  box-sizing: border-box;
}

#container {
  height: 100%;
  width: 100%;

}

#product-svg {
  position: relative;
  z-index: 2;
  background-size: 100%;
  background-repeat: no-repeat;
  background-position: 50%;
  mix-blend-mode: multiply;
}

#product-shape {
  fill: #DBED64;
}


.jscolor {
  position: fixed;
  bottom: 4em;
  right: 4em;
  z-index: 3;
  padding: 1em;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
  border: 0;
  border-radius: 5px;
  cursor: pointer;
}	</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.js
"></script>
</head>
<body>
<div id="container">

  <svg id="product-svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1280">
  <defs/>
  <path id="product-shape" d="M1091.89 706.86c-.73-4-8.21-37.53-8.21-37.53s-4.37-35.14-8.11-48.45-9.46-37.43-9.46-37.43-2-11.33-5.41-16.43-14.87-23.39-24.74-32.23-24.79-15.11-37.91-20.14S970 504.13 967.9 502s-3.57-5.51-5.51-6.32a8.47 8.47 0 0 1-4.21-3.57c-.81-1.46-2.38-4.19-8.4-4.12 0 0-.42 4.68 2.6 6.13s4.68 5.41 5.41 7.49.52 12.27.52 14.45-.42 4.68-2 6-3.85 5.82-19.55 5.41S892 513.18 892 513.18s-27.45-13.31-36.28-21.42-27.55-26.61-27.55-26.61-3.64-4.89-7.07-4a30.67 30.67 0 0 0-7.59 3.85s-5.09-1.66-10.6 2.81S782 479.7 782 479.7l-7.69 2.18-9.77 5.61s-5.41 1.56-8.42 2.5l-31.92 9.88s-7.49.62-9.15 1-9.36 3.33-13 6.76-17.36 12.58-22.46 23-18.92 32.54-24.22 45.43S639.43 613 639.43 613l-8.73 22.35-4.26 8.73s-1 4 .62 5 21.21 23 21.21 23l3-20.27 3.74-3.64s16.53-1.66 24.22-.31 19.75 4 31.81 10.71c0 0 3.12-.1 11.85 18.51 0 0 3 7.28 13.72 16.84 0 0-4.78 41.27-5.61 52.4s-7.17 55.72-8.84 66.23-2.08 11.75-2.08 11.75l-2 62.17s12.27 22.66 22 45.64 25.89 57.28 25.89 57.28l26.16 50.32 15.95 28.9s5.3 10.71 7.49 11.64 5.41 1.87 5.41 1.87.42.83 4.57 1.35 63.63 0 63.63 0l108.62-.47 34.1-.1 1.77-26.72a12.05 12.05 0 0 1-3.53-8.53c-.21-5.72.31-27.55.31-27.55l-1.87-12.06s-.21-6.34-1.14-8.84a168.52 168.52 0 0 0-11.64-22.77s-.52-6.76-1.14-7.8a11 11 0 0 0-1.46-1.87s.21-7.49-.52-9.36-2-6.55-2-6.55l-1.25-9.15.42-35.35 1-13.72s.1-25.47-.62-31.61-.42-17.57-.42-20.9 4.26-19.55 4.26-27.55.73-6.86-.62-18.3 3.74-16.43 3.53-29.73-.73-35.14-.73-35.14 24.85-2.81 36.91-8.32 36.8-10.4 36.8-10.4 2.66.13 1.93-3.82zM714.66 1046.35l-16.86-28.05-1.6-1.6-9.2 47.23s-4.08 15.27-4.44 19-1.42 11.36.89 12.43a24.54 24.54 0 0 0 13.67 3c7.63-.36 10.3-.71 8.52-3.73s-5.63-3.38-5.63-3.38 6.77-3 12.38-3.36 11.36-.18 24.86-7.1c0 0-2.66-5.86-16.16-24.32s-6.43-10.12-6.43-10.12z"/>
</svg>
<img id="background-image" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1376484/alex-holyoake-unsplash_hkda7r.jpg" alt="">
</div>

    <input class="jscolor {onFineChange:'changeColor(this)'}" value="DBED64">

<script type="text/javascript">
	// Reference the color shape that was drawn over the image
const overlay = document.getElementById("product-shape");

function changeColor(picker) {
  // Set the fill style
  overlay.style.fill = picker.toHEXString();
}

// Thats it!

// BONUS

// This function simulates background-size: cover for the SVG inside its parent div, so it would likely be helpful for people migrating from using images to using an SVG locked onto with a photo.

// Reference the SVG
const svg = document.getElementById("product-svg");

// Reference the image
const img = document.getElementById("background-image");

// Place the SVG inside a parent div, reference it
const container = document.getElementById("container");

// (On resize)
window.onresize = () => simulateCover(container, svg, img, 1920, 1280);

// (On load)
simulateCover(container, svg, img, 1920, 1280);

// Pass the parent div, and the SVG (child)
// Pass the image
// x and y are the native dimensions of the image (1920, 1280 in our example)
function simulateCover(parent, child, image, x, y) {
  let { width, height } = parent.getBoundingClientRect();
  let yPercentage = x / y;
  let xPercentage = y / x;

  // Set styles, these can be moved to CSS if need be
  parent.setAttribute("style", "position: relative; overflow: hidden;");

  child.setAttribute(
    "style",
    "display: block; position: relative; top: 50%; left: 50%; transform: translate(-50%, -50%)"
  );

  image.setAttribute(
    "style",
    "display: block; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)"
  );

  if (width < height * yPercentage) {
    child.style.width = height * yPercentage + "px";
    child.style.height = height + "px";

    image.style.width = height * yPercentage + "px";
    image.style.height = height + "px";

  } else {
    child.style.width = width + "px";
    child.style.height = width * xPercentage + "px";

    image.style.width = width + "px";
    image.style.height = width * xPercentage + "px";


  }
}
</script>
</body>
</html>
@endsection
