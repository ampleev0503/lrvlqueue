@extends('master')



@section('content')

    <table>
        @foreach($logs as $log)
            <tr>
                <td>{{$log->id}}</td>
            </tr>
        @endforeach
    </table>

@endsection