@extends('users.layouts.app')
@section('content')
<body>
    <div class="container">
    <h1 class="text-center">Ro'yhat</h1>
    <br>

        <table  class="table table-bordered">
            <thead>
                <tr>
                    <td>T/R</td>
                    <td>Tashkilot nomi</td>
                    <td>Tashkilot manzili</td>
                    <td>Telefon raqami</td>
                </tr>

            </thead>
            <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>{{ (($companies->currentpage()-1)*$companies->perpage() + ($loop->index+1) )}}</td>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->Address }}</td>
                        <td>{{ $company->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $companies->links() }}
    @endsection
    </div>
