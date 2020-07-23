<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form action="api/regca.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">phone:</label>
      <input type="text" class="form-control" id="email" placeholder="phone" name="phone">
    </div>
    <div class="form-group">
      <label for="email">email:</label>
      <input type="text" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      <label for="email">password:</label>
      <input type="password" class="form-control" id="email" placeholder="password" name="password">
    </div>
    <div class="form-group">
      <label for="email">name:</label>
      <input type="text" class="form-control" id="email" placeholder="name" name="name">
    </div>
    <div class="form-group">
      <label for="email">firmname:</label>
      <input type="text" class="form-control" id="email" placeholder="firm" name="firmname">
    </div>
    <div class="form-group">
      <label for="email">ofcadd:</label>
      <input type="text" class="form-control" id="email" placeholder="ofcadd" name="ofcadd">
    </div>
    <div class="form-group">
      <label for="email">state:</label>
      <input type="text" class="form-control" id="email" placeholder="state" name="state">
    </div>
    <div class="form-group">
      <label for="email">city:</label>
      <input type="text" class="form-control" id="email" placeholder="city" name="city">
    </div>
    <div class="form-group">
      <label for="email">pincode:</label>
      <input type="text" class="form-control" id="email" placeholder="pincode" name="pincode">
    </div>
    <div class="form-group">
      <label for="pwd">district:</label>
      <input type="text" class="form-control" id="pwd" placeholder="district" name="district">
    </div>
   <div class="form-group">
      <label for="pwd">service offered:</label>
      <input type="text" class="form-control" id="pwd" placeholder="service" name="service">
    </div>
     <div class="form-group">
      <label for="pwd">gst:</label>
      <input type="text" class="form-control" id="pwd" placeholder="gst" name="gst">
    </div>
      <div class="form-group">
      <label for="pwd">business description:</label>
      <input type="text" class="form-control" id="pwd" placeholder="b_desc" name="b_desc">
    </div>
      <div class="form-group">
      <label for="pwd">workinng hour:</label>
      <input type="text" class="form-control" id="pwd" placeholder="w_hour" name="w_hour">
    </div>
      <div class="form-group">
      <label for="pwd">certificate:</label>
      <input type="file" class="form-control" id="pwd"  name="cop">
    </div>
      <div class="form-group">
      <label for="pwd">visiting card:</label>
      <input type="file" class="form-control" id="pwd"  name="vcard">
    </div>

    <button type="submit" name="signupca" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
