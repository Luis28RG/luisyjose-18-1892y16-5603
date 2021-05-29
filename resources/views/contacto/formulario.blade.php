@extends('layout.layout')

@section('contenido')
        <h2 class="container mt-5" style="color:floralwhite">Formulario de Contacto</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <div class="container" style="color:floralwhite">
                <form action="{{route('contacto.store')}}" method="POST" novalidate>
                    @csrf
                <div class="col-12">
                    <label for="nombre" class="form-label">Nombre *</label>
                    <input type="text" class="form-control" name="name"  required>
                </div>
                <div class="col-12">
                    <label for="correo" class="form-label">Correo *</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="col-12">
                    <label for="telefono" class="form-label">Teléfono *</label>
                    <input type="number" class="form-control" name="phone" required>
                </div>
                <div class="col-12">
                    <label for="contenido" class="form-label">Asunto *</label>
                    <input type="text" class="form-control" name="subject" required>
                </div>
                <div class="form-group col-12">
                    <label>Mensaje *</label>
                    <textarea class="form-control" name="message"  rows="4" required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" value="Submit" class="btn btn-dark btn-block">Enviar</button>
                </div>
            </form>
        </div>
@endsection
