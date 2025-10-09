<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes e Anotações</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  

    <!-- Incluindo CSS do Laravel Mix ou externo -->
    <link rel="stylesheet" href="{{ asset('costumer.css') }}">
</head>
<body>

    <header class="header-detalhes">
        <h2>Clientes e Anotações</h2>

    </header>

    <main class="container">
        <div class="tabela">
            
            <table class="tabela-tasks">
                 <thead class="tabela-cabeçalho">
                    <tr>
                         <th>ID</th>
                         <th>Clientes</th>
                         <th>Anotações</th>
                    </tr>

                 </thead>
                    <tbody class="tabela-corpo">

                            <tr>
                                <td>{{$costumerNotes->id}}</td>
                                <td>{{$costumerNotes->name}}</td>
                                <td>
                                    <ul>
                                    @foreach($costumerNotes->notes as $note)
                                        
                                            <li>{{$note->description}}</li>
                                           
                                    @endforeach
                                    </ul>
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