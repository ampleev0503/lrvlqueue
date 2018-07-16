<a href="/">На главную</a>

<hr>

@if($firstItem)
    {{$firstItem->id}}
@else
    <p>Задач нет в очереди</p>
@endif