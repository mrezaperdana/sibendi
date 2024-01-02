<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Login Page</title>
</head>
<body>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6 text-center">
      <p>Halaman Login</p>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6 text-center">
      <a href="{{ route('admins.dashboards') }}" class="btn btn-primary">Login Sebagai Admin</a>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6 text-center">
      <a href="{{ route('users.dashboards') }}" class="btn btn-secondary">Login Sebagai User</a>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
