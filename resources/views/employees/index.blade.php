@extends('employeespackage::layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>{{__("employeespackage::employeespackage.Liste-des-employés")}}</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('employees.create') }}">Ajouter</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Numéro</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Company</th>
            <th>Ville</th>
            <th>Salaire</th>
            <th>Actions</th>
        </tr>
        @foreach ($employees as $index => $employee)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $employee->nom }}</td>
                <td>{{ $employee->prenom }}</td>
                <td>{{ $employee->company }}</td>
                <td>{{ $employee->ville }}</td>
                <td>{{ $employee->salaire }}</td>
                <td>
                    <form action="{{ route('employees.destroy',$employee) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                    <a class="btn btn-info" href="{{ route('employees.show',$employee) }}">Voir</a>
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee)  }}">Modifier</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
