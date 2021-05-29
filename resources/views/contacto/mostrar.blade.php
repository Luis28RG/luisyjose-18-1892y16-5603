@extends('layout.layout')

@section('contenido')
    <div class="container mt-5 ">
        <h2 style="color:floralwhite">Tabla de Mostrar</h2>
        <table class="table" style="color:floralwhite">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Telefono</th>
                <th scope="col">Asunto</th>
                <th scope="col">Mensaje</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $info)
                <tr>
                    <td>{{$info->id}}</td>
                    <td>{{$info->name}}</td>
                    <td>{{$info->email}}</td>
                    <td>{{$info->phone}}</td>
                    <td>{{$info->subject}}</td>
                    <td>{{$info->message}}</td>
                    <td>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


