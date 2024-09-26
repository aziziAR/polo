{{--<h3>Edit Report Form</h3>
<form action="/reports/{{$report->id}}" method="POST">
    @csrf
    @method('put')
    Title : <input type="text" name="title" value="{{$report->title}}"><br>
    Description : <textarea name="description">{{$report->description}}</textarea><br>
    Priority : <select name="priority" value="{{$report->priority}}">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option> </select><br>
        <input type="submit" value="Update" onclick="return confirm('Data will be delete permanently. Click Yes to DELETE.?')"><br>
        <input type="reset" value="Cancel"><br>
</form>--}}


@extends('layouts.app')
@section('content')
  <title>New Report Form</title>
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      margin: 60px auto;
      max-width: 500px;
      max-height: 500px;
      border: 1px solid #dee2e6;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="card">
    <div class="card-header text-center">
      <h6>Edit Report Details</h6>
    </div>
    <div class="card-body">
        <form action="/reports/{{$report->id}}" method="POST">
            @csrf
            @method('put')
        <div class="mb-3">
          <label for="title" class="form-label">Title :</label>
          <input type="text" class="form-control" name="title" value="{{$report->title}}">
          @if($errors->has('title'))<span>{{$errors->first('title')}} @endif</span>
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Description :</label>
          <textarea class="form-control" name="description" rows="3">{{$report->description}}</textarea>
          @if($errors->has('title'))<span>{{$errors->first('title')}} @endif</span>
        </div>
        Priority : <select name="priority" class="form-control" value="{{$report->priority}}>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option> </select><br>
        <div class="d-grid gap-2 d-md-block">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
@endsection
