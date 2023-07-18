<!DOCTYPE html>
<html>
<head>
  <title>View Details</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('./cdn')
  <style>
    .login-form {
      width: 500px;
      margin: 0 auto;
      margin-top: 100px;
    }
    .login-form form {
      margin-bottom: 15px;
      background: #f7f7f7;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      padding: 30px;
    }
    .login-form h2 {
      margin: 0 0 15px;
    }
    .form-control,
    .btn {
      min-height: 38px;
      border-radius: 2px;
    }
    .btn {        
      font-size: 15px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="login-form">
    <form action="" method="post">
      <h2 class="text-center">Login</h2>
      <div class="form-group p-2 d-flex justify-content-evenly">
        <label for="name">Name:</label>
        <label for="name">{{ $sdata->name }}</label>
      </div>
      <div class="form-group p-2 d-flex justify-content-evenly">
        <label for="name">Roll Number:</label>
        <label for="name">{{ $sdata->Rol_no }}</label>
      </div>
      <div class="form-group p-2 d-flex justify-content-evenly">
        <label for="name">Image</label>
        <img src="{{ asset('public/storage/images/'.$sdata->image) }}" alt="Image">

      </div>
      <div class="form-group p-2 d-flex justify-content-evenly">
        <label for="name">Class</label>
        <label for="name">{{ $sdata->class }}</label>
      </div>
      <div class="form-group p-2 d-flex justify-content-evenly">
        <label for="name">Status:</label>
        <label for="name"></label>
      </div>
      
     
    </form>
  </div>
</body>
</html>
