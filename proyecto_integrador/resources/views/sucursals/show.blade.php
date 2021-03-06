@extends('layout.layout')
@section('content')
<section class="hero is-link">
    <div class="hero-body">
        <p class="title">
            Carpinteria Diamante Azul
        </p>
    </div>
</section>
<section class="section">
    <div class="columns is-mobile is-centered">
        <div class="column is-half-width">
            <center><br>
            <font size="8">
            <b>Información de sucursal</b>
            </font>
            </center>
        </div>
    </div>
    <div class="columns is-mobile is-centered">
        <justify>
        <div class="column is-half-width">
            <h3><b>Teléfono:</b>          {{ $sucursal->Telefono}}</h3><br>
            <h3><b>Calle:</b>             {{ $sucursal->Calle}}</h3><br>
            <h3><b>Número Exterior:</b>   {{ $sucursal->NumeroExterior}}</h3><br>
            <h3><b>Colonia:</b>           {{ $sucursal->Colonia}}</h3><br>
            <h3><b>Municipio:</b>         {{ $sucursal->Municipio}}</h3><br>
            <h3><b>Fecha de registro:</b> {{ $sucursal->created_at}}</h3><br>
            <center>
            <a href="/sucursals" class="button is-medium is-primary">Regresar</a>
              <a href="{{ route('sucursals.edit', $sucursal->id) }}" class="button is-medium is-info">Editar</a>
            </center>
        </div>
        </justify>
    </div>
</section>
