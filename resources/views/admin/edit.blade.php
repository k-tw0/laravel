<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cliente</title>
    <link rel="stylesheet" href="{{ asset('css/bulma/bulma.min.css') }}"> <!-- Bulma-->
</head>

<style>
.card {
    max-width: 50%;
    padding: 1em;
    top: 40px;
    left: 40px;
}

.buttons .button {
    margin-top: 1rem;
}
</style>

<body>
    <div class="card">
        <div class="card-content">
            <div class="field">
                <form action="{{route('admin.update',$cliente->idcliente)}}" method="post">
                    @csrf
                    @method('PUT')
                    <!-- indica que los datos son confiables -->
                    <label class="label">Apellidos</label>
                    <div class="control">
                        <input class="input" type="text" name="apellidos" placeholder="..." required maxlength="50"
                            value="{{$cliente->apellidos}}">
                    </div>
                    <p class="help">Primer y segundo apellido</p>
                    <label class="label">Nombre</label>
                    <div class="control">
                        <input class="input" type="text" name="nombre" placeholder="..." required maxlength="30"
                            value="{{$cliente->nombre}}">
                    </div>
                    <label class="label">Rut</label>
                    <div class="control">
                        <input class="input" type="text" name="documento" placeholder="..." required maxlength="15"
                            value="{{$cliente->documento}}">
                    </div>
                    <label class="label">Direccion</label>
                    <div class="control">
                        <input class="input" type="text" name="direccion" placeholder="..." required maxlength="150"
                            value="{{$cliente->direccion}}">
                    </div>
                    <label class="label">Telefono</label>
                    <div class="control">
                        <input class="input" type="text" name="telefono" placeholder="..." required maxlength="15"
                            value="{{$cliente->telefono}}">
                    </div>
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="text" name="email" placeholder="..." required maxlength="50"
                            value="{{$cliente->email}}">
                    </div>

                    <div class="buttons">
                        <button class="button is-primary" value="guardar">Guardar</button>
                        <button class="button is-link" value="cancelar">Cancelar</button>
                        <a class="button is-ghost" href="javascript:history.back()">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>