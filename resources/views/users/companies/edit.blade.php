@extends('users.layouts.app')
@section('content')
    <h1 class="text-center p-3">Tashkilot tahrirlash</h1>
        <div class="row">
            <div class="col-md-6">
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <form method="POST" action="{{ route('companies.update', ['company' => $company->id]) }}">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tashkilot nomi</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $company->name }}" >
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Adress</label>
                        <input type="text" name="address" class="form-control" id="address" value="{{ $company->Address}}">
                    </div>
                        <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" id="number" value="{{ $company->phone}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </form>

            </div>
        </div>

@endsection
