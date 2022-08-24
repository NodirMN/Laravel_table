    <div class="mb-3">
        <label for="name" class="form-label">Tashkilot nomi</label>
        <input type="text" name="name" class="form-control" id="name" value="{{ old('name') ?? $company->name }}">
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Adress</label>
        <input type="text" name="address" class="form-control" id="address" value="{{ old('address') ?? $company->Address}}">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" name="phone" class="form-control" id="number" value="{{ old('phone') ?? $company->phone}}">
    </div>
