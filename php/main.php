<?php
session_start();

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Link_shortener</title>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <div class="container">
    <form method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Enter your link</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
      </div>
      <div class="block-button">
        <div><button type="submit" class="btn btn-primary" name="submit">Submit</button></div>
      </div>
    </form>
    <form method="get">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Short link</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
      </div>
    </form>

  </div>
</body>

</html>