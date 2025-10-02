<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Tarefa</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  

    <!-- Incluindo CSS do Laravel Mix ou externo -->
    <link rel="stylesheet" href="{{ asset('details.css') }}">
</head>
<body>

    <header class="header-detalhes">
        <h2>Detalhes da Tarefa</h2>

        <!-- Exemplo de link -->
        <a href="{{ Route('details-create', $aDetails['task']['id']) }}">+ Novo Detalhe</a>

    </header>

    <main class="container">
        <div class="tabela">
            
            <table class="tabela-tasks">
                 <thead class="tabela-cabeçalho">
                    <tr>
                         <th>ID</th>
                         <th>Tarefa</th>
                         <th>Detalhe</th>
                         <th>Ações</th>
                    </tr>

                 </thead>
                    <tbody class="tabela-corpo">
                            <tr>
                                <td>{{$aDetails['id']}}</td>
                                <td>{{$aDetails['task']['description']}}</td>
                                <td>{{$aDetails['description']}}</td>
                                <td>
                                    <a href="{{ Route('detail-edit', $aDetails['id']) }}" class=" botao botao-editar">Editar</a>    
                                </td>
                            </tr>
            
                    </tbody>
                </table>
  
        </div>
    </main>


    <!-- Incluindo JS do Laravel Mix ou externo -->
    <script src="{{-- asset('js/app.js') --}}"></script>
</body>
</html>
