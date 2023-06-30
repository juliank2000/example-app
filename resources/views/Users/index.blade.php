<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Usuarios</title>
</head>

<body>
    
    <div class="container-fluid">
        <br>
            <a class="btn btn-success" href="{{ route('usuarios.create') }}">Nuevo Usuario</a>
        <h2>Hola desde blade</h2>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
        @endif
        
        <table class="table">
            <thead>
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">primer nombre</th>
                    <th scope="col">segundo nombre</th>
                    <th scope="col">primer apellido</th>
                    <th scope="col">segundo apellido</th>
                    <th scope="col">email</th>
                </tr>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->primer_nombre }}</td>
                        <td>{{ $user->segundo_nombre }}</td>
                        <td>{{ $user->primer_apellido }}</td>
                        <td>{{ $user->segundo_apellido }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <form action="{{ route('usuarios.destroy',$user->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('usuarios.edit',$user->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>                         
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
        {{ $users->render() }}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </div>
    
</body>

</html>
