@extends('todos.shared.template')
@section('title')
    Single Todo:{{$todo->name}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="text-center my-5">
                    {{$todo->name}}
                </h1>

                <div class="card card-default shadow">
                    <div class="card-header bg-primary">
                        Details
                    </div>
                    <div class="card-body">
                          {{$todo->description}}
                    </div>
                </div>
                <a href="/todos/{{$todo->id}}/edit" class="btn btn-success  my-2">Edit</a>
                <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger   my-2">Delete</a>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>
@endsection
