<?php

if($_REQUEST["user_name"] == ""){
    header( 'Location: index.php');
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Apllication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  </head>
  <body>
  <form method = "post" action = "showData.php">
  
  <div class="row">
  <div class="mx-auto col-20 col-md-12 col-lg-6">
  <h1>Simple Web Contact Form</h1>
      <p class="description">
        Check all your data that you sent from the previous form.
      </p>
      <br>
  <div class="mb-3">
    <p  class="form-label">User Name: <?php echo $_REQUEST["user_name"];?></p>
    <p  class="form-label">Email Address: <?php echo $_REQUEST["email"];?></p>
    <p  class="form-label">User Issue Selected: <?php echo $_REQUEST["issue"];?></p>
    <p  class="form-label">User Comment: <?php echo $_REQUEST["comment"];?>
    </p>


  </div>

  
</div>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>