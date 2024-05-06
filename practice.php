<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    
</head>
<body>
<h1> allien life </h1>

   <h2 id="demo"> i main toorrrrrr </h2>


<button onclick="change_text()">Click me </button>

<script type="text/javascript">

function change_text()
{
    document.getElementById("demo").innerHTML="you click"
}

        
</script>

</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Slider</title>
  <link rel="stylesheet" href="./jaxa.css">
</head>
<body>
  <div class="slider">

    <div class="images">
      <input type="radio" name="slide" id="img1" checked>
      <input type="radio" name="slide" id="img2">
      <input type="radio" name="slide" id="img3">
      <input type="radio" name="slide" id="img4">

      <img src="./1.jpg" class="m1" alt="img1">
      <img src="./2.jpg" class="m2" alt="img2">
      <img src="./3.jpg" class="m3" alt="img3">
      <img src="./4.jpg" class="m4" alt="img4">
    </div>

    <div class="dots">
      <lable for="img1"></lable>
      <lable for="img2"></lable>
      <lable for="img3"></lable>
      <lable for="img4"></lable>
    </div>

  </div>
  </body>
  </html>