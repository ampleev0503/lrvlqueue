@extends('master')


@section('content')

    <table>
        @foreach($tasks as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td><a href="/task{{$task->id}}">{{$task->name}}</a></td>
                <td>{{$task->counter}}</td>
            </tr>
        @endforeach
    </table>

    <p>
        <a class="btn btn-lg btn-primary" href="/queue/update" role="button">Принять в работу</a>
    </p>

@endsection
