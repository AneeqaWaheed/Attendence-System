<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
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
    <form action="login" method="post" enctype="multipart/form-data">
      @csrf
      <h2 class="text-center">Login</h2>
      <div class="form-group p-2">
        <input type="text" class="form-control" placeholder="Username" name="username" required="required">
      </div>
      <div class="form-group p-2">
        <input type="password" class="form-control" placeholder="Password" name ="password"required="required">
      </div>
      <div class="form-group d-flex justify-content-end">
        <button type="submit" class="btn btn-primary btn-block ">Log in</button>
      </div>
      <br>
      @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
      <div class="form-group">
        <p class="text-center">Dont have account? <a href="/teacher_signup">Sign Up</a></p>
      </div>

    </form>
  </div>
 
</body>
</html>
