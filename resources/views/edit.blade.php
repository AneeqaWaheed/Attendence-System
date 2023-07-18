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
    <div class="crud-panel">
    <div class="card">
        <div class="card-header">
          Edit Student Record
        </div>
        <div class="card-body">
          <form action="{{ url('/updated_student_data/' .$students->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
         
            <div class="form-group">
             
              <input type="text" class="form-control" id="id"  value="{{$students->id}}" >
            </div>
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="sname" value="{{$students->name}}" >
            </div>
            <div class="form-group">
              <label for="name">Roll Number:</label>
              <input type="text" class="form-control" id="name" name="sroll" value="{{$students->Rol_no}}" >
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Image</label>
                    <input class="form-control" type="file" id="formFile" name="simage" value="{{$students->image}}" >
                  </div>
            </div>
            <div class="form-group">
              <label for="name">Class:</label>
              <input type="text" class="form-control" id="name" name="sclass" value="{{$students->class}}" >
            </div>
            <div class="form-group py-2">
                <button type="submit" class="btn btn-primary">Done</button>
            </div>
            
          </form>
        </div>
      </div>
      </div>
</body>
</html>