<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('./cdn')
    <style>
        .crud-panel {
      width: 600px;
      margin: 0 auto;
      margin-top: 50px;
    }
    .crud-panel .card {
      margin-bottom: 20px;
    }
    .crud-panel .card-header {
      font-weight: bold;
    }
    .crud-panel .card-body form {
      margin-bottom: 15px;
    }
    </style>
    <title>Document</title>
</head>
<body>
  @if($message=Session::get('success'))
  <div class="alert alert-sucess alert-block">
    <strong>{{$message}}</strong>
  </div>
  @endif
    <div class="crud-panel">
    <div class="card">
        <div class="card-header">
          Add Student Record
        </div>
        <div class="card-body">
          <form action="student_data" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="sname" required="required">
            </div>
            <div class="form-group">
              <label for="name">Roll Number:</label>
              <input type="text" class="form-control" id="name" name="sroll" required="required">
              
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="simage" >
                   
                    @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('simage')}}</span>
                    @endif

                  </div>
            </div>
            <div class="form-group">
              <label for="name">Class:</label>
              <input type="text" class="form-control" id="name" name="sclass" required="required">
            </div>
            <div class="form-group py-2">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
            
          </form>
        </div>
      </div>
      </div>
</body>
</html>