
@foreach ($task as $taskid )
    <p>Id da Tarefa: {{$taskid['id']}}</p>
    <p>Descrição: {{$taskid['description']}}</p>    
@endforeach 


