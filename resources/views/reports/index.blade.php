@extends('layouts.app')
@section('content')
@if(count($reports)>0)
<table class="table table-hover text-center ">
{{--<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      text-align: center;
    }
    h3 {
        text-align: center;
     }
    </style>
    
     <br>
    <table style="width:40%" align="center">--}}
    <thead class="table-dark">
        <th>Report Title</th>
        <th>Report description</th>
        <th .col-small>Report priority</th>
        <th colspan="3">Action</th>
    <tbody class="table-group-divider">
        @foreach($reports as $report)
        <tr>
            <td>{{$report->title}}</td>
            <td>{{$report->description}}</td>
            <td>{{$report->priority}}</td>
           <td><a href="/reports/{{$report->id}}" class="btn btn-primary">Details</a></td>
           <td><a href="/reports/{{$report->id}}/edit" class="btn btn-warning">Edit</a></td>
           <td><form action="/reports/{{$report->id}}" method="POST">@csrf @method('DELETE')<input type="submit" value="Delete" class="btn btn-danger  onclick="return confirm('Data will be delete permanently. Click Yes to DELETE.?')"></p></form></td>
           {{-- <td><a href="/reports/{{$report->id}}" method="POST" class="btn btn-danger">Delete</a></td>
           <td><p style="align-content: center"><form action="/reports/{{$report->id}}" class="btn btn-primary" ><input type="submit" value="Details" ></p></form></td>
            <td><p style="align-content: center"><form action="/reports/{{$report->id}}/edit"><input type="submit" value="Edit"></p></form></td>
            <td><p style="align-content: center"><form action="/reports/{{$report->id}}" method="POST">@csrf @method('DELETE')<input type="submit" value="Delete" onclick="return confirm('Data will be delete permanently. Click Yes to DELETE.?')"></p></form></td>--}}
        </tr>
        @endforeach
    </tbody>
    </thead>
</table>
</p>
@else
No data
@endif
@endsection