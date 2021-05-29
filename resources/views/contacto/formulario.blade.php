@extends('layout.layout')

@section('contenido')
        <h2 class="container mt-5">Formulario de contacto</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <div class="container">
                <form action="{{route('contacto.store')}}" method="POST" novalidate>
                    @csrf

                <div class="col-12">
                    <label for="nombre" class="form-label">Name *</label>
                    <input type="text" class="form-control" name="name"  required>
                </div>
                <div class="col-12">
                    <label for="correo" class="form-label">Email *</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="col-12">
                    <label for="telefono" class="form-label">Phone *</label>
                    <input type="number" class="form-control" name="phone" required>
                </div>
                <div class="col-12">
                    <label for="contenido" class="form-label">Subject *</label>
                    <input type="text" class="form-control" name="subject" required>
                </div>
                <div class="form-group col-12">
                    <label>Message *</label>
                    <textarea class="form-control" name="message"  rows="4" required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" value="Submit" class="btn btn-dark btn-block">Send</button>
                </div>
            </form>
        </div>

@endsection
