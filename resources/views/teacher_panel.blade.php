<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('./cdn')
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center py-5">
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Attendence System</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="/Add_Students"> Add student</a>
                </div>
            </div>
        </div>

    <table class="table table-hover">
        
            <thead>
              <tr>
                 
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th width="280px">Action</th>
                    <th width="280px">View Details</th>
              </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
            <tr data-row-id="{{ $item->id }}">
           
            <td>{{$item['Rol_no']}}</td>
            <td>{{$item['name']}}</td>
            <td>
                <img src="images/{{$item['image']}}" alt="" class="rounded-circle" width="50" height="50">
            </td>
            <td > 
              <div class="d-inline-flex p-2">
              <div class="form-check pr-2">
            <input class="form-check-input flex-radio" type="radio" name="flexRadioDefault_{{ $item->id }}" value="P" onclick="disableOtherRadioButtons('{{ $item->id }}')">
            <label class="form-check-label" for="flexRadioDefault1">
                P
            </label>
        </div>
        <div class="form-check pr-2">
            <input class="form-check-input flex-radio" type="radio" name="flexRadioDefault_{{ $item->id }}" value="A" onclick="disableOtherRadioButtons('{{ $item->id }}')">
            <label class="form-check-label" for="flexRadioDefault2">
                A
            </label>
        </div>
        <div class="form-check pr-2">
            <input class="form-check-input flex-radio" type="radio" name="flexRadioDefault_{{ $item->id }}" value="L" onclick="disableOtherRadioButtons('{{ $item->id }}')">
            <label class="form-check-label" for="flexRadioDefault3">
                L
            </label>
        </div>

                </div></td>
            <td>
            
            <a  data-bs-toggle="modal" data-bs-target="#exampleModal1"><button class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> delete</button></a>

            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete {{$item['name']}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this?
      </div>
      <div class="modal-footer">
        <a href="{{ url('/delete/' .$item->id) }}"><button type="button" class="btn btn-primary">Yes</button></a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        
      </div>
    </div>
  </div>
</div>

            <a href="{{ url('/edit/' .$item->id) }}"  ><button class="btn btn-primary btn-sm" ><i class="fa fa-edit" aria-hidden="true"></i> edit</button></a>
            <td>                                            
                <a href="{{ url('/view_details/' .$item->id) }}" title="View Student" data-bs-toggle="modal" data-bs-target="#exampleModal"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Record</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
      
      <div class="form-group p-2 d-flex justify-content-evenly">
        <label for="name"><b>Roll Number</b></label>
        <label for="name">{{$item['Rol_no']}}</label>
      </div>
      <div class="form-group p-2 d-flex justify-content-evenly">
        <label for="name"><b>Name:</b></label>
        <label for="name">{{$item['name']}}</label>
      </div>
      <div class="form-group p-2 d-flex justify-content-evenly">
        <label for="name"><b>Image</b></label>
        <img src="images/{{$item['image']}}" alt=""  width="50" height="50">
      </div>
      <div class="form-group p-2 d-flex justify-content-evenly">
        <label for="name"><b>Class</b></label>
        <label for="name">{{$item['class']}}</label>
      </div>
      <div class="form-group p-2 d-flex justify-content-evenly">
        <label for="name"><b>Status:</b></label>
        <label for="name"></label>
      </div>
      
     
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
  
</div>

            </td>
                </tr>
                @endforeach
            </tbody>
           
          </table>
        </div>
        <script>
    function disableOtherRadioButtons(selectedRowId) {
        const radioButtons = document.querySelectorAll(`tr[data-row-id="${selectedRowId}"] .flex-radio`);

        radioButtons.forEach(button => {
            if (button.value !== selectedRowId) {
                button.disabled = true;
            }
        });
    }
</script>



</body>
</html>