@extends('welcome');
@section('content')
    <ul class="list-group">
        <li class="list-group-item text-center text-primary">TO DO LIST</li>
        @foreach($todos as $todo)
            @if(!$todo->completed)
                <li class="list-group-item list-group-item-info">{{ $todo->title }}</li>
            @else
                <li class="list-group-item list-group-item-info text" style="text-decoration: line-through">{{ $todo->title }}</li>
            @endif
        @endforeach
    </ul>
@stop


