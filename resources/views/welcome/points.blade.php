@extends('layouts.master_welcome')

@section('title')
    Points for the Wheel of Vernier Game
@stop

@section('content')
    <h1>Tasks And Points</h1>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->task }} {{$task->task_points }}</li>
        @endforeach
    </ul>
        <!-- To get started <a href='/login'>log in</a> or <a href='/register'>register</a>. -->

@stop
