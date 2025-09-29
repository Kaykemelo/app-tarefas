<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  

    <!-- Incluindo CSS do Laravel Mix ou externo -->
    <link rel="stylesheet" href="{{ asset('edit.css') }}">
</head>
<body>

    <header class="header-tarefa">
        <h2>Alteração de Tarefa</h2>

    </header>

    <main class="container">
        <div class="formulario">
            <div class="form-tasks"> 
                @if (session('sucess'))
                    <p class="msg-update">{{session('sucess')}}</p>
                @endif

                <form action="{{ Route('task-update', $task['id']) }}" method="post">
                
                    @csrf

                    <input type="hidden" name="id" value="{{ $task['id'] }}">
                    <label for="task">Tarefa:</label><br>
                    <input type="text" id="task-input" name="description" value="{{ $task['description'] }}" @error('description') is-invalid @enderror><br>

                    @error('description')
                        <p class="msg-erro">{{ $message }}</p>
                    @enderror

                    <label for="status">Status:</label><br> 
                    <select name="status_id" @error('status') is-invalid @enderror>
                        <option value="">Selecione:</option>
                        <option value="1" {{ ($task['status_id'] == 1) ? 'selected' : ''}}>Pendente</option>
                        <option value="2" {{ ($task['status_id'] == 2) ? 'selected' : ''}}>Concluida</option>
                    </select>
                    @error('status')
                        <p class="msg-erro">{{ $message }}</p>
                    @enderror    

                    <div class="botao">
                        <button type="submit" class="botao-enviar">Enviar</button>
                        <a href="{{'/Tasks/task'}}">Voltar</a> 
                    </div>
            
                </form>
           </div>
  
        </div>
    </main>


    <!-- Incluindo JS do Laravel Mix ou externo -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
