@extends('layouts.dashboard')

@section('section')

<h3>Categories</h3>

<br>

<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Add
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Category</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <form  action="{{route('Category.store')}}" method="post">
      {{csrf_field()}}
      </form>
      <div class="modal-body">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
          <label for="des">Description</label>
          <textarea name="Description" id="des" rows="5" cols="20" class="form-control"></textarea>

        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<br>
<br>
<table class="table table-responsive">
  <thead>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Modify</th>
    </tr>
  </thead>

  <tbody>
    @foreach($categories as $cat)
    <tr>
      <td>{{$cat->title}}</td>
      <td>{{$cat->description}}</td>
      <td>Edit / Delete </td>
    </tr>
    @endforeach
  </tbody>

</table>
@endsection
