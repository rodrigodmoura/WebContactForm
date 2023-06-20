

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  </head>
  <body>
  <form action="showData.php" method="POST">
  
  <div class="row">
  <div class="mx-auto col-20 col-md-12 col-lg-6">
  <h1>Simple Web Contact Form</h1>
      <p class="description">
        Please fill all the Required fields.
      </p>
      <br>
  <div class="mb-3">
    <label for="user_name" class="form-label">User Name:</label>
    <input type="text" class="form-control" id="user_name" name="user_name"  required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email Address:</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
  </div>

  <div class="mb-3">
    <label for="issue" class="form-label">User Issue:</label>
    <select name="issue" class="form-select" id="issue" >
        <option value="Query">Query</option>
        <option value="Feedback">Feedback</option>
        <option value="Complaint">Complaint</option>
        <option value="Other">Other</option>
    </select>
  </div>



  <div class="mb-3">
    <label for="comment" class="form-label">User Comment:</label>
    <textarea class="form-control" id="comment" rows="3" name="comment" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>