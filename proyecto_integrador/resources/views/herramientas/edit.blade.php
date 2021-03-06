@extends('layout.layout')
@section('content')

<section class="hero is-black">
    <div class="hero-body">
        <center>
        <font size="6">
                Formulario para editar la información de: {{ $herramienta->nombre }} {{ $herramienta->marca }}
            </font>
        </center>
    </div>
</section>

<section class="section">
    <form action="{{ route('herramientas.update', $herramienta->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="columns">

            <div class="column">

              <div>
                <label for=""><b>Sucursal<font color="red">*</font>: </b></label>
                  <select name ="idSucursal" class="input is-large">
                      @forelse($herramientas as $herramienta)
                    <option value="{{$herramienta['id']}}">      {{$herramienta->Sucursal->Calle}} {{$herramienta->Sucursal->Colonia}} {{$herramienta->Sucursal->Municipio}}</option>
                    @empty
                    <p>no hay sucursal Existente</p>
                @endforelse
                  </select>

              </div>
                <div>
                    <label for=""><b>Nombre<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" value=" {{ $herramienta->nombre }}" name="nombre" id="">
                </div>
                <div>
                    <label for=""><b>Marca<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" value=" {{ $herramienta->marca }}" name="marca" id="">
                </div>
                <div>
                    <label for=""><b>Modelo: </b></label>
                    <input class="input is-large" type="text" value=" {{ $herramienta->modelo }}" name="modelo" id="">
                </div>
                <div>
                    <label for=""><b>Descripción: </b></label>
                    <input class="input is-large" type="text" value=" {{ $herramienta->descripcion }}" name="descripcion" id="">
                </div>
                <div>
                    <label for=""><b>Cantidad<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="number" value="{{ $herramienta->cantidad }}" name="cantidad" step="1" min="1" id="">
                </div>
            </div>

        </div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('herramientas/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-link is-large" type="submit" value="Guardar">
            </div>
        </div>
    </form>
</section>
