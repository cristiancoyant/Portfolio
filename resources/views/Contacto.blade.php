@extends('layouts.plantilla')
@section('title', 'Contacto')
@section('content')
        
<header id="home" class="home">
    <div class="overlay-fluid-block">
        <div class="container text-center">
            <div class="row">
                <div class="home-wrapper">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="home-content">

                            <h1>Contactame</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>			
    </div>
</header>
<br>
<div class="gmail">
    <label>Gmail</label>
<form action="{{route('Contacto.store')}}" method="POST" >
    @csrf
  <label >
      Nombre:
      <br>
      <input type="text" name="name" placeholder="Nombre">
  </label>
  <br>
  @error('name')
      <p><strong>{{$message}}</strong></p>
  @enderror
  <label >
    Correo:
    <br>
    <input type="text" name="correo" placeholder="Correo">
</label>
<br>
@error('correo')
<p><strong>{{$message}}</strong></p>
@enderror
<label >
    Mensaje:
    <br>
<textarea name="mensaje" rows="4"></textarea>
</label>
<br>
@error('mensaje')
<p><strong>{{$message}}</strong></p>
@enderror
<button type="submit">Enviar</button>
</form>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('info'))
    <script>
        Swal.fire(
      'Enviado',
      '{{session("info")}}',
      'success'
    )
    </script>
@endif
</div>
<div class="whatsapp">
<div class="col-md-6">
    <div class="social-contact">
        <label >whatsapp</label>
        <a href="https://api.whatsapp.com/send?phone=541125944865&text= Hola!%20buenas%20creo%20que%20este%20puesto%20le%20puede%20interesar!"><i class="fa fa-phone"></i>1125944865</a>
    </div>
</div>
</div>
    
@endsection