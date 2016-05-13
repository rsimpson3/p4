@extends('layouts.master_welcome')

@section('title')
    Points for the Wheel of Vernier Game
@stop

@section('content')
    <h1>Tasks &amp; Points</h1>

    <table class="taskpointstable">
        <thead>
            <tr class="tablehead">
                <th scope="col"> ID </th>
                <th scope="col"> Task </th>
                <th scope="col"> Points </th>
            </tr>
        </thead>
        <tbody>

            @foreach($tasks as $task)
                <tr>
                    <td> {{ $task->id }} </td>
                    <td> {{ $task->task }} </td>
                    <td> {{ $task->task_points }} </td>
                </tr>
            @endforeach

        </tbody>
    </table>
        <!-- To get started <a href='/login'>log in</a> or <a href='/register'>register</a>. -->

@stop
