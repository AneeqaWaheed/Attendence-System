<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
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
    <form action="teacher_data" method="post" enctype="multipart/form-data">
    @csrf
      <h2 class="text-center">Signup</h2>
      <div class="form-group p-2">
        <input type="text" class="form-control" placeholder="name"  name="name" required="required">
      </div>
      <div class="form-group p-2">
        <input type="text" class="form-control" placeholder="Username"  name="username" required="required">
      </div>
      <div class="form-group p-2" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" placeholder="password" name="password"  required="required">
        @if ($errors->has('password'))
            <span class="help-block text-danger">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group p-2" class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <input type="password" class="form-control" placeholder="confirm Password" name="password_confirmation"  required="required">
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group d-flex justify-content-end">
        <button type="submit" class="btn btn-primary btn-block ">Signup</button>
      </div>
      

    </form>
  </div>
</body>
</html>
