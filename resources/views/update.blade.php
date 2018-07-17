@extends('master')


@section('content')

    @if($firstItem)
        {{$firstItem->id}}
    @else
        <p>Задач нет в очереди</p>
    @endif

@endsection