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

                  

                   <br><br>

                   <h1>  Your Presentations ! </h1> <a href='{{ url('add') }}'>Add Presentation</a> 
                   <br><br>
                <!-- displays a message of success when add presentation is accomplished -->
                   @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                   <br><br>
                        @if(count($presentations)>0 )
                     
                            @foreach($presentations as $presentation)
                              
        
  
                                <li class="list-group-item blackfont">Title: {{$presentation->title}}</li>
                                <li class="list-group-item blackfont">Description: {{$presentation->description}}</li>
                             user id  {!! $presentation->userId !!}
                          
                            @endforeach
                               
                        @endif

            </div>
        </div>
    </div>
</div>
@endsection

