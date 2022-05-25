@extends('layouts.admin')

@section('creatorContent')
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/admin') }}">
            <img src="img/faro.png" width="50" height="28" max-height="none">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" id="inicioID">
                Administracion
            </a>

            <a class="navbar-item" id="deportesID">
                Injeccion SQL
            </a>
            <a class="navbar-item" id="negociosID">
                Almacenado de datos
            </a>

        </div>

        <div class="navbar-end">

            <div class="navbar-item">
                <div class="buttons">

                    <button class="button is-ghost"> {{ Auth::user()->name }}</button>
                    <a href="{{ route('logout') }}" class=" button is-danger is-light"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="panel-block">
    <!--Llamamos al metodo admin.index el controlador-->
    <form action="{{route('admin.index')}}" method="get">
        <!--El moetodo al final de la peticion get-->
        <p class="control has-icons-left">
            <button class="button is-link is-focused">Buscar</button>
            <a href="{{route('admin.create')}}" class="button is-warning is-focused">Nuevo</a>
            <input class="input" type="text" placeholder="Search" name="texto" value="{{$texto}}">




            <span class="icon is-left">
                <i class="fas fa-search" aria-hidden="true"></i>
            </span>

        </p>


    </form>

</div>

<table class="table">
    <thead>
        <tr>
            <th>Opciones</th>
            <th>ID</th>
            <th>Apellidos</th>
            <th>nombre</th>
            <th><abbr title="Drawn">Rut</abbr></th>
            <th><abbr title="Lost">Celular</abbr></th>
            <th>Direccion</th>
            <th>Email</th>

        </tr>
    </thead>
    <tbody>
        @if(count($clientes)<=0)<tr>
            <td colspan="8">No hay resultados</td>
            </tr>
            @else
            @foreach ($clientes as $cliente)
            <tr>
                <!-- ruta admin y al metodo edit -->
                <td> <a class="button is-small is-link is-inverted"
                        href="{{route('admin.edit',$cliente->idcliente)}}">Editar</a>
                    -
                    Eliminar
                </td> <!-- cliente es el objeto almacenado -->
                <th>{{$cliente->idcliente}}</th>
                <td>{{$cliente->apellidos}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->documento}}</td>
                <td>{{$cliente->telefono}}</td>
                <td>{{$cliente->direccion}}</td>
                <td>{{$cliente->email}}</td>
            </tr>
            @endforeach
            @endif
    </tbody>
</table>
{{$clientes->links()}}
<!-- maquetamos la paginacion para cuando sobre salga de lo requerido -->
@endsection