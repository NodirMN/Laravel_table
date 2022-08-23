@extends('users.layouts.app')
@section('content')

    <body>

        <h1 class="text-center">Ro'yhat</h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{ route('companies.create') }}">
                <button class="btn btn-primary " type="button">Tashkilot qo'shish</button>
            </a>
        </div>
        <br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>T/R</th>
                    <th>Tashkilot nomi</th>
                    <th>Tashkilot manzili</th>
                    <th>Telefon raqami</th>
                    <th>Amallar</th>

                </tr>

            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ ($companies->currentpage() - 1) * $companies->perpage() + ($loop->index + 1) }}</td>
                        <td><a href="{{ route('companies.show', ['company' => $company->id]) }}">{{ $company->name }}</a>
                        </td>
                        <td>{{ $company->Address }}</td>
                        <td>{{ $company->phone }}</td>
                        <td><a href="{{ route('companies.edit', ['company'=> $company->id]) }}" class="btn btn-info">
                                <i class="bi bi-pencil-square"></i></td>
                        </a>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $companies->links() }}
    @endsection
