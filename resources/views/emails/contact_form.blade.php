@extends('emails.layout')

@section('contenido')
    <table>
        <tbody>
        <tr>
            <td>Name: {{ $mensaje->name }}</td>
        </tr>
        <tr>
            <td>Email: {{ $mensaje->email }}</td>
        </tr>
        <tr>
            <td>Phone: {{ $mensaje->phone }}</td>
        </tr>
        <tr>
            <td>Country: {{ $mensaje->country }}</td>
        </tr>
        <tr>
            <td>Mesagge: {{ $mensaje->message }}</td>
        </tr>
        </tbody>
    </table>
@stop

