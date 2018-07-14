 <table>
     @foreach($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td><a href="/task{{$task->id}}">{{$task->name}}</a></td>
            <td>{{$task->counter}}</td>
        </tr>
     @endforeach
 </table>

 <hr>

 <a href="/queue/update">Принять в работу</a>

 <hr>

 <a href="/queue">Смотреть логи</a>

