<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhe - Tarefas</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  

    <!-- Incluindo CSS do Laravel Mix ou externo -->
    <link rel="stylesheet" href="{{ asset('details-edit.css') }}">
</head>
<body>

    <header class="header-tarefa">
        <h2>Alteração de Detalhe</h2>

    </header>

    <main class="container">
        <div class="formulario">
            <div class="form-tasks"> 
                @if (session('success'))
                    <p class="msg-sucess">{{ session('success') }}</p>
                @endif

               
                <form action="{{Route('detail-update', $details['id'])}}" method="post">
                    @csrf
                    <label for="task">Tarefa:</label><br>
                    <input type="text" id="task-input" name="description" value="{{ $details['task']['description'] }}" disabled><br>
                    
                    <label for="descricao-tarefa">Descrição da Tarefa:</label><br> 
                    <input type="text" id="detail-description" name="description" value="{{ $details['description'] }}">

                    @error ('description')
                        <p class="msg-erro">{{ $message }}</p>
                    @enderror
                        
                    <div class="botao">
                        <button type="submit" class="botao-enviar">Enviar</button>
                        <a href="{{ Route('details', $details['id'])}}">Voltar</a> 
                    </div>
            
                </form>
           </div>
  
        </div>
    </main>


    <!-- Incluindo JS do Laravel Mix ou externo -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
