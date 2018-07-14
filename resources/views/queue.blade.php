<a href="/">На главную</a>

<hr>

<table>
    @foreach($logs as $log)
        <tr>
            <td>{{$log->id}}</td>
            <td>{{$log->created_at}}</td>
        </tr>
    @endforeach
</table>