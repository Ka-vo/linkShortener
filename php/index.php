<?php
session_start();

$login = $_POST['login'];
$password = sha1($_POST['password']);

require "db.php";


$db = databace();
if (!$db) {
?>
  <link rel="stylesheet" href="./css/main.css">
  <h2 class="container">Having connection problems, contact the administrator</h2>
<?php
} else {
  if (isset($login) and isset($password)) {
    $query = "SELECT * FROM Accounts where login = '$login' and passward = '$password'";
    foreach ($db->query($query) as $row) {
      if ($row['login'] = $login and $row['passward'] = sha1($password)) {
        header("Location: /main.php");
      }
    }
  }
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
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class="block-button">
          <div><button type="submit" class="btn btn-primary" name="submit">Submit</button></div>
          <div><button type="submit" class="btn btn-primary" name="submitReg">Registration</button></div>
        </div>
      </form>
    </div>
  </body>

  </html>

<?php
}
if (isset($_POST['submitReg'])) {
  header("Location: /registration.php");
}
