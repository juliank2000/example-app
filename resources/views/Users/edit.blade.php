<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('usuarios.index') }}"
                        enctype="multipart/form-data">Volver</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('usuarios.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>primer_nombre:</strong>
                        <input type="text" name="primer_nombre" value="{{ old($user->primer_nombre) }}"
                            class="form-control" placeholder="">
                        @error('primer_nombre')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>segundo_nombre:</strong>
                        <input type="text" name="segundo_nombre" value="{{ old($user->segundo_nombre) }}"
                            class="form-control" placeholder="">
                        @error('segundo_nombre')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>primer_apellido:</strong>
                        <input type="text" name="primer_apellido" value="{{ old($user->primer_apellido) }}"
                            class="form-control" placeholder="">
                        @error('primer_apellido')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>segundo_apellido:</strong>
                        <input type="text" name="segundo_apellido" value="{{ old($user->segundo_apellido) }}"
                            class="form-control" placeholder="">
                        @error('segundo_apellido')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary ml-3">Guardar</button>
    </div>
    </form>
    </div>
</body>

</html>
