{{--<h1 align="center">Report Details</h1>
        Report Title : {{$reports->title}} <br>
        Report description : {{$reports->description}} <br>
        Report priority : {{$reports->priority}} <br>
        <small>Created at : {{$reports->created_at}}</small> <br>
        <small>Update at : {{$reports->updated_at}}</small> <br>
        <a href="/reports">Back</a>--}}


        @extends('layouts.app')
        @section('content')
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
              <h6>Report Details</h6>
            </div>
            <div class="card-body">
                <form action="/reports" method="POST" class="form-group">
                    @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Title :</label>
                  {{$reports->title}}
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description :</label>
                  {{$reports->description}} 
                </div>
                  <label for="title" class="form-label">Report Priority :</label>
                  {{$reports->priority}}
               {{--}} <div class="d-grid gap-5 d-md-block">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>--}}
              </form>
            </div>
          </div>
        </div>
        
        </body>
        </html>
        @endsection
        