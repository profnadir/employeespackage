@extends('employeespackage::layouts.app')
@section('content')
    <h1>afficher détail d'un employé</h1>
    <table class="table table-bordered">
        <tr>
            <th>Nom:</th>
            <td>{{ $employee->nom }}</td>
        </tr>
        <tr>
            <th>Prénom:</th>
            <td>{{ $employee->prenom }}</td>
        </tr>
        <tr>
            <th>Société:</th>
            <td>{{ $employee->company }}</td>
        </tr>
        <tr>
            <th>Ville:</th>
            <td>{{ $employee->ville }}</td>
        </tr>
        <tr>
            <th>Salaire:</th>
            <td> {{ $employee->salaire }} DH</td>
        </tr>
    </table>
@endsection
