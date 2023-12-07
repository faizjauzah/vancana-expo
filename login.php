<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>

  <body class="d-flex align-items-center" style="height: 100vh;">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Login</h2>
        </div>
      </div>
      <div class="row text-center mb-3">
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Halaman login admin <strong>VANCANA</strong></p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <form action="login_p.php" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" />
            </div>
            <br>
            <button type="submit" class="btn btn-primary" href="admin.php" >Submit</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
