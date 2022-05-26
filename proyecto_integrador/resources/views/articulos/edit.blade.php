<!--codigo para botón editar-->
@extends('layout.layout')
@section('content')

<section class="hero is-link">
    <div class="hero-body">
        <center>
        <p class="title">
            <b>Formulario para editar la iformación de: </b>{{ $articulo->Nombre }}
         </p>
        </center>
    </div>
</section>


<section class="section">
    <form action="{{ route('articulos.update', $articulo->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="columns">

            <div class="column">
                <div>
                    <label for="">Nombre </label>
                    <input class="input is-large" type="text" value=" {{ $articulo->Nombre }}" name="Nombre" id="">
                </div>
                <div>
                    <label for="">Tamaño </label>
                    <input class="input is-large" type="text" value=" {{ $articulo->Tamaño }}" name="Tamaño" id="">
                </div>
                <div>
                    <label for="">Color</label>
                    <input class="input is-large" type="text" value=" {{ $articulo->Color }}" name="Color" id="">
                </div>
            </div>
            <div class="column">
                <div>
                    <label for="">Precio </label>
                    <input class="input is-large" type="text" value=" {{ $articulo->Precio }}" name="Precio" id="">
                </div>
                <div>
                    <label for="">Descripcion </label>
                    <input class="input is-large" type="text" value=" {{ $articulo->Descripcion }}" name="Descripcion" id="">
                </div>

                <div>
                    <label for="">Tipo </label>
                    <select class="input is-large" type="text" name="Tipo" id="">
                        <option value="{{ $articulo->Tipo }}">{{ $articulo->Tipo }}</option>
                            <option value="Campestre">Campestre</option>
                            <option value="Minimalista">Minimalista</option>
                            <option value="Rustico">Rustico</option> 
                        </select>
                </div>
                
            </div> 
        </div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('articulos/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
        </div>
    </form>
</section>