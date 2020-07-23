<?php
$name =$_POST['tags'];
$arr = explode(",", $name);
print_r($arr);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tags input</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<h3>Tags input with flexbox & javascript(IE9 inline-block)</h3>
<form action="" class="test" method="post">
  <label for="exist-values">Exist values
    <input type="text" id="exist-values" class="tagged form-control" data-removeBtn="true" name="tags" value="" placeholder="Add Tags">
  </label>
  <input type="submit" name="Submit" value="SEND">
</form>
<!-- <button id="destroy">destroy</button>
<button id="add">add tags</button>
<button id="addArr">add tags array</button>
<button id="clear">clear tags</button>
<button id="get">get taggs</button> -->
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>