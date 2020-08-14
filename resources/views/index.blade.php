<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte 1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container mt-5">



        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2 class="text-center mb-3">Listado de usuarios tipo vendedor (Filtros x fechas, paginacion y buscador)</h2>
                    <form class="form-inline pull-right" action="{{route('users')}}" method="GET">
                        <div class="form-group mr-2">
                            <input type="text" class="form-control" placeholder="buscador" name="buscador" id="buscador">
                        </div>
                        <div class="form-group mr-2">
                            <input type="date" name="fecha" id="fecha" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                              FILTRAR
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <table class="table table-striped table-hover mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Creado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- {{$users->appends(['buscador' => $name, 'fecha' => $fecha])->links()}} -->
                {{$users->links()}}
            </div>
            <div class="col-md-4">
               <p>Cantidad de users: {{$total_vendedores}}</p>
               <form  action="{{route('users')}}" method="GET">
                    <input type="hidden" name="buscador" value="{{$name}}" class="form-control">
                    <input type="hidden" name="fecha" value="{{$fecha}}" class="form-control">
                    <input type="hidden" name="opcion" value="pdf" class="form-control">
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">
                                Export to PDF
                            </button>
                        </div>
                </form>
            </div>
        </div>


    </div>

    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>
