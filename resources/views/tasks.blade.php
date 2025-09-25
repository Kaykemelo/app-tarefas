<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  

    <!-- Incluindo CSS do Laravel Mix ou externo -->
    <link rel="stylesheet" href="{{ asset('tasks.css') }}">
</head>
<body>

    <header class="header-tarefa">
        <h2>Lista de Tarefas</h2>

        <!-- Exemplo de link -->
        <a href="{{('/task-insert')}}">+ Nova Tarefa</a>

    </header>

    <main class="container">
        <div class="tabela">
        
            <table class="tabela-tasks">
                 <thead class="tabela-cabeçalho">
                    <tr>
                         <th>ID</th>
                         <th>Tarefa</th>
                         <th>Status</th>
                         <th colspan="2">Ações</th>
                    </tr>

                 </thead>
                    <tbody class="tabela-corpo">
                        @foreach ($aTasks as $task)
                            <tr>
                                <td>{{$task['id']}}</td>
                                <td>{{$task['description']}}</td>
                                <td>{{$task['status_id']}}</td>
                                <td><a href="{{('/task-update/'.$task['id'])}}" class="botao botao-editar">Editar</a></td>
                                <td><a href="{{('/tasks-delete/'.$task['id'])}}" class="botao botao-excluir">Excluir</a></td>
                            </tr>
                        @endforeach                                                          
            
                    </tbody>
                </table>
  
        </div>
    </main>


    <!-- Incluindo JS do Laravel Mix ou externo -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


    