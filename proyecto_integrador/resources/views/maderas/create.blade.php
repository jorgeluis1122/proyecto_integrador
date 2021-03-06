@extends('layout.layout')
@section('content')
<section class="hero is-black">
  <div class="hero-body">
    <font size="6">
            Formulario para registrar una nueva madera
    </font>
  </div>
</section>

<section class="section">
  <form action="{{ route('maderas.store') }}" method="POST">
    @csrf


    <div class="culumn">

      <div class="">
        <label for=""><b>Nombre<font color="red">*</font>: </b></label>
        <input class="input is-large" type="text" name="Nombre">
      </div>

      <div class="">
        <label for=""><b>Color<font color="red">*</font>: </b></label>
        <input class="input is-large" type="text" name="Color">
      </div>

      <div class="">
        <label for=""><b>Pulgadas cuadradas<font color="red">*</font>: </b></label>
        <input class="input is-large" type="text" name="Pulgada">
      </div>

      <div class="">
        <label for=""><b>Cantidad<font color="red">*</font>: </b></label>
        <input class="input is-large" type="number" name="Cantidad" step="1" min="1">
      </div>
    </div>

      <div>
        <div class="is-flex is-justify-content-space-around">
          <a href="{{ url('maderas/') }}" class="button is-danger is-large">X Cancelar</a>
          <input class="button is-light is-large" type="reset" value="Restablecer">
          <input class="button is-info is-large" type="submit" value="Guardar">
        </div>
      </div>
  </form>
</section>

@endsection
