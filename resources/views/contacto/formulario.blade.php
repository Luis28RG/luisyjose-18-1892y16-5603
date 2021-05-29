@extends('layout.layout')

@section('contenido')
        <h2 class="container mt-5">Formulario de Categoria</h2>

        <div class="container">
            <form class="row g-3">
                <div class="col-12">
                    <label for="nombre" class="form-label">Name *</label>
                    <input type="text" class="form-control" id="nombre" required>
                </div>
                <div class="col-12">
                    <label for="correo" class="form-label">Email *</label>
                    <input type="email" class="form-control" id="correo" required>
                </div>
                <div class="col-12">
                    <label for="telefono" class="form-label">Phone *</label>
                    <input type="number" class="form-control" id="telefono" required>
                </div>
                <div class="col-12">
                    <label for="contenido" class="form-label">Subject *</label>
                    <input type="text" class="form-control" id="contenido" required>
                </div>
                <div class="form-group col-12">
                    <label>Message *</label>
                    <textarea class="form-control" name="mensaje" id="mensaje" rows="4" required></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" value="Submit" class="btn btn-dark btn-block">Send</button>
                </div>
            </form>
        </div>

@endsection
