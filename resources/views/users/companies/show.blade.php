@extends('users.layouts.app')
@section('content')
    <h1 class="text-center p-3">Tashkilot haqida</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mb-3">
                <a href="{{ route('companies.index') }}">Ortga</a>
            </div>

            <table class="table table-bordered">
                <tr>
                    <th>Tashkilot nomi</th>
                    <td>{{ $company->name }}</td>
                </tr>
                <tr>
                    <th>Manzil</th>
                    <td>{{ $company->Address }}</td>
                </tr>
                <tr>
                    <th>Telefon raqami</th>
                    <td>{{ $company->phone }}</td>
                </tr>
                <tr>
                    <th>Qoshilgan vaqti</th>
                    <td>{{ $company->created_at }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
