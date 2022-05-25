@extends('layout.layout')
@section('content')

<section class="hero is-danger">
    <div class="hero-body">
        <center>
        <p class="title">
            Formulario para registrar una nueva herramienta
        </p>
        </center>
    </div>
</section>

<section class="section">
    <form action="{{ route('herramientas.store') }}" method="post">
        @csrf
        <div class="columns">

            <div class="column">
                <div>
                    <label for=""><b>Nombre<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="nombre" id="">
                </div>
                <div>
                    <label for=""><b>Marca<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="marca" id="">
                </div>
                <div>
                    <label for=""><b>Modelo<font color="red">*</font>: </b></label>
                    <input class="input is-large" type="text" name="modelo" id="">
                </div>
                <div>
                    <label for=""><b>Descripción<font color="red">*</font>: </b></label>
                    <textarea class="input is-large" name="descripcion" id=""rows="5"></textarea>
                </div>
                <div>
                    <label for=""><b>Cantidad: </b></label>
                    <input class="input is-large" type="text" name="correoElectronico" id="">
                </div>
            </div>
        </div>

        <div>
            <div class="is-flex is-justify-content-space-around">
                <a href="{{ url('herramientas/') }}" class="button is-danger is-large">X Cancelar</a>
                <input class="button is-light is-large" type="reset" value="Restablecer">
                <input class="button is-info is-large" type="submit" value="Guardar">
            </div>
        </div>
    </form>
</section>