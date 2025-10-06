<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Categoria</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  

    <!-- Incluindo CSS do Laravel Mix ou externo -->
    <link rel="stylesheet" href="{{ asset('categoryDetail.css') }}">
</head>
<body>

    <header class="header-detalhes">
        <h2>Detalhes da Categoria</h2>

    </header>

    <main class="container">
        <div class="tabela">
            
            <table class="tabela-tasks">
                 <thead class="tabela-cabeçalho">
                    <tr>
                         <th>ID</th>
                         <th>Categoria</th>
                         <th>Detalhes</th>
                    </tr>

                 </thead>
                    <tbody class="tabela-corpo">

                            @foreach ($detailsCategory as $details)
                                <tr>
                                    <td>{{$details->id}}</td>
                                    <td>{{$details->name}}</td>
                                    <td>
                                        <ul>
                                            @foreach($details->DetailsThroughtasks as $detail)
                                            <li>{{$detail->description}}</li>
                                             @endforeach
                                        </ul>
                                    </td>
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