@extends('master')



@section('content')

    <table>
        @foreach($logs as $log)
            <tr>
                <td>{{$log->id}}|</td>
                <td>{{$log->created_at}}</td>
            </tr>
        @endforeach
    </table>

@endsection