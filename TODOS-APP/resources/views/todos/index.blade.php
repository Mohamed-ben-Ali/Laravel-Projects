@extends('todos.shared.template')
@section('title')
    Todo Home
@endsection

@section('content')

        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-center my-5">TODOS PAGE</h1>

                <div class="card card-default shadow">
                    <div class="card-header bg-success">
                        Our Todos
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($todos as $todo)
                                <li class="list-group-item">
                                    {{$todo->name}}

                                    @if(!$todo->completed)
                                        <a href="/todos/{{$todo->id}}/complete" style="color: white" class="btn-warning btn-sm float-right">Complete</a>
                                    @endif


                                    <a href="/todos/{{$todo->id}}" class="btn-info btn-sm mr-2 float-right">View</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

@endsection
