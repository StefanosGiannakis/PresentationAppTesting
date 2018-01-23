@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   Complete the form below !

                   <br><br>
                   <!-- form validation and error display -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  <form action="{{ url('addForm') }}" method="post">
                      <div class="form-group">
                            <label for="formGroupExampleInput"> Presentation Title</label>
                            <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder=" Type here the title of your presentation">
                      </div>
                      <div class="form-group">
                            <label for="formGroupExampleInput2">Presentation Description</label>
                            <input type="text" name="description" class="form-control" id="formGroupExampleInput2" placeholder=" Type here the Description of your presentation">
                      </div>

                    <button type="submit" class="btn btn-success"name="submit">Add My Presentation </button>   
                     {!! csrf_field() !!}

                    </form>
               
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
