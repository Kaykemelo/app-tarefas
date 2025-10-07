<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lojas e Endereços</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  

    <!-- Incluindo CSS do Laravel Mix ou externo -->
    <link rel="stylesheet" href="{{ asset('store.css') }}">
</head>
<body>

    <header class="header-detalhes">
        <h2>Lojas e Endereços</h2>

    </header>

    <main class="container">
        <div class="tabela">
            
            <table class="tabela-tasks">
                 <thead class="tabela-cabeçalho">
                    <tr>
                         <th>ID</th>
                         <th>Lojas</th>
                         <th>Endereços</th>
                    </tr>

                 </thead>
                    <tbody class="tabela-corpo">
                          
                        @foreach ($aStores as $stores)

                            <tr>
                                <td>{{$stores->id}}</td>
                                <td>{{$stores->name}}</td>
                                <td>{{$stores->address->name ?? 'Sem Endereço'}}</td>

                            </tr>
                        @endforeach
                        
                       
                       
                    </tbody>
                </table>
  
        </div>
    </main>


    <!-- Incluindo JS do Laravel Mix ou externo -->
    <script src="{{-- asset('js/app.js') --}}"></script>
</body>
</html>