@extends('users.layouts.app')
@section('content')
    <h1 class="text-center p-3">Tashkilot qo'shish</h1>
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
                <form method="POST" action="{{ route('companies.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Tashkilot nomi</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" >
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Adress</label>
                        <input type="text" name="address" class="form-control" id="address" value="{{ old('address')}}">
                    </div>
                        <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" id="number" value="{{ old('phone') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Qo'shish</button>
                </form>

            </div>
        </div>

@endsection
